<?php
    include "DB.php";
    $dbku = new DB();
    $koneksi = $dbku->open();

    $nim=$_POST["tnim"];
    $nama=$_POST["tnama"];
    $email=$_POST["temail"];
    $telp=$_POST["ttelp"];
    $alamat=$_POST["talamat"];
    

    $sql = "INSERT INTO mahasiswa(nim,nama,email,telp,alamat)
    VALUES('$nim','$nama','$email','$telp','$alamat')";


    mysql_query($sql,$koneksi) or die('Gagal menjalankan SQL : '.$sql);

    header("location:http://localhost/webb4/CRUD/showdata1.php");
    ?>