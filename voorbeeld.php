<DOCTYPE html>
<html>		
	<head>
	<title> Welkom bij mijn CV pagina! </title>
	<style>
		body {
			background-image: Linear-gradient(purple,red,orange,blue);
		}
		h1 {
			color: White;
			font-size: 40px;
			text-align: center;
		}
		h2 {
			color: black;
		}
		.pg-inputs {
			color: lightgreen;
			margin-left: 50px;
			font-weight: bold;
			font-size: 18px;
		}
		.cg-inputs {
			text-align: right;
		}
	  </style>	
</head>
	<body>
	<h1> Welkom bij mijn CV pagina! </ste h1>
	<h2> Persoonlijke gegevens <h2>
		<H4> School: Curio <h4>
		<H4> Klas: TTR4-SSD1B <H4>
	
	<form method='post'>	
		Naam:<input type='text' name='voornaam'/><br/>
		Achternaam:<input type='text' name='Achternaam'/><br/>
		Geboortedatum:<input type='text' name='Geboortedatum'/><br/>
		Adress:<input type='text' name='Adress'/><br/>
		Woonplaats<input type='text' name='Woonplaats'/><br/> 
		Geslacht: <input type="radio" name="Geslacht" value="man" />Man <input type="radio" name="Geslacht" value="vrouw" />Vrouw<br />
		<input type='checkbox' name='Akkoord'/> Ik ga akkoord met de algemeene voorwaarden<br/>	
			<p>
			</p>
		</div>
		<input type="submit" name="btnVerstuur" value="Versturen" />
	</form>
	<?php
	 if (isset($_POST['btnVerstuur'])) {
        echo "<b>Naam: </b>";
        echo $_POST['voornaam'];
        echo " ";
        echo $_POST['Achternaam'];
        echo "<br/>";
        echo "<b>Geboortedatum: </b>";
        if (empty($_POST['Geboortedatum'])) {
            echo "Er is geen geboortedatum ingevoerd!";
        } else {
            echo $_POST['Geboortedatum'];
        }
        echo "<br/>";
        echo "<b>Geslacht: </b>";
		echo $_POST['Geslacht'];
        if (empty($_POST['Geslacht'])) {
        echo "Er is geen geslacht gekozen!";
		echo "<br/>";
		echo "<b>Adress: <b/>";
		echo $_POST['Adress'];
		if (empty($_POST['Adress'])) {
		echo "<br/>";
		echo "<b>Woonplaats: <b/>";
		echo $_POST['Woonplaats'];
		if (empty($_POST['Woonplaats'])) {
			} 
		}
		}
	}
    ?>


    <hr />
	</form>
	<?php
		$host = "localhost";
		$dbname ="voorbeeldphp";
		$user ="root";
		$password = "";
		
		try{
			$pydo = new PDO ("mysql:host=".$host.";dbname".$dbname.";",$user, $password);
			echo "gelukt";
		}catch (PDOExpception $ex){
				echo "verbinding mislukt";
			}
			?>
		</body>
</html>

