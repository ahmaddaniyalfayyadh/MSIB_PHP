<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $m1 = ['nim' => '20051', 'nama' => 'daniyal', 'nilai' => 95];
    $m2 = ['nim' => '20052', 'nama' => 'iqbal', 'nilai' => 40];
    $m3 = ['nim' => '20053', 'nama' => 'tony', 'nilai' => 56];
    $m4 = ['nim' => '20054', 'nama' => 'afil', 'nilai' => 80];
    $m5 = ['nim' => '20055', 'nama' => 'ari', 'nilai' => 70];
    $m6 = ['nim' => '20051', 'nama' => 'indana', 'nilai' => 50];
    $m7 = ['nim' => '20052', 'nama' => 'aji', 'nilai' => 20];
    $m8 = ['nim' => '20053', 'nama' => 'gigih', 'nilai' => 65];
    $m9 = ['nim' => '20054', 'nama' => 'adam', 'nilai' => 61];
    $m10 = ['nim' => '20055', 'nama' => 'ratna', 'nilai' => 59];

    $ar_judul = ['No', 'NIM', 'Nama', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];
    $mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];

    $nilai = array_column($mahasiswa, 'nilai');
    $nilai_tertinggi = max($nilai);
    $nilai_terendah = min($nilai);
    $jumlah_mhs = count($mahasiswa);
    $nilai_tot = array_sum($nilai);
    $nilai_rata = $nilai_tot / $jumlah_mhs;

    $mynilai = [
        'Nilai Tertinggi' => $nilai_tertinggi,
        'Nilai Terendah' => $nilai_terendah,
        'Nilai Rata Rata' => $nilai_rata,
        'Jumlah Mahasiswa' => $jumlah_mhs,
        'Jumlah Seluruh Nilai' => $nilai_tot,

    ];
    ?>

    <h3>Daftar Nilai Mahasiswa</h3>
    <table border="1" cellpadding="10" cellspacing="2" width="100%">
        <thead>
            <tr>
                <?php
                foreach ($ar_judul as $judul) {
                ?>
                    <th><?= $judul ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($mahasiswa as $data) {
                $keterangan = ($data['nilai'] >= 60) ? 'Lulus' : 'Tidak Lulus';


                if ($data['nilai'] >= 90) {
                    $grade = 'A';
                } elseif ($data['nilai'] >= 80) {
                    $grade = 'B';
                } elseif ($data['nilai'] >= 70) {
                    $grade = 'C';
                } elseif ($data['nilai'] >= 60) {
                    $grade = 'D';
                } else {
                    $grade = 'E';
                }

                switch ($grade) {
                    case 'A':
                        $predikat = 'Sangat Memuaskan';
                        break;
                    case 'B':
                        $predikat = 'Memuaskan';
                        break;
                    case 'C':
                        $predikat = 'Cukup';
                        break;
                    case 'D':
                        $predikat = 'Kurang';
                        break;
                    case 'E':
                        $predikat = 'Sangat Kurang';
                        break;
                    default:
                        $predikat = 'Tidak Diketahui';
                }

            ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $data['nim'] ?></td>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['nilai'] ?></td>
                    <td><?= $keterangan ?></td>
                    <td><?= $grade ?></td>
                    <td><?= $predikat ?></td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <?php
            foreach ($mynilai as $ket => $hasil) {
            ?>
                <tr>
                    <th colspan="3"><?= $ket ?></th>
                    <td colspan="4" style="text-align: center;"><?= $hasil ?></td>
                </tr>
            <?php } ?>
        </tfoot>
    </table>
</body>

</html>