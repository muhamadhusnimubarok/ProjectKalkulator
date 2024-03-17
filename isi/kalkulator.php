<!DOCTYPE html>
<html>
<head>
<!-- Link CSS Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<!-- Link style.css -->

	<title>Kalkulator PHP</title>
    <style>

body{
	background:#A87C7C;
	font-family: sans-serif;
}
 
.badan {
	background-color: #3E3232;
}
.kalkulator{
	width: 335px;
	background: #864AF9;
	margin: 100px auto;
	padding: 10px 10px 10px 10px;
	border-radius: 5px;
	box-shadow: 0px 10px 20px 0px #D1D1D1;
}
 
.bil{
	width: 300px;
	margin: 5px;
	border: none;
	font-size: 16pt;
	border-radius: 5px;
	padding: 10px;	
}
 
.opt{
	font-size: 16pt;
	border: none;
	width: 100px;
	margin: 5px;
	border-radius: 5px;
	padding: 10px;
}
 
.tombol{
	background: #F8E559;
	border-top: none;
	border-right: none;
	border-left: none;
	border-radius: 5px;
	padding: 10px 61px;
	color: #eee;
	font-size: 15pt;
	border-bottom:4px solid #FF9843;
}

.text-muted {
    color: #004085!important;
}

 
.brand{
	color: #eee;
	font-size: 11pt;
	float: right;
	text-decoration: none;
	margin: 12px;
}
 
.judul{
	text-align: center;
	color: #004085;
	font-weight: normal;
}
@media screen and (min-width: 768px) and (max-width: 991px) {
    .kalkulator {
        width: 50%; 
        margin: 50px auto; 
    }
}


@media screen and (max-width: 767px) {
    .kalkulator {
        width: 80%; 
        margin: 50px auto; 
    }

    .bil, .opt, .tombol {
        width: 100%; 
    }
}
</style>
</head>


<body>
<!-- Script Kalkulator PHP -->
	<?php
    $errorMessage = ""; // Inisialisasi pesan kesalahan
	if(isset($_POST['hitung'])){
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $operasi = $_POST['operasi'];
        if(empty($bil1) || empty($bil2) || !is_numeric($bil1) || !is_numeric($bil2)) {
            $errorMessage = "Masukkan angka yang valid di kedua bidang input"; // Pesan kesalahan jika salah satu atau kedua input kosong atau bukan angka
        } else {
            switch ($operasi) {
                case '+':
                    $hasil = $bil1 + $bil2;
                    break;
                case '-':
                    $hasil = $bil1 - $bil2;
                    break;
                case '*':
                    $hasil = $bil1 * $bil2;
                    break;
                case '/':
                    if($bil2 == 0){
                        $errorMessage = "Tidak dapat melakukan pembagian dengan angka nol"; // Pesan kesalahan jika pembagian dengan nol dilakukan
                    } else {
                        $hasil = $bil1 / $bil2;
                    }
                    break;
            }
        }
    }
	?>

	<div class="kalkulator">
		<h2 class="judul">EasyCalc</h2>
		<form method="post" action="">			
			<small class="form-text text-muted">Input Number</small>
			<input type="text" name="bil1" class="bil" autocomplete="off">
			<small class="form-text text-muted">Input Number</small>
			<input type="text" name="bil2" class="bil" autocomplete="off">
			<select class="opt" name="operasi">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">*</option>
				<option value="/">/</option>
			</select>
			<input type="submit" name="hitung" value="Hitung" class="tombol">											
		</form>


        <?php if($errorMessage != ""): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $errorMessage; ?>
            </div>
        <?php endif; ?>
		<?php if(isset($_POST['hitung']) && $errorMessage == ""){ ?>
			<input type="text" value="<?php echo isset($hasil) ? $_POST['bil1'] . ' ' . $_POST['operasi'] . ' ' . $_POST['bil2'] . ' = ' . $hasil : ''; ?>" placeholder="<?php echo $errorMessage; ?>" class="bil">
		<?php }else{ ?>
			<input type="text" value="0" class="bil">
		<?php } ?>			 
	</div>

</body>
</html>
