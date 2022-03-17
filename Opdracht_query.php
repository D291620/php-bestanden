<?php
    include ('config.php')

    $query = "SELECT * FROM persoon";

    $stm = $con->prepare($query);

    if($stm->execute())
    {
        $result = $stm->fetchALL(PDO::FETCH_OBJ);

        foreach($result as $pers)
        {   
            echo $pers->achternaam."br/>";
        }