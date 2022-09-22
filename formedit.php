<?php
include 'koneksi.php';

$id_siswa = $_GET['id_siswa'];
$sql ="SELECT * FROM datasiswa WHERE id_siswa='$id_siswa'";
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
       <?php include "formedit.css"; ?> 
    </style>
    <title>Edit Data</title>
</head>
<body>
    <div class="sidebarformedit">
     <header>SARPRAS</header>
        <ul>
          <li><a href="tampilan.php"><i class="fas fa-qrcode">Daftar Siswa</i></a></li>
          <li><a href="daftarsiswa.php"><i class="fas fa-qrcode">Daftar Barang</i></a></li>
       <div class="logo margin-right: 30px;"></div> 
   </div>
   <div class="conten">  
        <h3>Edit Data siswa</h3>    
          <form action="edit.php" method="post">
               <p><label>Id Siswa :<input value="<?php echo $pel['id_siswa']?>" required="required" type="hidden" name="id_siswa"></label></p>
               <p><label>Nama Siswa :<input value="<?php echo $pel['nama_siswa']?>" required="required" name="nama_siswa"></label></p>
               <p><label>Kelas : <input value="<?php echo $pel['kelas']?>" required="required" name="kelas" cols="30" rows="5"></label></p>
               <p><label>Kode Barang :<input value="<?php echo $pel['kode_barang']?>" required="required" name="kode_barang"></label></p>
               <p><label>Tggl Pengembalian :<input type="text" value="<?php echo $pel['tggl_pengembalian']?>" required="required" name="tggl_pengembalian"></label></p>
               <input type="submit" name="simpan" value="simpan">
          </form>
    </div>     
</body>
</html>