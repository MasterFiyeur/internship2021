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
						$search .= "AND  (lower(dict.word) SIMILAR TO '((un|une|le|la|les) )*(u|û){$rest}%'  AND ".
										"lower(dict.word) not similar to '(un|une) (1|2|3|4|5|6|7|8|9|0|a|à|â|b|c|ç|d|e|é|è|ê|f|g|h|i|î|j|k|l|m|n|o|ô|p|q|r|s|t|v|w|x|y|z)%') ";
					}else
					if(strtolower($chr[0]) == 'l'){
						$search .= "AND  (lower(dict.word) similar to '((un|une|le|la|les) )*l{$rest}%' AND ".
										"lower(dict.word) not similar to '(la|le|les) (1|2|3|4|5|6|7|8|9|0|a|à|â|b|c|ç|d|e|é|è|ê|f|g|h|i|î|j|k|m|n|o|ô|p|q|r|s|t|u|û|v|w|x|y|z)%') ";
					}else
					if(strtolower($chr[0]) == '?'){
						$search .= "AND  lower(dict.word)  NOT SIMILAR  TO ".
							"'(1|2|3|4|5|6|7|8|9|0|a|à|â|b|c|ç|d|e|é|è|ê|f|g|h|i|î|j|k|l|m|n|o|ô|p|q|r|s|t|u|û|v|w|x|y|z)%' ";
					}else { 

						$search .= "AND lower(dict.word) similar to '((un|une|le|la|les) )*".strtolower($chr)."%' ";
					}
 
				}
		$result = $conn -> prepare("SELECT resp.word AS rw, dict.word, count(resp.word) AS cnt 
										FROM resp INNER JOIN dict ON dict.id=resp.id_w  
										INNER JOIN users_jsonb ON users_jsonb.id=resp.id_u 
										WHERE dict.test=12 {$search}
										GROUP BY dict.word, rw
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
							$str .= " <b>{$num}</b>; ";
						}
						$str .= ", $arr[0]";
						$cnt[0] += $arr[2];
						$cnt[1] += 1;
						$cnt[2] += ($arr[2] == 1)?1:0;
						$num = $arr[2];
					}else{
						$cnt[0] += $arr[2];
						$cnt[3] += $arr[2];
					}
				}else{
					$str = preg_replace("/^, /", "", $str);
					$str = preg_replace("/; , /", "; ", $str);
					$str .= " <b>{$num}</b>";
					array_push($res, Array($word, "{$cnt[0]}", "{$str}<br>({$cnt[0]}, {$cnt[1]}, {$cnt[3]}, {$cnt[2]})"));
					$num = -1;
					$word = $arr[1];
					$str = "";
					if($arr[0] != '-'){
						if(($num != $arr[2]) && ($str !="")){
							$str .= " <b>{$num}</b>; ";
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
		$str .= " {$num}";
		if($word != "") array_push($res, Array($word, "{$cnt[0]}", "{$str}<br>({$cnt[0]}, {$cnt[1]}, {$cnt[3]}, {$cnt[2]})"));
		usort($res, "numberCompare");
		return $res;
	}else{
		return Array();
	}
	return Array();
}

function db_back_dict($chr,$filter) {
	$res = Array();
	$conn = connect();
	if ($conn) {
		//$search = searchRequest($json);
		$search_char = "";
		if ($filter->getMethod()=="letter" && strlen($chr) > 0) {
			$rest = substr(strtolower($chr), 1);
			if (strtolower($chr[0]) == 'e') {
				$search_char .= "AND  lower(resp.word_inv) SIMILAR  TO '((un|une|le|la|les) )*(e|é|è|ê){$rest}%' ";
			} else
			if (strtolower($chr[0]) == 'a') {
				$search_char .= "AND  lower(resp.word_inv) SIMILAR  TO '((un|une|le|la|les) )*(a|à|â){$rest}%' ";
			} else
			if (strtolower($chr[0]) == 'o') {
				$search_char .= "AND  lower(resp.word_inv) SIMILAR  TO '((un|une|le|la|les) )*(o|œ|ô){$rest}%' ";
			} else
			if (strtolower($chr[0]) == 'c') {
				$search_char .= "AND  lower(resp.word_inv) SIMILAR  TO '((un|une|le|la|les) )*(c|ç){$rest}%' ";
			} else
			if (strtolower($chr[0]) == 'i') {
				$search_char .= "AND  lower(resp.word_inv)  SIMILAR  TO '((un|une|le|la|les) )*(i|î){$rest}%' ";
			} else
			if (strtolower($chr[0]) == 'u') {
				$search_char .= "AND  (lower(resp.word_inv) SIMILAR TO '((un|une|le|la|les) )*(u|û){$rest}%'  AND ".
				"lower(resp.word) not similar to '(un|une) (1|2|3|4|5|6|7|8|9|0|a|à|â|b|c|ç|d|e|é|è|ê|f|g|h|i|î|j|k|l|m|n|o|ô|p|q|r|s|t|v|w|x|y|z)%') ";
			} else
			if (strtolower($chr[0]) == 'l') {
				$search_char .= "AND  (lower(resp.word_inv) similar to '((un|une|le|la|les) )*l{$rest}%' AND ".
				"lower(resp.word) not similar to '(la|le|les) (1|2|3|4|5|6|7|8|9|0|a|à|â|b|c|ç|d|e|é|è|ê|f|g|h|i|î|j|k|m|n|o|ô|p|q|r|s|t|u|û|v|w|x|y|z)%') ";
			} else
			if (strtolower($chr[0]) == '?') {
				$search_char .= "AND  lower(resp.word_inv)  NOT SIMILAR  TO ".
				"'(1|2|3|4|5|6|7|8|9|0|a|à|â|b|c|ç|d|e|é|è|ê|f|g|h|i|î|j|k|l|m|n|o|œ|ô|p|q|r|s|t|u|û|v|w|x|y|z)%' ";
			} else {
				$search_char .= "AND lower(resp.word_inv) similar to '((un|une|le|la|les) )*".strtolower($chr).
				"%' ";
			}
		}
		$result = $conn -> prepare("SELECT dict.word, resp.word_inv AS rw, count(dict.word) AS cnt, resp.checked AS ch 
			FROM resp INNER JOIN dict ON dict.id = resp.id_w WHERE resp.id_u in (SELECT 
			users_jsonb.id FROM users_jsonb WHERE users_jsonb.id_t = 12) 
			AND resp.word_inv <> '-' $search_char GROUP BY rw, dict.word, ch ORDER BY rw, 
			cnt desc, dict.word;");
		$result -> execute();
		if (!$result) {
			$conn = null;
			return Array();
		}
		$str = ""; $word = ""; $chk = 0; $cnt = Array(0, 0); $num = -1;
		foreach($result as $arr){
			if ($word == "") {
				$num = $arr[2];
				$word = $arr[1];
				$chk = $arr[3];
				$str = "$arr[0]";
				$cnt[0] = $arr[2];
				$cnt[1] = 1;
			} else {
				if ($word == $arr[1]) {
					if (($num != $arr[2]) && ($str != "")) {
						$str .= " {$num}; ";
					}
					$str .= ", $arr[0]";
					$cnt[0] += $arr[2];
					$cnt[1] += 1;
					$num = $arr[2];
				} else {
					$str .= " {$num}; ";
					$str = preg_replace("/; , /", "; ", $str);
					if($filter->getMethod()=="stim" && $cnt[1]>=$chr[0] && $cnt[1]<=$chr[1]){
						array_push($res, Array($word, $cnt[0], "{$str}<br>({$cnt[0]}, {$cnt[1]})", $chk));
					}
					$word = $arr[1];
					$chk = $arr[3];
					$str = $arr[0];
					$cnt[0] = $arr[2];
					$cnt[1] = 1;
					$num = $arr[2];
				}
			}
		}
		$str .= " {$num}; "; $str = preg_replace("/; , /", "; ", $str);
		if ($word != "") {
			array_push($res, Array($word, $cnt[0], "{$str}<br>({$cnt[0]}, {$cnt[1]})", $chk));
		}
		usort($res, "numberCompare");
		return $res;
	}
	else {
		return Array();
	}
	return Array();
}

function alphabetCompare($aa, $bb){
	preg_match("/((un|une|le|la|les) )?(.*)$/i", $aa[0], $a);
	preg_match("/((un|une|le|la|les) )?(.*)$/i", $bb[0], $b);

	$patterns = array();
	$patterns[0] = '/(é|è|ê)/';
	$patterns[1] = '/(à|â)/';
	$patterns[2] = '/ô/';
	$patterns[3] = '/(î|ï)/';
	$patterns[4] = '/û/';
	$replacements = array();
	$replacements[0] = 'e';
	$replacements[1] = 'a';
	$replacements[2] = 'o';
	$replacements[3] = 'i';
	$replacements[4] = 'u';
	$aaa =  preg_replace($patterns, $replacements, $a[3]);
	$bbb =  preg_replace($patterns, $replacements, $b[3]);

	$res = strcasecmp($aaa, $bbb);
	return $res;
}

function numberCompare($aa, $bb){
	if($aa[1] == $bb[1]) return 0;
	return ($aa[1] < $bb[1])? 1: -1;
}
?>
