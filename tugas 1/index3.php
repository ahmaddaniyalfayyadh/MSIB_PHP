<?php
$nama = "Ahmad Daniyal Fayyadh";
$alamat = "Probolinggo, Jawa Timur";
$lokasi = "Jln. Francisco, CA 94107";
$phone = "085232879429";
$ig = "danielfayyadh_";
$email = "daniyalfayyadh11@gmail.com";
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
        <div class="row">
            <div class="col-md-12">
                <h1 style="margin-bottom: 1rem;">Contact Saya</h1>

                <table class="table">
                    <tbody>
                        <tr>
                            <th>Nama</th>
                            <td><?php echo $nama ?></td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td><?php echo $alamat ?></td>
                        </tr>
                        <tr>
                            <th>Lokasi</th>
                            <td> <?php echo $lokasi ?></td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td><?php echo $phone ?></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><?php echo $email ?></td>
                        </tr>
                        <tr>
                            <th>Instagram</th>
                            <td><a href="https://www.instagram.com/danielfayyadh_/" target="_blank"><?php echo $ig ?></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>