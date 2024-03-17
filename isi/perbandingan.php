<!DOCTYPE html>
<html>
<head>
	<title>Perbandingan</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
			background-color: #f0f0f0;
		}

		h1 {
			text-align: center;
			padding: 20px;
			background-color: #333;
			color: #fff;
		}

		form {
			width: 300px;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			border: 1px solid #ccc;
			box-shadow: 0 0 10px rgba(0,0,0,0.1);
		}

		label {
			display: block;
			margin-bottom: 10px;
		}

		input[type="number"] {
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
			box-sizing: border-box;
		}

		input[type="submit"] {
			background-color: #333;
			color: #fff;
			padding: 10px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}

		input[type="submit"]:hover {
			background-color: #444;
		}

		.result {
			margin-top: 20px;
			display: none;
		}

		.result.show {
			display: block;
		}
	</style>
</head>
<body>
	<h1>Perbandingan</h1>
	<form action="" method="post">
		<label for="angka1">Angka Pertama:</label>
		<input type="number" id="angka1" name="angka1" min="0" required><br><br>
		<label for="angka2">Angka Kedua:</label>
		<input type="number" id="angka2" name="angka2" min="0" required><br><br>
		<input type="submit" value="Bandingkan Angka">
	</form>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$angka1 = $_POST["angka1"];
		$angka2 = $_POST["angka2"];

		echo "<div class='result' id='result'>";
		echo "<h2>Hasil Perbandingan</h2>";

		if ($angka1 == $angka2) {
			echo "<p>$angka1 sama dengan $angka2</p>";
			echo "<p>Operator: =</p>";
		} else if ($angka1 > $angka2) {
			echo "<p>$angka1 lebih besar dari $angka2</p>";
			echo "<p>Operator: ></p>";
		} else if ($angka1 < $angka2) {
		echo "<p>$angka1 lebih kecil dari $angka2</p>";
			echo "<p>Operator: <</p>";
		}

		echo "</div>";

		echo "<script>document.getElementById('result').classList.add('show');</script>";
	}
	?>
</body>
</html>