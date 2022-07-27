<?php
    //koneksi ke database
    $connection = mysqli_connect("localhost", "root", "", "dbpekerja") or die("Error " . mysqli_error($connection));

    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $kota = $_POST['kota'];
    $nohp = $_POST['nohp'];
    $email = $_POST['email'];

    $simpan = mysqli_query($connection, "insert into tbsupport values ('$nik', '$nama', '$kota', '$nohp', '$email')");

    if ($simpan){
        echo "<script> alert ('Data berhasil disimpan')</script>";
        header ("refresh:0;index.php");
    }else {
        echo "<script> alert ('Data tidak berhasil disimpan')</script>";
        header ("refresh:0;index.php");
    }
?>