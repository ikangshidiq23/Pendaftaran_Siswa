<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
</head>

<body>
    <header><h2>Siswa yang sudah mendaftar</h2></header>

    <nav><a href="form-daftar.php">[+] Tambah baru</a></nav>

    <br>

    <table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>no</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenil Kel</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $sql = "SELECT * FROM calon_siswa";
        $query = mysqli_query($db, $sql); //knpa tidak pakai ""

        while($siswa=mysqli_fetch_array($query)){//harus pakai fetch?
            echo "<tr>";

            echo "<td>".$siswa['id']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['jenis_kelamin']."</td>";
            echo "<td>".$siswa['agama']."</td>";
            echo "<td>".$siswa['sekolah_asal']."</td>";
            echo "<td>";
            echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }

        ?>
    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
</body>

</html>