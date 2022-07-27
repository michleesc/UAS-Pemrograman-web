<?php
    //koneksi ke database
    $connection = mysqli_connect("localhost", "root", "", "dbpekerja") or die("Error " . mysqli_error($connection));

    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $kota = $_POST['kota'];
    $nohp = $_POST['nohp'];
    $email = $_POST['email'];

    $update = mysqli_query($connection, "update tbsupport set Nama='$nama', Kota='$kota', Nohp='$nohp', Email='$email' where NIK = '$nik'");

    if ($update){
        echo "<script> alert ('Data berhasil diupdate')</script>";
        header ("refresh:0;index.php");
    }else {
        echo "<script> alert ('Data tidak berhasil diupdate')</script>";
        header ("refresh:0;index.php");
    }
?>