<!DOCTYPE html>
<html>
<head>
    <title>Mencari Luas Segitiga dan Persegi Panjang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .navbar {
            background-color: #333;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            display: block;
            color: #fff;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .navbar a.active {
            background-color: #444;
            color: #fff;
        }

        .container {
            margin: 20px auto;
            width: 80%;
            max-width: 800px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="number"] {
            width: calc(100% - 40px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
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

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>

<div class="navbar">
    <a href="#" class="active">Mencari Luas</a>
</div>

<div class="container">
    <form action="" method="post">
        <h2>Hitung Luas Persegi Panjang</h2>
        <label for="panjang">Panjang:</label>
        <input type="number" id="panjang" name="panjang" min="0" required><br><br>
        <label for="lebar">Lebar:</label>
        <input type="number" id="lebar" name="lebar" min="0" required><br><br>
        <input type="radio" id="persegi_panjang" name="calculation" value="persegi_panjang" checked>
        <label for="persegi_panjang">Persegi Panjang</label><br>
        <input type="submit" value="Hitung Luas">
    </form>

    <form action="" method="post">
        <h2>Hitung Luas Segitiga</h2>
        <label for="alas">Alas:</label>
        <input type="number" id="alas" name="alas" min="0" required><br><br>
        <label for="tinggi">Tinggi:</label>
        <input type="number" id="tinggi" name="tinggi" min="0" required><br><br>
        <input type="radio" id="segitiga" name="calculation" value="segitiga">
        <label for="segitiga">Segitiga</label><br>
        <input type="submit" value="Hitung Luas">
    </form>

    <div class="result">
        <h2>Hasil Perhitungan</h2>
        <table>
            <thead>
            <tr>
                <th>No.</th>
                <th>Jenis</th>
                <th>Nilai 1</th>
                <th>Nilai 2</th>
                <th>Luas</th>
            </tr>
            </thead>
            <tbody>
            <?php
            session_start();

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST["calculation"])) {
                    if ($_POST["calculation"] == "persegi_panjang") {
                        $panjang = $_POST["panjang"];
                        $lebar = $_POST["lebar"];
                        if ($panjang > 0 && $lebar > 0) {
                            $luas_persegi_panjang = $panjang * $lebar;

                            $_SESSION["results"][] = array(
                                "type" => "persegi_panjang",
                                "panjang" => $panjang,
                                "lebar" => $lebar,
                                "luas" => $luas_persegi_panjang
                            );
                        } else {
                            echo "<p style='color: red;'>Panjang dan Lebar harus angka positif.</p>";
                        }
                    } elseif ($_POST["calculation"] == "segitiga") {
                        $alas = $_POST["alas"];
                        $tinggi = $_POST["tinggi"];
                        if ($alas > 0 && $tinggi > 0) {
                            $luas_segitiga = $alas * $tinggi / 2;

                            $_SESSION["results"][] = array(
                                "type" => "segitiga",
                                "alas" => $alas,
                                "tinggi" => $tinggi,
                                "luas" => $luas_segitiga
                            );
                        } else {
                            echo "<p style='color: red;'>Alas dan Tinggi harus angka positif.</p>";
                        }
                    }
                }
            }

            $results = isset($_SESSION["results"]) ? $_SESSION["results"] : array();

            $i = 1;
            foreach ($results as $result) {
                echo "<tr>";
                echo "<td>$i</td>";
                echo "<td>" . ucfirst($result["type"]) . "</td>";

                if ($result["type"] == "persegi_panjang") {
                    echo "<td>" . $result["panjang"] . "</td>";
                    echo "<td>" . $result["lebar"] . "</td>";
                    echo "<td>" . $result["luas"] . "</td>";
                } else {
                    echo "<td>" . $result["alas"] . "</td>";
                    echo "<td>" . $result["tinggi"] . "</td>";
                    echo "<td>" . $result["luas"] . "</td>";
                }

                echo "</tr>";
                $i++;
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
