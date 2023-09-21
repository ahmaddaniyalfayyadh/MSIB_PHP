<?php
$nama = "Ahmad Daniyal Fayyadh";
$deskripsi = "Hallo! Nama saya Ahmad Daniyal Fayyadh, dan saya senang bisa berbagi sedikit tentang diri saya.
Saya
adalah seorang
Mahasiswa Universitas Negeri Surabaya dengan hasrat besar terhadap bidang Web Developer";
$deskripsi2 = "Saya lahir di Probolinggo dan saat ini saya tinggal bersama kedua orang tua saya.
Saya merasa
beruntung memiliki keluarga yang selalu
mendukung dan
menginspirasi saya dalam segala hal yang saya lakukan.";
$poto = "img/daniel.jpeg"
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Bootstrap 4, from LayoutIt!</title>

	<meta name="description" content="Source code generated using layoutit.com">
	<meta name="author" content="LayoutIt!">

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

</head>

<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12" style="background-color: rgb(255, 178, 12);">
				<ul class="nav nav-pills">
					<li class="nav-item">
						<a class="nav-link" style="color: black;" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" style="color: black;" href="index2.php">Portofolio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" style="color: black;" href="index3.php">Contact</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="container" style="margin-top: 2rem;">
			<div class="row">
				<div class="col-md-4">
					<div class="poto text-center">
						<img src="<?php echo $poto ?>" alt="">
					</div>
				</div>
				<div class="col-md-8">
					<h2><?php echo $nama ?></h2>
					<p>
						<?php echo $deskripsi ?>
					</p>

					<p>
						<?php echo $deskripsi2 ?>
					</p>
					<a href="#" class="btn btn-primary">Edit Profile</a>
				</div>
			</div>
		</div>

	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/scripts.js"></script>
</body>

</html>