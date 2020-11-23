<?php
include("config.php")

//kalau tidak ada id di query string
if (!isset($_GET['id']) {
    # code...
    header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

//buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);


?>