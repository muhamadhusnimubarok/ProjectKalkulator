<!DOCTYPE html>
<html>
<head>
	<title>Kelipatan Lima</title>
	<style>
		body {
	font-family: Arial, sans-serif;
	max-width: 500px;
	margin: 0 auto;
	padding: 20px;
}

h1 {
	text-align: center;
	margin-bottom: 30px;
}

form {
	display: flex;
	flex-direction: column;
}

label {
	margin-bottom: 10px;
}

input[type="number"] {
	padding: 5px;
	margin-bottom: 10px;
}

button[type="submit"] {
	padding: 5px 20px;
	background-color: #4CAF50;
	color: white;
	border: none;
	cursor: pointer;
}
	</style>
</head>
<body>
	<h1>Kelipatan Lima</h1>
	<form action="" method="post">
		<label for="angka">Masukkan Angka:</label>
		<input type="number" id="angka" name="angka" required>
		<button type="submit">Hitung</button>
	</form>

	<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$angka = $_POST["angka"];
	$batas = 100;
	$kelipatan = 5;

	if ($angka % $kelipatan == 0) {
		$batas = $angka;
	}

	echo "<h2>Kelipatan Lima</h2>";
	echo "<ul>";
	$kelipatan_ke = 1;
	for ($i = $kelipatan; $i <= $batas; $i += $kelipatan) {
		echo "<li>Kelipatan ke - " . $kelipatan_ke . " adalah " . $i . "</li>";
		$kelipatan_ke++;
	}
	echo "</ul>";
}
?>
</body>
</html>