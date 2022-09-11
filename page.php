<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Practical 20220818</title>
</head>
<body>
	<?php 
		echo("PHP is a server scripting language and a powerful tool for making
		dynamic and interactive Web pages.<br><br>
		PHP is a widely-used, free, and efficient alternative to competitors such
		as Microsoft's ASP.<br><br>");

		echo("System generated random number : ".rand(1,10));

	?><br><br><br>	

 	<form method='get'>
	   <h2>Please input your name:</h2>
		 <input type="text" name="name">
		 <input type="submit" value="Submit Name">
	 </form>

	<?php
		$name = '';
		if(!empty($_GET["name"])){
			$name = $_GET["name"];
		}

		echo "<p> Hello My Name is $name <p>";
	?>

	<br>
	<form method="POST">
		Input A Number &nbsp <input type="number" name="num" id="num"> <input type="submit" name="btn">
	</form>

	<?php
		//$number = '';
		if(!empty($_POST["num"])){
			$number = (int)$_POST["num"];
		
			if($number!=0){
				if($number%2==0){
					echo "<p>$number is even number";
				}else{
					echo "<p>$number is odd number";
				}
			}
		}	

	?>


</body>
</html>