<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Index Massa Tubuh (IMT)</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f0f0f0;
    }

    .container {
        width: 80%;
        max-width: 600px;
        margin: 50px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    h1 {
        text-align: center;
        margin-bottom: 30px;
    }

    form {
        margin-bottom: 20px;
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
        width: 100%;
    }

    .result {
        text-align: center;
        font-weight: bold;
        margin-top: 20px;
    }

    .normal { color: green; }
    .kurus { color: orange; }
    .gemuk { color: red; }
</style>
</head>
<body>

<div class="container">
    <h1>Index Massa Tubuh (IMT)</h1>
    <form action="" method="post">
        <label for="berat">Berat Badan (kg):</label>
        <input type="number" id="berat" name="berat" min="0" step="any" required>
        <label for="tinggi">Tinggi Badan (m):</label>
        <input type="number" id="tinggi" name="tinggi" min="0" step="any" required>
        <input type="submit" value="Hitung IMT">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $berat = $_POST["berat"];
        $tinggi = $_POST["tinggi"];
        
        $imt = $berat / ($tinggi * $tinggi);

        $keterangan = "";
        if ($imt < 18.5) {
            $keterangan = "Kurus";
            $class = "kurus";
        } elseif ($imt >= 18.5 && $imt < 24.9) {
            $keterangan = "Normal";
            $class = "normal";
        } else {
            $keterangan = "Gemuk";
            $class = "gemuk";
        }

        echo "<div class='result $class'>IMT: $imt - $keterangan</div>";
    }
    ?>
</div>

</body>
</html>
