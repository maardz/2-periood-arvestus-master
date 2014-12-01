
<?php 
  session_start(); 
	$validUsername = $_SESSION["username"];
    $validPassword = $_SESSION["password"];
  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 5 - Sessiooni tagasiside</title>
  </head>

  <body>
    

    <?php
    	if ($_POST["username"] == $validUsername and $_POST["password"] == $validPassword) {
    	echo "Kasutajanimi ja parool on õiged." ;


	    }else{
	    	echo "Kasutajanimi ja/või parool ei klapi.";
	    }
    ?>

    <a href="index.php">Mine tagasi</a>
  </body>
</html>
