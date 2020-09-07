<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>PHP - Creating my future</title>
</head>
<body>
	<CENTER><h1>PHP</h1></CENTER>
	<br/>
	<br/>

	<?php
       
        $nome = "Caio da Silveira Rodrigues";
        $linkface = "https://www.facebook.com/caio.silveirarodrigues/" ;
        $linkinsta = "https://www.instagram.com/cdsr99/" ;
        $a = $_GET["a"];
        $b = $_GET["b"];
        $sum = $a + $b;
		echo "Hello everybody!!! 
		<br/>
		<br/>
		This page has been created by $nome our best developer, if you would like follow him on his media social
		<br/>
		<br/>
		and btw the sum of the number is $sum
		";
		?>
		<CENTER>
		<a href="https://www.facebook.com/caio.silveirarodrigues/">Facebook</a><br>
		<a href= "https://www.instagram.com/cdsr99/"> Instagram
		</center>
		


</body>
</html>