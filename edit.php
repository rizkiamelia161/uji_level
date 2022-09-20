<?php

include 'koneksi.php';

if(isset($_POST['simpan'])) {
$id_siswa = $_POST['id_siswa'];
$nama_siswa = $_POST['nama_siswa'];
$kelas = $_POST['kelas'];
$kode_barang = $_POST['kode_barang']; 
$tggl_pengembalian = $_POST['tggl_pengembalian'];

$sql = "UPDATE datasiswa SET nama_siswa = '$nama', kelas = '$kelas', kode_barang = '$kode_barang', tggl_pengembalian = '$tggl_pengembalian' WHERE id_siswa = '$id_siswa'";

$query = mysqli_query($connect, $sql);
if($query){
    header('Location: daftarsiswa.php');
}else{
    header('Location: edit.php?status=gagal');
}
}

?>