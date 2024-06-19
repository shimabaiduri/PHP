<?php 


require('../db/database.php');
$db = new Database();


$no = $_POST['no_induk'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$tahun = $_POST['tahun'];
$penerbit = $_POST['penerbit'];
$subjek= $_POST['subjek'];

$photo = null;


if(isset($_FILES["image"])) {

    $file = $_FILES['image']['tmp_name'];

    if ($file) {

        $photo = @base64_encode(file_get_contents($file));
    }
}


if($photo) {
$db->query('UPDATE books SET judul = :judul, penulis = :penulis, tahun = :tahun, penerbit = :penerbit, subjek = :subjek, photo = :photo WHERE no_induk = :no_induk');



        $db->bind(':no_induk', $no);
        $db->bind(':judul', $judul);
        $db->bind(':penulis', $penulis);
        $db->bind(':tahun', $tahun);
        $db->bind(':penerbit', $penerbit);
        $db->bind(':subjek', $subjek);
        $db->bind(':photo', $photo);

} else {
    $db->query('UPDATE books SET judul = :judul, penulis = :penulis, tahun = :tahun, penerbit = :penerbit, subjek = :subjek WHERE no_induk = :no_induk');
        $db->bind(':no_induk', $no);
        $db->bind(':judul', $judul);
        $db->bind(':penulis', $penulis);
        $db->bind(':tahun', $tahun);
        $db->bind(':penerbit', $penerbit);
        $db->bind(':subjek', $subjek);
}

$db->execute();

header("Location: ../lihat.php");
