<?php

function connect_to_db(){
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_schema = "happy_app";
                
    $mysqli = new mysqli($db_host,$db_user,$db_pass,$db_schema);
 
    if(mysqli_connect_errno()) {
        echo("Connect failed: ".mysqli_connect_error());
        exit();
    }

        //set connection encoding
    if (!$mysqli->set_charset("utf8")) {
        echo("Error loading character set utf8: ". $mysqli->error);
    }

    return $mysqli;
}
function close_connection_to_db($mysqli){
    mysqli_close($mysqli);        
}

?>