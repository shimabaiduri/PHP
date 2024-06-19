<?php

session_start();
require('db/database.php');

$db = new Database();

$db->query('SELECT * FROM books');
$hasil = $db->get();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
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
    <section class="content-header" style="color:sienna";>
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Monggo Tambah Buku</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#" style="color: sienna;">Home</a></li>
              <li class="breadcrumb-item active" style="color:sienna">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
<form  enctype="multipart/form-data" action="<?php echo (@$no? 'controller/update_buku.php' : 'controller/save_buku.php'); ?>"method="POST">
  <div class="container-fluid">
    
    <div class="row">
        <div class="col-md-3">
            <div class="card card-primary">
                <div class="card-header" style="background-color: moccasin">
                    <h3 class="card-title" style="color: sienna;">Gambar</h3>
                </div>
                <div class="form-group mb-0">
                    <div class="input-group">
                        <div class="custom-file m-3">
                            <input type="file" name="image" class="custom-file-input" id="exampleInputFile" accept="image/*">
                            <label class="custom-file-label" for="exampleInputFile" style="color:sienna">Pilih</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <!-- left column -->
          <div class="col-md-9">
            <!-- general form elements -->
            <div class="card" style="color: sienna;">
              <div class="card-header" style="background-color:moccasin;">
                <h3 class="card-title" style="background-color:moccasin;">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="controller/save_buku.php"method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">No Induk</label>
                    <input type="text" class="form-control" name="no_induk" id="no_induk" placeholder="masukkan no induk e" required <?=@$buku['no_induk']? 'readonly' :'';?> value="<?= @$buku['no_induk']?>">
                  </div>  
                  <div class="form-group">
                    <label for="exampleInputEmail1">judul buku</label>
                    <input type="text" class="form-control" name="judul" id="judul" placeholder="masukkan judul" required value="<?= @$buku['judul']?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Penulis</label>
                    <input type="text" class="form-control" name="penulis"id="penulis" placeholder="masukkan penulis" required value="<?= @$buku['penulis']?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tahun</label>
                    <input type="text" class="form-control" nama="tahun" id="tahun" placeholder="masukkan tahun" required value="<?= @$buku['tahun']?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Penerbit</label>
                    <input type="text" class="form-control" nama="penerbit" id="penerbit" placeholder="masukkan penerbit" required value="<?= @$buku['penerbit']?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Subjek</label>
                    <input type="text" class="form-control" nama="subjek" id="subjek" placeholder="masukkan subjek" required value="<?= @$buku['subjek']?>">
                  </div>
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn" style="background-color:moccasin;">Simpan</button>
                </div>
              </form>
            </div>
            
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer" style="background-color: rgb(54, 25, 5);">
    <div class="float-right d-none d-sm-block" style="color: moccasin;">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io" style="color: moccasin;">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
  
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
