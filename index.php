<!DOCTYPE html>
<html lang="en">
<head>
    <title>pendaftaran siswa baru | SMK coding</title>
</head>

<body style="text-align: center;">
    <header>
        <h3>pendaftaran Siwa Baru</h3>
        <h1>SMK Coding</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <a href="form-daftar.php">Daftar Baru</a></li></br>
        <a href="list-siswa.php">Pendaftaran</a></li>
    </nav>
    <p>
        <?php 
        if(isset($_GET['status']))
            if ($_GET['status'] == 'sukses') {
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal";
            }
    
    
         ?>
        </p>
</body>
</html>