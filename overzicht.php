    <?php
    include('Database.php');
    ?>
<!DOCTYPE html>
<html>

<head>
    <title>Overzicht</title>
</head>

<body>
    <h1>Overzicht van alle bestellingen</h1>
    <?php 
    $query = "SELECT * FROM bestellingen";
    $stm = $pdo -> prepare ($query);
    if ($stm->execute()) {
        $bestellingen = $stm->fetchAll(PDO::FETCH_OBJ);
        foreach($bestellingen as $bestelling) {
        echo "ID: $bestelling->id Datum: $bestelling->datum ".
            "Artikel:$bestelling->artikelnummer Aantal: $bestelling->aantal<br/>";
    }
}

?>
<h3> Overzicht van bestellingen van 12 Maart 2022</h3>
<?php 
    $query = "SELECT * FROM bestellingen WHERE datum = '2022-03-12'";
    $stm = $pdo -> prepare ($query);
    if ($stm->execute()) {
        $bestellingen = $stm->fetchAll(PDO::FETCH_OBJ);
        foreach($bestellingen as $bestelling) {
        echo "ID: $bestelling->id Datum: $bestelling->datum ".
            "Artikel:$bestelling->artikelnummer Aantal: $bestelling->aantal<br/>";
    }
}

?>
<h3> Overzicht van bestellingen van 13 Maart 2022</h3>
<?php 
     $query = "SELECT * FROM bestellingen WHERE datum = '2022-03-13'";
    $stm = $pdo -> prepare ($query);
    if ($stm->execute()) {
        $bestellingen = $stm->fetchAll(PDO::FETCH_OBJ);
        foreach($bestellingen as $bestelling) {
        echo "ID: $bestelling->id Datum: $bestelling->datum ".
            "Artikel:$bestelling->artikelnummer Aantal: $bestelling->aantal<br/>";
    }
}

?>
<h3> Overzicht van bestellingen van 20 Maart 2022</h3>
<?php 
     $query = "SELECT * FROM bestellingen WHERE datum = '2022-03-20'";;
    $stm = $pdo -> prepare ($query);
    if ($stm->execute()) {
        $bestellingen = $stm->fetchAll(PDO::FETCH_OBJ);
        foreach($bestellingen as $bestelling) {
        echo "ID: $bestelling->id Datum: $bestelling->datum ".
            "Artikel:$bestelling->artikelnummer Aantal: $bestelling->aantal<br/>";
    }
}

?>