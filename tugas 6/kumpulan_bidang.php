<?php
require_once 'lingkaran.php';
require_once 'persegipanjang.php';
require_once 'segitiga.php';

$l1 = new lingkaran(5);
$l2 = new Persegipanjang(4, 2);
$l3 = new Segitiga(2, 6);

$bidangarray = [
    $l1,
    $l2,
    $l3
];

// echo "<br> Nama Bidang :" . $l1->namabidang();
// echo "<br>Hasil Keliling: " . $l1->kelilingbidang() . "<br>";
// echo "Jari-jari: " . $l1->jari2 . "<br>";
// echo "Luas Bidang: " . $l1->luasbidang() . "<br><hr>";

// echo "<br> Nama Bidang :" . $l2->namabidang();
// echo "<br>Hasil Keliling: " . $l2->kelilingbidang() . "<br>";
// echo "Luas Bidang: " . $l2->luasbidang() . "<br><hr>";

// echo "<br> Nama Bidang :" . $l3->namabidang();
// echo "<br>Hasil Keliling: " . $l3->kelilingbidang() . "<br>";
// echo "Luas Bidang: " . $l3->luasbidang() . "<br><hr>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1" cellpadding="15" width=100%>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Bidang</th>
                <th>Keterangan</th>
                <th>Luas Bidang</th>
                <th>Keliling Bidang</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($bidangarray as $index => $bidang) {
                echo '<tr>';
                echo '<td>' . ($index + 1) . '</td>';
                echo '<td>' . $bidang->namaBidang() . '</td>';
                echo '<td>' . $bidang->keterangan() . '</td>';
                echo '<td>' . $bidang->luasBidang() . '</td>';
                echo '<td>' . $bidang->kelilingBidang() . '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</body>

</html>