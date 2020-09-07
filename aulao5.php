<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Aula 05</title>

</head>
<body>


<center>
<h1>Protudo</h1>
	<?php

	$a = $_GET["x"];
	$a2= $_GET["x"];
	$b = $_GET["y"];
	$sum = $a + $b;
	$dif = $a2  ;

	

	echo "<h2> O valor do produto é R$ $a <br/><br/></h2>";// valor produto

	$a = $a + ($a * 10 /100); 	//calculo aumentando %
	if ($a > $a2) {
		$dir = $a - $a2;
	}else
	{

		$dir = $a2 - $a;
	}
	
	echo "<h2>O novo valor com o aumento é $a  <p> a diferença foi de $dir <br/><br/></h2> ";//mostrando resultado

	$a = $a - ($a * 10 /100); 	//calculando desconto %
	echo "<h2>O novo valor com o desconto é $a <br/><br/></h2>";/*

	$a = $a + ($a * 10 /100); 	
	echo "<h2>O novo valor com o aumento é $a <br/><br/></h2>";*/




	  ?>
</center>
</body>
</html>