<?php
    $host = "localhost";
    $dbname ="iot_ext";
    $username ="root";
    $password = "";
    
    try{
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        echo "verbinding is gelukt";
    } catch (PDOExepetion $ex) {
        echo "er is geen verbinding";
    }
    ?>



