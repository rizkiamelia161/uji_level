<?php

include 'koneksi.php';

if(isset($_POST['simpanbarang'])) {
$nama_barang = $_POST['nama_barang'];
$jenis_barang = $_POST['jenis_barang'];
$kode_barang = $_POST['kode_barang'];
$alasan_peminjaman = $_POST['alasan_peminjaman']; 
$stok_barang = $_POST['stok_barang'];
$kondisi_barang = $_POST['kondisi_barang'];

var_dump($nama_barang);
die;    
$sql = "UPDATE databarang SET jenis_barang = '$jenis_barang', kode_barang = '$kode_barang', alasan_peminjaman = '$alasan_peminjaman', stok_barang = '$stok_barang', kondisi_barang = '$kondisi_barang' WHERE nama_barang = '$nama_barang'";
$query = mysqli_query($connect, $sql);
// var_dump($query);
// die;
if($query){
    header('Location: daftarbarang.php');
}else{
    header('Location: editbarang.php?status=gagal');
}
}

?>