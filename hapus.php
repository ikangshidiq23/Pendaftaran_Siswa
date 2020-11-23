<?php

include("config.php");

if (isset($_GET['id'])) { //kenapa ga id jadi hapus?
    # ambil dari query string
    $id = $_GET['id'];

    //buat query hapus
    $sql = "DELET FROM calon_siswa WHERE id=$id";
    $query = mysqli_query($db, $sql);

    //apakah query hapus berhasil?
    if ($query) {
        header('Location: list-siswa.php');
    }else {
        die("gagal Menghapus..");
    } 
 
} else {
    die("akses dilarang..");
}
?>