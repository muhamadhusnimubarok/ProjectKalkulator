<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      
 header {
		text-align:center;
		color : #222831;
    background-color:#EEEEEE;
    border-bottom-left-radius: 100px;
    border-bottom-right-radius: 100px;
}
/* .menu ul {
	list-style:none;
	overflow: hidden;
	justify-content: center;
	display:flex;

}
 
 
.menu ul li {
	float:left;		
	text-transform:uppercase;
	
}

.menu ul li a {
	display:block;	
	padding:20px 20px;
	text-decoration:none;
	color:#2c2c2c;
	font-family: sans-serif;
	font-size:13px;
	font-weight:400;
	transition:all 0.3s ease-in-out;

}
 
.menu ul li a:hover,
.menu ul li a.hoverover {	
	cursor: pointer;	
	color:#fff;
} */ 
 
body {
  background-color:#222831;
}
 .badan{
	background-color: white;
	border-radius: 5px;
	border: 1px solid #f0f0f0;
	margin-bottom: 10px;

}
 
.halaman{
	text-align: center;
	padding: 30px 20px;	
}
.menu{
	background-color: #50C4ED;
	border: 1px solid #f0f0f0;
	border-radius: 8px;	
	margin-bottom: 10px;
}

/* .container {
        position: relative;
        width: 190px;
        height: 254px;
		    /* display: flex;
   		  flex-wrap: wrap;
        justify-content: space-around; */
      /* }

      .card {
        position: relative;
        width: 190px;
        height: 254px;
        background: #f5f5f5;
        border-radius: 8px;
        color: #232323;
        padding: 16px;
        border: 1px solid #232323;
        transition: all 0.5s ease-in-out;
        overflow: hidden; */
		    /* margin-left: 20px; */

      /* } */
      /* .first-three {
      width: 31%;
      margin-right: 2%;
} */

      /* .card-hidden {
        display: flex;
        transform: translateY(200%);
        flex-direction: column;
        gap: 0.5rem;
        transition: transform 0.5s ease-in, opacity 0.3s ease-in;
        opacity: 0;
      }

      .card-border {
        position: absolute;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        border: 1px dashed #232323;
        border-radius: 8px;
        z-index: -1;
		display: none;
      }

      /*Hovers*/
      /* .card:hover {
        transform: translate(-15px, -15px);
        border-color: #5bc0eb;
      }

      .card:hover .card-hidden {
        transform: translateY(0);
        opacity: 1;
      }

      .card:hover .title {
        transform: translateY(200%);
      }   */

      /*Text*/
      .title {
        position: absolute;
        bottom: 1rem;
        font-weight: 700;
        font-size: 1.5rem;
        transition: transform 0.25s ease-out;
      }

      .title-in {
        font-weight: 700;
        font-size: 1.25rem;
      }

      /*Button*/
      .button {
        display: inline-flex;
        justify-content: center;
        padding: 8px;
        border-radius: 24px;
        font-weight: 600;
        background-color: #5bc0eb;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out;
      }

      .button:hover {
        background-color: #53aed4;
      }
    </style>
</head>
<body>
<div class="content">
			<header>
				<h1 class="judul">Muhamad Husni Mubarok</h1>
				<h3 class="deskripsi">PPLG X-2</h3>
			</header>
			<!-- <div class="menu">
				<ul>
					<li><a href="homepage.php?page=kalkulator">kalkulator</a></li>
					<li><a href="homepage.php?page=IMT">IMT</a></li>
                    <li><a href="homepage.php?page=kelipatan_lima">kelipatan lima</a></li>
                    <li><a href="homepage.php?page=kompeten">kompeten</a></li>
                    <li><a href="homepage.php?page=MencariLuas">Mencari Luas</a></li>
                    <li><a href="homepage.php?page=perbandingan">Perbandingan</a></li>
				</ul>
			</div> -->
<!-- <div class="container">
    <div class="card">
        <img src="images/kalkulator.jpg" alt="Gambar" width="100%" height="auto">
        <p class="title">Card title</p>
        <div class="card-hidden">
            <p class="title-in">Card title</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at est orci. Nam molestie pellentesque mi nec lacinia.</p>
            <a class="button">Button</a>
        </div>
    </div>
    <div class="card-border"></div>
</div> -->


<div style="display: flex; justify-content: space-between;padding-bottom: 50px; padding-top:50px; margin-right: 50px; margin-left:50px; ">
  <div class="card" style="width: 18rem; ">
    <img src="images/kelipatan5.png" class="card-img-top" alt="..." style="width:200px;">
    <div class="card-body"; style=" background-color : #76ABAE;">
      <h5 class="card-title">KELIPATAN 5</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="homepage.php?page=kelipatan_lima" class="btn btn-primary"style= "background-color : #31363F;">Go somewhere</a>
    </div>
  </div>

  <div class="card" style="width: 18rem;">
    <img src="images/kompeten.png" class="card-img-top" alt="..." style="width:287px;">
    <div class="card-body"style=" background-color : #76ABAE;">
      <h5 class="card-title">NILAI KOMPETEN</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="homepage.php?page=kompeten" class="btn btn-primary" style = "margin-top:80px; background-color : #31363F;">Go somewhere</a>
    </div>
  </div>

  <div class="card" style="width: 18rem;">
    <img src="images/bangundatar.png" class="card-img-top" alt="..." tyle="width:10px;">
    <div class="card-body" style=" background-color : #76ABAE;">
      <h5 class="card-title">MENGHITUNG LUAS SEGITIGA dan PERSEGI PANJANG</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="homepage.php?page=MencariLuas" class="btn btn-primary"style= "background-color : #31363F;">Go somewhere</a>
    </div>
  </div>
</div>




<div style="display: flex; justify-content: space-between;padding-top:20px; margin-bottom: 100px;margin-right: 50px; margin-left:50px; ">
  <div class="card" style="width: 18rem;">
    <img src="images/besardari.png" class="card-img-top" alt="...">
    <div class="card-body" style=" background-color : #76ABAE;">
      <h5 class="card-title">KALKULATOR PERBANDINGAN</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="homepage.php?page=perbandingan" class="btn btn-primary"style= "background-color : #31363F;">Go somewhere</a>
    </div>
  </div>

  <div class="card" style="width: 18rem;">
    <img src="images/kalkulator.png" class="card-img-top" alt="...">
    <div class="card-body" style=" background-color : #76ABAE;">
      <h5 class="card-title">KALKULATOR</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="homepage.php?page=kalkulator" class="btn btn-primary"style= "background-color : #31363F;">Go somewhere</a>
    </div>
  </div>

  <div class="card" style="width: 18rem;">
    <img src="images/IMT.png" class="card-img-top" alt="...">
    <div class="card-body" style=" background-color : #76ABAE;">
      <h5 class="card-title">IMT</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary" style= "background-color : #31363F;">Go somewhere</a>
    </div>
  </div>
</div>

    <!-- <div class="container">
      <div class="card">
        <p class="title">Card title</p>
        <div class="card-hidden">
          <p class="title-in">Card title</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at est orci. Nam molestie pellentesque mi nec lacinia.</p>
          <a class="button">Button</a>
        </div>
      </div>
      <div class="card-border"></div>
    </div>

    <div class="container">
      <div class="card">
        <p class="title">Card title</p>
        <div class="card-hidden">
          <p class="title-in">Card title</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at est orci. Nam molestie pellentesque mi nec lacinia.</p>
          <a class="button">Button</a>
        </div>
      </div>
      <div class="card-border"></div>
    </div>

    <div class="container">
      <div class="card">
        <p class="title">Card title</p>
        <div class="card-hidden">
          <p class="title-in">Card title</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at est orci. Nam molestie pellentesque mi nec lacinia.</p>
          <a class="button">Button</a>
        </div>
      </div>
      <div class="card-border"></div>
    </div>

    <div class="container">
      <div class="card">
        <p class="title">Card title</p>
        <div class="card-hidden">
          <p class="title-in">Card title</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at est orci. Nam molestie pellentesque mi nec lacinia.</p>
          <a class="button">Button</a>
        </div>
      </div>
      <div class="card-border"></div>
    </div>

    <div class="container">
      <div class="card">
        <p class="title">Card title</p>
        <div class="card-hidden">
          <p class="title-in">Card title</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at est orci. Nam molestie pellentesque mi nec lacinia.</p>
          <a class="button">Button</a>
        </div>
      </div>
      <div class="card-border"></div>
    </div> -->

			<div class="badan">
			<?php 
			if(isset($_GET['page'])){
				$page = $_GET['page'];
		
                switch ($page) {
                    case 'kalkulator':
                        include "isi/kalkulator.php";
                        break;
                    case 'IMT':
                        include "isi/IMT.php";
                        break;
                    case 'kelipatan_lima':
                        include "isi/kelipatan_lima.php";
                        break;
                    case 'kompeten':
                        include "isi/kompeten.php";
                        break;	
                    case 'MencariLuas':
                        include "isi/MencariLuas.php";
                        break;
                    case 'perbandingan':
                        include "isi/perbandingan.php";
                        break;
                    default:
                        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                        break;
                }
            }else{
                include "apapun.php";
            }
        
            ?>
            </div>
        </div>

</body>
</html>
