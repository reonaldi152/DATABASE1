<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>

<body>

    <?php
    include 'koneksi.php';

    if (isset($_POST['submit'])) {

        // menangkap data yang di kirim dari form oleh user
        $nama = $_POST['nama_mhs'];
        $nrp = $_POST['nrp'];
        $alamat = $_POST['alamat'];
        // harus sama dengan yang di atribut input name

        mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES('','$nama','$nrp','$alamat')");

        header('location:index.php');
    }


    ?>
    <h2>Tambah Data Mahasiswa</h2>
    <br>

    <a href="index.php">KEMBALI</a>
    <br>

    <form action="" method="post">
        <ul>
            <li>
                <label for="">Nama : </label>
                <input type="text" name="nama_mhs">
                <!-- jangan diikutin name nya klo beda di database -->
            </li>
            <li>
                <label for="">NRP : </label>
                <input type="text" name="nrp">
                <!-- jangan diikutin name nya klo beda di database -->
            </li>
            <li>
                <label for="">Alamat : </label>
                <input type="text" name="alamat">
                <!-- jangan diikutin name nya klo beda di database -->
            </li>
            <br>

            <button type="submit" name="submit">TAMBAH DATA</button>

        </ul>
    </form>


</body>

</html>