<?php


function connect(){
	include 'db_config.php';
	try{
		$conn = new PDO("pgsql:host={$db_host};dbname={$db_name};port={$db_port};options='--client_encoding={$db_enc}'", $db_user, $db_pass);
		return $conn;
	}catch(PDOException $e){
		print "PDO connection error";
		return null;
	}
}

function test(){
	$conn = connect();
	$req = $conn -> prepare("SELECT resp.word AS rw, dict.word, COUNT(resp.word) AS cnt FROM resp INNER JOIN dict ON 
		dict.id=resp.id_w inner join users_jsonb on users_jsonb.id=resp.id_u where lower(dict.word) similar to 
		'((un|une|le|la|les) )*a%' group by dict.word, rw order by dict.word, cnt desc, rw;");
	$req -> execute();
	$res = array();
	foreach ($req as $row) {
		echo "<p>";
		var_dump($row);
		echo "</p>";
	}
}

function db_right_dict($chr){
	$res = Array();
	$conn = connect();
	if($conn){
		$search = "";
		//$search = searchRequest($json);
				if(strlen($chr)>0) {
					$rest = substr(strtolower($chr), 1);
					if(strtolower($chr[0]) == 'e'){
						$search .= "AND  lower(dict.word) SIMILAR  TO '((un|une|le|la|les) )*(e|é|è|ê){$rest}%' ";
					}else 
					if(strtolower($chr[0]) == 'a'){
						$search .= "AND  lower(dict.word) SIMILAR  TO '((un|une|le|la|les) )*(a|à|â){$rest}%' ";
					}else
					if(strtolower($chr[0]) == 'o'){
						$search .= "AND  lower(dict.word) SIMILAR  TO '((un|une|le|la|les) )*(o|ô){$rest}%' ";
					}else
					if(strtolower($chr[0]) == 'c'){
						$search .= "AND  lower(dict.word) SIMILAR  TO '((un|une|le|la|les) )*(c|ç){$rest}%' ";
					}else
					if(strtolower($chr[0]) == 'i'){
						$search .= "AND  lower(dict.word)  SIMILAR  TO '((un|une|le|la|les) )*(i|î){$rest}%' ";
					}else
					if(strtolower($chr[0]) == 'u'){
						$search .= "AND  (lower(dict.word) SIMILAR TO '((un|une|le|la|les) )*(u|û){$rest}%'  and ".
										"lower(dict.word) not similar to '(un|une) (1|2|3|4|5|6|7|8|9|0|a|à|â|b|c|ç|d|e|é|è|ê|f|g|h|i|î|j|k|l|m|n|o|ô|p|q|r|s|t|v|w|x|y|z)%') ";
					}else
					if(strtolower($chr[0]) == 'l'){
						$search .= "AND  (lower(dict.word) similar to '((un|une|le|la|les) )*l{$rest}%' and ".
										"lower(dict.word) not similar to '(la|le|les) (1|2|3|4|5|6|7|8|9|0|a|à|â|b|c|ç|d|e|é|è|ê|f|g|h|i|î|j|k|m|n|o|ô|p|q|r|s|t|u|û|v|w|x|y|z)%') ";
					}else
					if(strtolower($chr[0]) == '?'){
						$search .= "AND  lower(dict.word)  NOT SIMILAR  TO ".
							"'(1|2|3|4|5|6|7|8|9|0|a|à|â|b|c|ç|d|e|é|è|ê|f|g|h|i|î|j|k|l|m|n|o|ô|p|q|r|s|t|u|û|v|w|x|y|z)%' ";
					}else { 

						$search .= "AND lower(dict.word) similar to '((un|une|le|la|les) )*".strtolower($chr)."%' ";
					}
 
				}
		$result = $conn -> prepare("select resp.word as rw, dict.word, count(resp.word) as cnt 
										from resp inner join dict on dict.id=resp.id_w  
										inner join users_jsonb on users_jsonb.id=resp.id_u 
										where dict.test=12 {$search}
										group by dict.word, rw
										order by dict.word, cnt desc, rw;");
		$result -> execute();
		if(!$result){$conn = null; return Array();}
		$str = "";
		$word = "";
		$num = -1;
		$cnt = Array(0,0,0,0);
		foreach ($result as $arr){
			if($word == ""){
				$word = $arr[1];
				if($arr[0] != '-'){
					$str = $arr[0];
					$num = $arr[2];
					$cnt[0] = $arr[2];
					$cnt[1] = 1;
					$cnt[2] = ($arr[2] == 1)?1:0;
					$cnt[3] = 0;
				}else{
					$str = "";
					$cnt[0] = $arr[2]; $cnt[1] = 0; $cnt[2] = 0; $cnt[3] = $arr[2];
					$num = $arr[2];
				}
			}else{
				if($word == $arr[1]){
					if($arr[0] != '-'){
						if(($num != $arr[2]) && ($str !="")){
							$str .= " \\{$num}\\; ";
						}
						$str .= ", $arr[0]";
						$cnt[0] += $arr[2];
						$cnt[1] += 1;
						$cnt[2] += ($arr[2] == 1)?1:0;
						$num = $arr[2];
					}else{
						$cnt[0] += $arr[2];
						$cnt[3] += $arr[2];
//						$num = $arr[2];
					}
				}else{
					$str = preg_replace("/^, /", "", $str);
					$str = preg_replace("/; , /", "; ", $str);
					$str .= " \\{$num}\\";
					array_push($res, Array($word, "{$cnt[0]}", "{$str}<br>({$cnt[0]}, {$cnt[1]}, {$cnt[3]}, {$cnt[2]})"));
					$num = -1;
					$word = $arr[1];
					$str = "";
					if($arr[0] != '-'){
						if(($num != $arr[2]) && ($str !="")){
							$str .= " \\{$num}\\; ";
						}
						$str .= ", $arr[0]";
						$cnt[0] = $arr[2];
						$cnt[1] = 1;
						$cnt[2] = ($arr[2] == 1)?1:0;
						$cnt[3] = 0;
						$num = $arr[2];
					}else{
						$str = "";
						$cnt[0] = $arr[2]; $cnt[1] = 0; $cnt[2] = 0; $cnt[3] = $arr[2];
						$num = $arr[2];
					}
				}
			}
		}
		$str = preg_replace("/^, /", "", $str);
		$str = preg_replace("/; , /", "; ", $str);
		$str .= " \\{$num}\\";
		if($word != "") array_push($res, Array($word, "{$cnt[0]}", "{$str}<br>({$cnt[0]}, {$cnt[1]}, {$cnt[3]}, {$cnt[2]})"));
		return $res;
	}else{
		return Array();
	}
	return Array();
}
?>