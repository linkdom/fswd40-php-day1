<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercise 6</title>
  </head>
  <body>
	<?php 
		$gameChars = array(
			"Link" => "Zelda", 
			"Goku" => "Dragonball",
			"Warwick" => "League of Legends"
		);

		$cartoonChars = array(
			"Mickey" => "Mouse",
			"Donald" => "Duck",
			"Daisy" => "Duck",
			"Minney" => "Mouse",
			"Goofey" => "AHOUH"
		);

		$anime = array(
			"Monkey D." => "Luffy",
			"Naruto" => "Usumaki",
			"Sasuke" => "Ushiha",
			"Boruto" => "Usumaki",
			"Sarada" => "Ushiha",
			"Kirito" => "Saito"
		);

		echo "<h2>Game Characters</h2>";
		foreach ($gameChars as $key => $value) {
			echo "Firstname: " . $key . "</br>Game: " . $value . "</br></br>";
		}
		echo "</br>";
		echo "<h2>Cartoon Characters</h2>";
		foreach ($cartoonChars as $key => $value) {
			echo "Firstname: " . $key . "</br>Lastname: " . $value . "</br></br>";
		}
		echo "</br>";
		echo "<h2>Anime Characters</h2>";
		foreach ($anime as $key => $value) {
			echo "Firstname: " . $key . "</br>Lastname: " . $value . "</br></br>";
		}

	?>
  </body>
</html>
