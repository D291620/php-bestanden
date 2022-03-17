<Doctype html>
<html>
<head>
    <title> Zoekventster webshop!</title>
<head>
<body>
<h1> Welkom bij het Zoekvenster van mijn webshop </h1>
<hr>

<from method = 'POST'>
    artikelnummer: <input type='text' name='artikelnummer'/><br/>
    <input type="submit" name="btnsave" value="opslaan"/>
</form>

<?php
    $host = "localhost";
    $dbname = "webshop";
    $username = "root";
    $password = "";

    try{
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    } catch (PDOExepetion $ex) {
        echo "er is geen verbinding"; 
    }
if (isset($_POST["btnsave"])){

    Echo 'run';
    $artikelnummer = $_POST ["artikelnummer"];

    $query = "SELECT * FROM webshop WHERE artikelnummer =  '$artikelnummer'";

    $stm = $pdo->prepare($query);

    if ($stm->execute())
    {
        $result = $stm->fetchALL(PDO::FETCH_OBJ);

        foreach($result as $pers)
        {   
            echo $pers->artikelnaam." €";
             echo $pers->prijs."<br/>";
        }
    }
}
?>
<body>
<?php