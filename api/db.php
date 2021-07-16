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
    $req = $conn -> prepare("select resp.word as rw, dict.word, count(resp.word) as cnt from resp inner join dict on dict.id=resp.id_w inner join users_jsonb on users_jsonb.id=resp.id_u where lower(dict.word) similar to '((un|une|le|la|les) )*a%' group by dict.word, rw order by dict.word, cnt desc, rw;");
    $req -> execute();
    $res = array();
    foreach ($req as $row) {
        echo "<p>";
        var_dump($row);
        echo "</p>";
    }
}

test();

?>