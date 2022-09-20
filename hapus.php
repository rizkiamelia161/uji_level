<?php
include 'koneksi.php';

$id_siswa = $_GET['id_siswa'];

$sql = "DELETE FROM datasiswa WHERE id_siswa = '$id_siswa'";
$query = mysqli_query($connect, $sql);

if ($query){
    header('Location: daftarsiswa.php');
}else{
    header('Location: simpan.php?status=gagal');
}

?>