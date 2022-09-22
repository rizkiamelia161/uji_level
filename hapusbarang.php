<?php
include 'koneksi.php';

$nama_barang = $_GET['id_siswa'];

$sql = "DELETE FROM databarang WHERE nama_barang = '$nama_barang'";
$query = mysqli_query($connect, $sql);

if ($query){
    header('Location: daftarbarang.php');
}else{
    header('Location: simpanbarang.php?status=gagal');
}

?>