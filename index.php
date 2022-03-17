<!doctype html>
<html>
    <head> 
<link rel = "stylesheet" href = "mijnstyle.css"/>        
<div id="Titel">
<tabel>
<tr>
    <td><h1> Welkom bij blijdrop </h1></td>
</tr>
</tabel>
</head>

<body>
<div id="login">
<form class = "form" method="POST">
    <table>
    <Tr>
        <td>Gebruikersnaam:</td>
        <td><input type="text" name="txtGebruiker" id="Username" placeholder="Username"/></td>
    </tr>
    <tr>
        <td>Wachtwoord:</td>
        <td><input type="password" name="txtPassword" id="Password" placeholder="Password"/></td>
    </tr>  
    <tr> 
        <td><input type="submit" name="btnLogin" value="login"/></td>
        <td><input type="submit" name="btnToevoeg" value="toevoegen"/></td>    
    </tr>
</table>
</form>
<?php

if(isset($_POST['btnLogin']))
{
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
            if($_POST['txtGebruiker'] ==$row[0] && $_POST['txtPassword'] ==$row[1])
                Header("Location: Homedierentuin.php");
         }      
         
         echo "Uw Gebruikernaam of Wachtwoord is onjuist!";
    }
    catch (PDOExepetion $ex)
    {
        echo "er is geen verbinding";
    }
}
if(isset($_POST['btnToevoeg']))
{

    $host = "localhost";
    $dbname ="dierentuinblijdorp";
    $username ="root";
    $password = "";
 
     try
     {
         $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
         $stm = $pdo->prepare("INSERT INTO users (Gebruiker, Wachtwoord) VALUES (:user,:passwd)");
         $stm->bindparam(":user", $_POST['txtGebruiker']);
         $stm->bindparam(":passwd", $_POST['txtPassword']);
         $stm->execute();      
         echo "Uw acount is aangemaakt!";
    }
    catch (PDOExepetion $ex)
    {
        echo "er is geen verbinding";
    }
}
?>
</div>

</body>
</html>