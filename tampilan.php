<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sarpras</title>
</head>
<body> 
  <div class="container">
      <div class="sidebar"> 
        <header>SARPRAS</header>
        <ul>
          <li><a href="#"><i class="fas fa-qrcode">Daftar Siswa</i></a></li>
          <li><a href="#"><i class="fas fa-qrcode">Daftar Barang</i></a></li>
       <div class="logo margin-right: 30px;"></div>
     </div>
      <div class="conten">
      <h3>Data Siswa</h3>
    <h4><a href="siswa.html">[+] Creat</a></h4>
    <table border="1">
        <tr>
            <th>Id Siswa</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th>Kode Barang</th>
            <th>Tggl Pengembalian</th>
            <th>Action</th>
        </tr>

        <?php
               $sql = "SELECT * FROM datasiswa ";
               $query = mysqli_query($connect, $sql);
               while($pel = mysqli_fetch_array($query)){
                  echo "
                <tr>
                  <td>$pel[0]</td>
                  <td>$pel[1]</td>
                  <td>$pel[2]</td>
                  <td>$pel[3]</td>
                  <td>$pel[4]</td>
                  <td>
                     <a href='formedit.php?id_siswa=".$pel['id_siswa']."'>Edit<a>
                     <a href='hapus.php?id_siswa=".$pel['id_siswa']."'>Hapus<a>
                  </td>
                </tr>";    
               }
        ?>
   </table>   
      </div>
  </div>
</body>
</html>