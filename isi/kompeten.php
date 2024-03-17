<!DOCTYPE html>
<html>
<head>
	<title>Cek Keterangan Nilai</title>
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

		input[type="text"], input[type="number"] {
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
display: none;
			margin-top: 20px;
		}

		.result.show {
			display: block;
		}
	</style>
</head>
<body>
	<h1>Cek Keterangan Nilai</h1>
	<form action="" method="post">
		<label for="nama">Nama:</label>
		<input type="text" id="nama" name="nama" required><br><br>
		<label for="nilai">Nilai:</label>
		<input type="number" id="nilai" name="nilai" min="0" max="100" required><br><br>
		<input type="submit" value="Cek Nilai">
	</form>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$nama = $_POST["nama"];
		$nilai = $_POST["nilai"];

		echo "<div class='result' id='result'>";
		echo "<h2>Hasil Cek Nilai</h2>";
		echo "<p>Nama: $nama</p>";
		echo "<p>Nilai: $nilai</p>";

		if ($nilai >= 71 && $nilai <= 100) {
			$grade = "A";
			$keterangan = "Kompeten";
			$emoticons = "🙂";
		} else if ($nilai >= 0 && $nilai <= 70) {
			$grade = "D";
			$keterangan = "Belum Kompeten";
			$emoticons = "😣";
		} else {
			$grade = "";
			$keterangan = "Nilai tidak valid";
			$emoticons = "";
		}

		echo "<p>Grade: $grade</p>";
		echo "<p>Keterangan: $keterangan</p>";
		echo "<p>Emoticons: $emoticons</p>";
		echo "</div>";

		echo "<script>document.getElementById('result').classList.add('show');</script>";
	}
	?>
</body>
</html>