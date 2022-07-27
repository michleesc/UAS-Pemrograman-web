<?php
    //koneksi ke database
    $connection = mysqli_connect("localhost", "root", "", "dbpekerja") or die("Error " . mysqli_error($connection));

    $nik = $_GET['nik'];
    $hapus = mysqli_query($connection, "delete from tbsupport where NIK ='$nik'");

    if ($hapus){
        echo "<script> alert ('Data berhasil dihapus')</script>";
        header ("refresh:0;index.php");
    }else {
        echo "<script> alert ('Data tidak berhasil dihapus')</script>";
        header ("refresh:0;index.php");
    }
?>