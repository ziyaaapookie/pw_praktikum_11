<?php
//Koneksi ke database
include "koneksi.php";
//Mendapatkan ID MAhasiswa yang akan dihapus
$id = $_GET['id'];
//Query hapus data
$sql = "DELETE FROM mahasiswa WHERE id='$id'";
if (mysqli_query($link, $sql)) {
    header("Location: tampil_data.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
}
?>