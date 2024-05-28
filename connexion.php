<?php

    $host = "db.3wa.io";
    $port = "3306";
    $dbname = "kilianjanus_daniellovers";
    $connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";
    
    $user = "kilianjanus";
    $password = "65c31ce01e7314f2e27acf9451035f58";
    
    $db = new PDO(
        $connexionString,
        $user,
        $password
    );
?>