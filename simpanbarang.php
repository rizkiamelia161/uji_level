<?php
include 'koneksi.php';

if(isset($_POST['simpanbarang'])){
    $nama_barang = $_POST['nama_barang'];
    $jenis_barang = $_POST['jenis_barang'];
    $kode_barang = $_POST['kode_barang'];
    $alasan_peminjaman = $_POST['alasan_peminjaman'];
    $stok_barang = $_POST['stok_barang'];
    $kondisi_barang = $_POST['kondisi_barang'];


    $sql = "INSERT INTO databarang VALUES('$nama_barang','$jenis_barang',' $kode_barang','$alasan_peminjaman','$stok_barang',' $kondisi_barang')";
    $query = mysqli_query($connect, $sql);

    if ($query){
        header('Location: daftarbarang.php');
    }else{
        header('Location: simpanbarang.php?status=gagal');
    }
}
?>