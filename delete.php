<?php
    include "DB.php";
    $dbku = new DB();
    $koneksi = $dbku->open();

    $nim=$_GET['nim'];
    // $nama=$_GET["nama"];
    // $email=$_GET["email"];
    // $telp=$_GET["telp"];
    // $alamat=$_GET["alamat"];
    

    $sql = "DELETE FROM mahasiswa Where nim='$nim'";


    mysql_query($sql,$koneksi) or die('Gagal menjalankan SQL : '.$sql);

    header("location:http://localhost/webb4/CRUD/showdata1.php");
    ?>