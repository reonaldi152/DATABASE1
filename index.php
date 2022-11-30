<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAKTIKUM</title>
</head>

<body>

    <h2>DATA MAHASISWA</h2>

    <br><br>

    <table border="1">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>NRP</th>
            <th>ALAMAT</th>
            <th>OPSI</th>
        </tr>

        <?php
        include 'koneksi.php';

        $no = 1;

        $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa");

        while ($d = mysqli_fetch_assoc($data)) :
        ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $d["nama_mhs"]; ?></td>
                <td><?php echo $d["nrp"]; ?></td>
                <td><?php echo $d["alamat"]; ?></td>
                <td>
                    <a href="#">EDIT</a>
                    <a href="#">HAPUS</a>
                </td>
            </tr>

        <?php endwhile; ?>
    </table>

</body>

</html>