<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 3 - POST päringu tagasiside</title>
  </head>

  <body>
    <!-- Kustuta see funktsioon (print_r() koos <pre> elemendiga) pärast seda, kui oled veendunud, et programm töötab. -->
     <pre><?php print_r($_POST); ?></pre>

    <?php 
		if (!empty($_POST["username"]) and isset($_POST["sex"])) {
	     	echo "Tere, {$_POST["username"]}! Tundub, et olete {$_POST["sex"]}.";

	  	} elseif (isset($_POST["username"]) and empty($_POST["sex"])) {
	  		echo "Palun minge tagasi ja valige sugu.";

	  	}elseif (empty($_POST["username"]) and isset($_POST["sex"])) {
	  		echo "Palun minge tagasi ja sisestage nimi.";

	  	}elseif (empty($_POST["username"]) and empty($_POST["sex"])){
	  		echo "Tundub, et sattusid siia otseteed pidi.";
	  	
	  	}elseif (empty($_POST["username"]) and isset($_POST["sex"])){
	  		echo "palun täitke kõik väljad";
	  	}
 

	  ?>

    <div><a href="index.php">Mine tagasi</a></div>
  </body>
</html>
