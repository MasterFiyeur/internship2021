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
    $req = $conn -> prepare('SELECT * FROM dict limit 2;');
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