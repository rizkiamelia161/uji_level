<?php
include 'koneksi.php';

if(isset($_POST['simpan'])){
    $id_siswa = $_POST['id_siswa'];
    $nama_siswa = $_POST['nama_siswa'];
    $kelas = $_POST['kelas'];
    $kode_barang = $_POST['kode_barang'];
    $tggl_pengembalian = $_POST['tggl_pengembalian'];

    $sql = "INSERT INTO datasiswa VALUES('$id_siswa','$nama_siswa','$kelas','$kode_barang','$tggl_pengembalian')";

    $query = mysqli_query($connect, $sql);
    //var_dump($query);
    //die;

    if ($query){
        header('Location: daftarsiswa.php');
    }else{
        header('Location: simpan.php?status=gagal');
    }
}
?>