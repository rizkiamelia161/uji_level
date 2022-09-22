<?php
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <style>
        <?php include "daftarbarang.css"; ?>
    </style>
    <title>Document</title>
    
</head>
<body>
   <div class="sidebar"> 
        <header>SARPRAS</header>
        <ul>
          <li><a href="tampilan.php"><i class="fas fa-qrcode">Daftar Siswa</i></a></li>
          <li><a href="daftarbarang.php"><i class="fas fa-qrcode">Daftar Barang</i></a></li>
       <div class="logo margin-right: 30px;"></div>
     </div>
    <div class="conten">
         <h3>Data Barang</h3>
         <h4><a href="barang.html">create</a></h4>
         <table border="1">
              <tr>
                  <th>Nama Barang</th>
                  <th>Jenis Barang</th>
                  <th>Kode Barang</th>
                  <th>Alasan Peminjaman</th>
                  <th>Stok Barang</th>
                  <th>Kondisi Barang</th>
                  <th>Action</th>
                </tr>

             <?php
                   $sql = "SELECT * FROM databarang ";
                   $query = mysqli_query($connect, $sql);
                   while($pel = mysqli_fetch_array($query)){
                     echo "
                 <tr>
                      <td>$pel[0]</td>
                      <td>$pel[1]</td>
                      <td>$pel[2]</td>
                      <td>$pel[3]</td>
                      <td>$pel[4]</td>
                      <td>$pel[5]</td>
                     <td>
                         <a id='edit' href='formeditbarang.php?id_siswa=".$pel['nama_barang']."'><img src='edit-removebg-preview.png' alt=''><a>
                         <a id='delete' href='hapusbarang.php?id_siswa=".$pel['nama_barang']."'><img src='hapus-removebg-preview.png' alt=''><a>
                      </td>
                  </tr>";    
                   }
               ?>
         </table>
     </div>          
</body>
</html>