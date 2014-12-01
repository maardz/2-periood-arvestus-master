 
    <?php
    	session_start()
    ?>


    <?php	
    	$_SESSION["username"] = "Marge";
    	$_SESSION["password"] = "pass";
    ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 5 - Sessioon</title>
  </head>

  <body>
    <form action="result.php" method="post">
      <div class="form-field">
        <input type="text" name="username" placeholder="Kasutajanimi">
      </div>
      <div class="form-field">
        <input type="text" name="password" placeholder="parool">
      </div>
       <div class="form-field">
        <input type="submit" value="submit">
      </div>
      <form>
    
   
  </body>
</html>
