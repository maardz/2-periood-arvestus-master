<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 1 - GET päring</title>
  </head>

  <body>

  		<?php $page_link = "result.php";
		   $username = "Marge";
		   $age = 23; 
		?>
		   <a href="<?php echo $page_link.'?name='.$username."&age=".$age; ?>">Mine edasi</a>

  </body>
</html>
