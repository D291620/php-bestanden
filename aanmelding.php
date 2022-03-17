<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>
<body>

<h1> Login </h1>

<form method='post'>
<label for="Gebruikersnaam"> Gebruikersnaam:</label>
<input type ="text" name= "Gebruikersnaam" id="Gebruikersnaam" placeholder="Gebruikersnaam"><br>
<label for="Wachtwoord"> Wachtwoord:</label>
<input type ="Password" name= "Wachtwoord" id="Wachtwoord" placeholder="Wachtwoord"><br>
<hr>
<input type="submit" name="btnLogin" value="submit"/>
<br>
<?php

if(isset($_POST['btnVerstuur']))
{
    session_start();
    $_SESSION['Gebruikersnaam'] = $_POST['Gebruikersnaam']; 
    $_SESSION['Wachtwoord'] = $_POST['Wachtwoord'];
    echo $_SESSION['Gebruikersnaam'];
    echo "</br>";
    echo $_SESSION['Wachtwoord'];

}

if (isset($_POST['uitloggen']))

{
    session_unset();
    session_destroy();
}

?>
</body>
</html>