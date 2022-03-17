
<!doctype html>
<html>
<head>

<title>
    <title>Aanmelden</title>
    
</head>
<body>

    <form name = 'aanmelden' method = "POST"> 
    <label for="aanhef"> Aanhef:</label>
    <input type="text" name="aanhef" id= 'aanhef'> 
    <br>
    <label for=""> Geslacht:</label>
    <input type = "radio" name ="geslacht" value="man"> Man
    <input type = "radio" name ="geslacht" value="vrouw"> Vrouw
    <input type = "radio" name ="geslacht" value="X"> X
    <br>
    <label for="naam">Naam:</Label>
    <input type ="text" name= "naam" id="naam" placeholder="Naam">  
    <br>
    <label for="naam">Adres:</Label>
    <input type ="text" name= "adres" id="adres" placeholder="adres">
    <br>
    <label for="naam">Postcode:</Label>
    <input type ="text" name= "postcode" id="postcode" placeholder="postcode"> 
    <br>
    <label for="naam">Woonplaats:</Label>
    <input type ="text" name= "woonplaats" id="woonplaats" placeholder="woonplaats">  
    <br>
    <label for="naam">Telefoon:</Label>
    <input type ="text" name= "telefoon" id="telefoon" placeholder="telefoon">  
    <br>
    <label for="naam">Email:</Label>
    <input type ="text" name= "email" >  
    <hr>
    <label for="datum">Datum:</label>
    <select name="datum" id= "datum">
        <option value="15-03-2022 09:00-14:30"> 15-03-2022 09:00-14:30 </option>
        <option value="15-03-2022 09:00-14:30"> 15-03-2022 09:00-14:30 </option>
        
</select>
<br><input type="submit" name="btnSubmit" value="submit">
</form>

</body>
<?php
$host = "localhost";
    $dbname ="aanmelden";
    $username ="root";
    $password = "";
 
     try
     {
         $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
         $stm = $pdo->prepare("INSERT INTO users (aanhef,geslacht,naam,adres,postcode,woonplaats,telefoon,email,datum) VALUES (:aanhef,:geslacht,:naam,:adres,:postcode,:woonplaats,:telefoon,:email,:datum)");
         $stm->bindparam(":aanhef", $_POST['aanhef']);
         $stm->bindparam(":geslacht", $_POST['geslacht']);
         $stm->bindparam(":naam", $_POST['naam']);
         $stm->bindparam(":adres", $_POST['adres']);
         $stm->bindparam(":postcode", $_POST['postcode']);
         $stm->bindparam(":woonplaats", $_POST['woonplaats']);
         $stm->bindparam(":telefoon", $_POST['telefoon']);
         $stm->bindparam(":email", $_POST['email']);
         $stm->bindparam(":datum", $_POST['datum']);
         $stm->execute();      
         echo "Uw acount is aangemaakt!";
    }
    catch (PDOExepetion $ex)
    {
        echo "er is geen verbinding";
    }
?>
</html>