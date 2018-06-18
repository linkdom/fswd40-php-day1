<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercise 4</title>
  </head>
  <body>
	<!-- FOR LOOP -->
	<?php
	$myname = "Dominic";
		for($i = 0; $i < 50; $i++){
			echo $myname . " FOR </br>";
		}
	?>
	<!-- WHILE LOOP -->
	<?php 
	$i = 0;
		while($i < 50){
			echo $myname . " WHILE </br>";
			$i++;
		}
	?>
	<!-- DO WHILE -->
	<?php
	$j = 0;
		do{
			echo $myname . " DO-WHILE </br>";
			$j++;
		} while ($j < 50);
	?>
  </body>
</html>
