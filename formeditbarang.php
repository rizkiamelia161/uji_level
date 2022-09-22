<?php
include 'koneksi.php';

$nama_barang = $_GET['id_siswa'];
$sql ="SELECT * FROM databarang WHERE nama_barang='$nama_barang'";
$query = mysqli_query($connect, $sql);
$pel = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) <1){
    die ("data tidak ditemukan");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        <?php include "formeditbarang.css";?>
    </style>
    <title>Edit Data</title>
</head>
<body>
   <div class="sidebarformeditbarang">
     <header>SARPRAS</header>
        <ul>
          <li><a href="tampilan.php"><i class="fas fa-qrcode">Daftar Siswa</i></a></li>
          <li><a href="daftarbarang.php"><i class="fas fa-qrcode">Daftar Barang</i></a></li>
       <div class="logo margin-right: 30px;"></div> 
   </div> 
   <div class="content"> 
      <h3>Edit Data Barang</h3>    
      <form action="editbarang.php" method="post">
         <p><label>Nama Barang :<input value="<?php echo $pel['nama_barang']?>" required="required" name="nama_barang"></label></p>
         <p><label>Jenis Barang :<input value="<?php echo $pel['jenis_barang']?>" required="required" name="jenis_barang"></label></p>
         <p><label>Kode Barang : <input value="<?php echo $pel['kode_barang']?>" required="required" name="kode_barang" cols="30" rows="5"></label></p>
         <p><label>Alasan Peminjaman :<input value="<?php echo $pel['alasan_peminjaman']?>" required="required" name="alasan_peminjaman"></label></p>
         <p><label>Stok Barang :<input value="<?php echo $pel['stok_barang']?>" required="required" name="stok_barang"></label></p>
         <p><label>Kondisi Barang :<input value="<?php echo $pel['kondisi_barang']?>" required="required" name="kondisi_barang"></label></p>
         <input type="submit" name="simpanbarang" value="simpan">
     </form>
   </div>
</body>
</html>