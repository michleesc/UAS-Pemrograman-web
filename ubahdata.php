<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah data</title>
</head>
<body>
    <h3 align="center">FORM Ubah Data</h3>
    <?php
        //koneksi ke database
        $connection = mysqli_connect("localhost", "root", "", "dbpekerja") or die("Error " . mysqli_error($connection));
        $nik = $_GET ['nik'];
        $result = mysqli_query($connection, "select * from tbsupport where NIK ='$nik'");
        while($d = mysqli_fetch_array($result)) {
    ?>
    <form action="updateData.php" method="post">
    <table align="center" width="60%" bgcolor="grey">
        <tr>
            <td>NIK</td>
            <td> : </td>
            <td>
                <input type="text" name="nik" size="20" value="<?php echo $d['NIK']; ?>" readonly>
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td> : </td>
            <td>
                <input type="text" name="nama" size="30" value="<?php echo $d['Nama']; ?>">
            </td>
        </tr>
        <tr>
            <td>Kota</td>
            <td> : </td>
            <td>
                <input type="text" name="kota" size="30" value="<?php echo $d['Kota']; ?>">
            </td>
        </tr>
        <tr>
            <td>Nohp</td>
            <td> : </td>
            <td>
                <input type="text" name="nohp" size="30" value="<?php echo $d['Nohp']; ?>">
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td> : </td>
            <td>
                <input type="text" name="email" size="30" value="<?php echo $d['Email']; ?>">
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <input type="submit" name="simpan" value="Ubah">
                <input type="reset" name="batal" value="Batal">
                <input type="button" name="kembali" value="Kembali" onclick="self.history.back()">
            </td>
        </tr>
    </table>
    </form>
    <?php
        }
        ?>
</body>
</html>