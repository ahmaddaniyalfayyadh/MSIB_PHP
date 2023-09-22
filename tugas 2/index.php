<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="" method="POST">
        <label for="nama">Masukkan nama anda</label>
        <input type="text" name="nama" id="nama" required>

        <label for="pekerjaan">Pilih pekerjaan anda</label>
        <select name="pekerjaan" id="pekerjaan" required>
            <option value="">--- Pilih pekerjaan ---</option>
            <option value="Guru">Guru</option>
            <option value="Kades">Kades</option>
            <option value="Lurah">Lurah</option>
            <option value="Camat">Camat</option>
            <option value="Bupati">Bupati</option>
            <option value="Gubernur">Gubernur</option>
            <option value="Presiden">Presiden</option>
            <option value="Programmer">Programmer</option>
            <option value="Dosen">Dosen</option>
            <option value="Pengusaha">Pengusaha</option>
        </select>

        <label>Pilih Hobby anda</label>
        <label><input name="hobby" type="radio" value="Sepak Bola">Sepak Bola</label>
        <label><input name="hobby" type="radio" value="Bola Basket">Bola Basket</label>
        <label><input name="hobby" type="radio" value="Voli">Voli</label>
        <label><input name="hobby" type="radio" value="Badminton">Badminton</label>
        <label><input name="hobby" type="radio" value="Tenis Meja">Tenis Meja</label>
        <label><input name="hobby" type="radio" value="Futsal">Futsal</label>
        <label><input name="hobby" type="radio" value="Renang">Renang</label>
        <label><input name="hobby" type="radio" value="Catur">Catur</label>
        <label><input name="hobby" type="radio" value="Balap">Balap</label>
        <label><input name="hobby" type="radio" value="Jalan-jalan">Jalan-jalan</label>

        <button type="submit" id="tombol" name="simpan">Simpan</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $pekerjaan = $_POST['pekerjaan'];
        $hobby = $_POST['hobby'];
    }
    ?>

    <?php if (isset($nama) && isset($pekerjaan) && isset($hobby)) : ?>
        <h2>Data yang Anda masukkan:</h2>
        <table>
            <tr>
                <th>Nama</th>
                <th>Pekerjaan</th>
                <th>Hobby</th>
            </tr>
            <tr>
                <td><?php echo $nama; ?></td>
                <td><?php echo $pekerjaan; ?></td>
                <td><?php echo $hobby; ?></td>
            </tr>
        </table>
    <?php endif; ?>
</body>

</html>