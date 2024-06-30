<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
    <h2>Data</h2>
    <tr border="1px solid">
        <th width="50">No</th>
        <th width="100">No. Induk</th>
        <th width="150">Nama Karyawan</th>
        <th width="120">Jabatan</th>
        <th width="100">Gaji Pokok</th>
        <th width="100">Tunjangan</th>
    </tr>

    <?php
    include "koneksi.php";

    $no=1;
    $ambildata = mysqli_query($conn, "SELECT * FROM karyawan, jabatan WHERE karyawan.id_jab = jabatan.id_jab") or die(mysqli_error($conn));

    while($tampil = mysqli_fecth_array($ambildata)) {
        echo "
        <tr>
            <td align='center'>$no</td>
            <td align='center'>$tampil[no_induk]</td>
            <td align='center'>$tampil[nama]</td>
            <td align='center'>$tampil[nama_jab]</td>
            <td align='center'>$tampil[gaji_pokok]</td>
            <td align='center'>$tampil[tunjangan]</td>
        </tr>    
        " ;
        $no++;
    }
    ?>
</table>    
</body>
</html>


