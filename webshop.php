    <!DOCTYPE html>
    <html>

<head>
    <title>Webshop</title>
</head>

<body>
    <h1>Welkom bij mijn webshop!</h1>
    <hr>
    <form method='post'>	
        artikelnaam:<input type='text' name='artikelnaam'/><br/>
        artikelnummer:<input type='text' name='artikelnummer'/><br/>
        prijs:<input type='text' name='prijs'/><br/>
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
    
    $artikelnaam = $_POST["artikelnaam"];
    $artikelnummer = $_POST["artikelnummer"];
    $prijs = $_POST["prijs"];

    $sql = "insert into Webshop (artikelnummer,artikelnaam,prijs) VALUES('$artikelnummer','$artikelnaam','$prijs')";

    $stm = $pdo->prepare($sql);

    $stm->execute();
}
    ?>
    <hr>
    <?php
$query = "SELECT * FROM webshop";

    $stm = $pdo->prepare($query);

    if($stm->execute())
    {
        $result = $stm->fetchALL(PDO::FETCH_OBJ);

        foreach($result as $pers)
        {   
            echo $pers->artikelnaam." €";
             echo $pers->prijs."<br/>";
        }
    }
     ?>
</body>
</html>
    