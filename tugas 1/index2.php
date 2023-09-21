<?php
$keterangan = "Portofolio Saya";
$deskripsi = "Selamat datang di halaman portofolio pribadi saya. Di sini Anda dapat melihat beberapa materi
yang telah saya pelajari.";
$judul1 = " HTML dan CSS";
$deskrip1 = " Saya mempelajari HTML dan CSS murni dengan mengikuti program Kampus Merdeka bersama PT.
Hendevane";
$judul2 = " Github";
$deskrip2 = " Saya mempelajari Github untuk dapat menyimpan source code kita dan agar lebih mudah
berkolaborasi
bersama tim";
$judul3 = "  Javascript";
$deskrip3 = " Saya mempelajari Javascript untuk dapat mengenal dan menggunakan untuk keperluan pembuatan
website nantinya.";
$judul4 = "  Hypertext Preprocessor (PHP)";
$deskrip4 = " Saya mempelajari bahasa pemrograman PHP karena PHP memiliki banyak komunitasnya di Indonesia dan
saya juga ingin mempelajari Laravel sehingga saya bertekat untuk mempelajari bahasa pemrograman
PHP";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
    </div>
    <div class="container" style="margin-top: 2rem;">
        <div class=" row">
            <div class="col-md-12">
                <header>
                    <h1><?php echo $keterangan ?></h1>
                    <h6><?php echo $deskripsi ?></h6>
                </header>
                <dl>
                    <dt>
                        <?php echo $judul1 ?>
                    </dt>
                    <dd>
                        <?php echo $deskrip1 ?>
                    </dd>
                    <dt>
                        <?php echo $judul2 ?>
                    </dt>
                    <dd>
                        <?php echo $deskrip2 ?>
                    </dd>
                    <dt>
                        <?php echo $judul3 ?>
                    </dt>
                    <dd>
                        <?php echo $deskrip3 ?>
                    </dd>
                    <dt>
                        <?php echo $judul4 ?>
                    </dt>
                    <dd>
                        <?php echo $deskrip4 ?>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
</body>

</html>