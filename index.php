<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pekerja</title>
</head>
<body>
    <h2 align="center">Data Pekerja</h2>
    <table border="1" align="center" width="100%">
        <tr>
            <th>NIK</th>
            <th>Nama</th>
            <th>Kota</th>
            <th>Nohp</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        <tr>
            <?php
                //koneksi ke database
                $connection = mysqli_connect("localhost", "root", "", "dbpekerja") or die("Error " . mysqli_error($connection));
                //menampilkan data dari database, table mahasiswa
                $sql = "Select * from tbsupport ";
                $result = mysqli_query($connection, $sql) or die("Error " . mysqli_error($connection));
                while ($data = mysqli_fetch_array($result)) {
            ?>
            <td><?php echo $data['NIK']; ?></td>
            <td><?php echo $data['Nama']; ?></td>
            <td><?php echo $data['Kota']; ?></td>
            <td><?php echo $data['Nohp']; ?></td>
            <td><?php echo $data['Email']; ?></td>
            <td><a href="ubahdata.php?nik=<?php echo $data['NIK']; ?>">Edit</a>
            <a href="hapusdata.php?nik=<?php echo $data['NIK']; ?>">Hapus</a>
            </td>
        </tr>
        <?php
                }
        ?>
    </table>
    <a href="tambahdata.php" ><button>Tambah Data</button></a>
</body>
</html>