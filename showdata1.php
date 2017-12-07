<?php
    include "DB.php";
    $dbku=new DB();
    $koneksi=$dbku->open();
    $sql="select * from mahasiswa";

    $datasiswa=$dbku->recordset($sql,$koneksi);
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Data Mahasiswa</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" >
  </head>
  <body>
  <div class="container">
        <h1>Data Mahasiswa</h1>

         <a class="btn btn-success" href="add.php ?>"
            role="button">Tambah Data
      </a>


        <table class="table table-dark">
  <thead>
    <tr>
      <th>NIM</th>
      <th>Nama Mahasiswa</th>
      <th>Email</th>
      <th>Telp</th>
      <th>Alamat</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($datasiswa as $rec):?>
    <tr>
      <td><?php echo $rec['nim'];?></td>
      <td><?php echo $rec['nama'];?></td>
      <td><?php echo $rec['email'];?></td>
      <td><?php echo $rec['telp'];?></td>
      <td><?php echo $rec['alamat'];?></td>
      <td>
        <a class="btn btn-primary" href="edit.php?nim=<?php echo $rec['nim']; ?>"
            role="button">Edit
      </a>
<a class="btn btn-danger" href="delete.php?nim=<?php echo $rec['nim']; ?>"
            role="button">Hapus
      </a>

      </td>
    </tr>
   <?php endforeach;?> 
  </tbody>
</table>
</div>
  </body>
</html>

