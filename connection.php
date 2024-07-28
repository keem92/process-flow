<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "workflow";

    $conn = mysqli_connect($server, $username, $password, $db);

    if($conn){
        echo("");
    }else{
        echo("Connection Failed!!!");
    }
?>