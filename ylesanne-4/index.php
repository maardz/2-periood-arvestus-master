<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 4 - Küpsised</title>
  </head>

  <body>
    

    <?php
    	$name = "arvestus";
    	$value = "Küpsis on olemas! Nom-nom";
    	$expire = time() + 10;
    	setcookie($name, $value, $expire);


	    	if (isset($_COOKIE["arvestus"])) {
	    		
	    		echo '<img src="http://www.adweek.com/files/imagecache/node-detail/news_article/tt-cookie-monster-hed-2013_0.jpg">';

	    		echo $value;
	    	}

	    	else{
	    		echo "Küpsist ei ole!";
	    	}
    ?>
    
  </body>
</html>
