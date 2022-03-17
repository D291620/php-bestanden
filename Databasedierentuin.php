<?php
   $host = "localhost";
   $dbname ="dierentuinblijdorp";
   $username ="root";
   $password = "";

    try
    {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $sth = $pdo->prepare("SELECT `Gebruiker`, `Wachtwoord` FROM `users` WHERE 1;");
        $sth->execute();
        while ($row = $sth->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) 
        {
            $data = $row[0] . "\t" . $row[1] . "<br>";
            print $data;
        }
        echo "verbinding is gelukt<br>";
    } catch (PDOExepetion $ex)
    {
        echo "er is geen verbinding";
    }
    
    ?>