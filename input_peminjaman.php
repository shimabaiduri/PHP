<?php

require('controller/islogin.php');


//menambahkan class database
require('db/database.php');
$db = new Database();

$no = @$_GET['id'];

//buat query untuk mengambil data buku di table
$db->query('SELECT * FROM books');
$bukus = $db->get();

// buat query untuk mengambil data buku di table
$db->query('SELECT * FROM customers');
$customers = $db->get();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | General Form Elements</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <?php
      require('template/header.php');
    ?>
    <?php
      require('template/sidebar.php');
    ?>


  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6" style="color: sienna;">
            <h1>PEMINJAMAN BUKU-BUKU</h1>
          </div>
          <div class="col-sm-6" >
            <ol class="breadcrumb float-sm-right" >
              <li class="breadcrumb-item" style="color: sienna;"><a>Home</a></li>
              <li class="breadcrumb-item active" style="color: sienna;">
                <?php
                if ($no) {
                  echo 'Edit Peminjaman Buku';
                }else{
                  echo 'Tambah Peminjaman Buku';
                }
                ?>
              </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <form  enctype="multipart/form-data" action="<?php echo (@$no ? 'controller/update_loans.php' : 'controller/save_pinjam.php'); ?>" method="POST">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header" style="background-color: moccasin;">
                <h3 class="card-title" style="color: sienna;">
                  <?php
                  if ($no) {
                    echo 'Edit Peminjaman Buku';
                  }else {
                    echo 'Tambah Peminjaman Buku';
                  }
                  ?>
                </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <div class="card-body">

                   <?php
                   if($no) { 
                   ?>
                      <input name="id" type="hidden" value="<?= @$no ?>">
                   <?php } ?>
                    <div class="form-group">
                        <label for="no_induk" style="color: sienna;">No Induk</label>
                        <select name="no_induk" class="form-control">

                            <?php
                             foreach ($bukus as $buku) {
                            ?>
                             <option value=<?= $buku['no_induk'] ?>><?= $buku['judul'] ?></option>
                            <?php
                             }
                            ?>
                        </select>
                    </div>
                
                
                        <div class="form-group">
                            <label for="id_cus" style="color: sienna;">Customer</label>
                            <select name="id_cus" class="form-control">



                                <?php
                                foreach ($customers as $cus) {
                                ?>
                                    <option value=<?= $cus['id_cus'] ?>><?= $cus['id_cus'] . " | " . $cus['nama'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                <!-- /.card-body -->

                    <div class="card-footer" >
                        <button type="submit" class="btn" style="background-color: moccasin;">Simpan</button>
                    </div>
                    </div>
                      <!-- /.card -->
                    </div>
                <!--/.col (left) -->
            </div>
             <!-- /.row -->
        </div><!-- /.container-fluid -->
    </form>
    </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php
       require('template/footer.php');
    ?>
        <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- bs-custom-file-input -->
  <script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- Page specific script -->
   <script>
        $(function () {
           bsCustomFileInput.init();
        });
   </script>
   
</body>

</html>