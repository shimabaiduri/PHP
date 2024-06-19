<?php
 // menambahkan class database
 require('../db/database.php');
 $db = new Database();

 //mengambil data no menggunakan Get
 $id = $_GET['id'];

 //buat query untuk melakukan penghapusan di data table
 $db->query('DELETE FROM loans WHERE id=:id');

 //binding data query dengan variable
 $db->bind(':id', $id);

 //execute query ke database
 $db->execute();
 
 //kembalikan ke halaman data_customer.php
 header("Location: ../data_pinjam.php");
 