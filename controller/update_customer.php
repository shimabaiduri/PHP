<?php 


require('../db/database.php');
$db = new Database();

//mengambil data menggunakan POST
$id_cus = $_POST['id_cus'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp= $_POST['telp'];
$jk= $_POST['jk'];

//buat query untuk melakukan UPDATE di table
$db->query('UPDATE customers SET nama = :nama, alamat = :alamat, telp = :telp, jk = :jk WHERE id_cus = :id_cus');

//binding data query dengan variable
$db->bind(':id_cus', $id_cus);
$db->bind(':nama', MD5($nama));
$db->bind(':alamat', $alamat);
$db->bind(':telp', $telp);
$db->bind(':jk', $jk);

//execute query ke database
$db->execute();

//kembalikan ke halaman data_buku.php
header("Location: ../data_customer.php");
