<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>
</head>
<body>
    <h3>FORM TAMBAH DATA</h3>
    <form action="simpandata.php" method="post">
    <table align="center" width="60%" bgcolor="grey">
        <tr>
            <td>NIK</td>
            <td> : </td>
            <td>
                <input type="text" name="nik" size="30" placeholder="Masukkan NIK">
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td> : </td>
            <td>
                <input type="text" name="nama" size="30" placeholder="Masukkan Nama">
            </td>
        </tr>
        <tr>
            <td>Kota</td>
            <td> : </td>
            <td>
                <input type="text" name="kota" size="30" placeholder="Masukkan Kota">
            </td>
        </tr>
        <tr>
            <td>Nohp</td>
            <td> : </td>
            <td>
                <input type="text" name="nohp" size="30" placeholder="Masukkan Nomor Handphone">
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td> : </td>
            <td>
                <input type="text" name="email" size="30" placeholder="Masukkan Email">
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <input type="submit" name="simpan" value="Simpan">
                <input type="reset" name="batal" value="Batal">
                <input type="button" name="kembali" value="Kembali" onclick="self.history.back()">
            </td>
        </tr>
    </table>
    </form>
</body>
</html>