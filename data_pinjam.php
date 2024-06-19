<?php
require('controller/islogin.php');
require('db/database.php');

$db = new Database();

$db->query("SELECT * FROM loans l
    INNER JOIN books b ON l.no_induk = b.no_induk
    INNER JOIN customers c ON l.id_cus = c.id_cus
    WHERE l.end_date IS NULL;");

$hasil = $db->get();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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
            <h1>Peminjaman</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#" style="color: sienna;">Home</a></li>
              <li class="breadcrumb-item active" style="color: sienna;">Data Peminjaman</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header" style="background-color: moccasin;">
                <h3 class="card-title" style="color: sienna;">Data Peminjaman</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-stripeed">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>No Induk</th>
                        <th>Judul</th>
                        <th>ID Customer</th>
                        <th>Nama Customer</th>
                        <th>Dipinjam Sejak</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach ($hasil as $row) {
                      ?>
                        <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['no_induk'] ?></td>
                        <td><?= $row['judul'] ?></td>
                        <td><?= $row['id_cus'] ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['start_date'] ?></td>
                        <td>


                          <div class="btn-group">


                            <button type="button" class="btn btn-warning btn-xs">
                              <a class="text-light" href="input_kembali.php?id=<?php echo $row['id'] ?>">
                                Kembalikan
                              </a>
                            </button>

                            <button type="button" class="btn btn-info btn-xs">
                              <a class="text-light" href="input_peminjaman.php?id=<?php echo $row['id'] ?>">
                                 Edit
                              </a>
                            </button>


                            <button type="button" class="btn btn-danger btn-xs">
                              <a  class="text-light" href="controller/delete_loans.php?id=<?php echo $row['id'] ?>">
                                Hapus
                              </a>
                            </button>

                          </div>
                        </td>
                      </tr>
                      <?php
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
                  
                <!-- /.card-body -->
              </div>
                <!-- /.card -->
              </div>
                <!--/.col -->
              </div>
                <!-- /.row -->
              </div>
                <!-- /.container-fluid -->
              </section>
                <!-- /.content -->
              </div>
              <!-- /.content-wrapper -->

              <?php
              require('template/footer.php')
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
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<!-- DataTables & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  $("#example").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "exel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example_wrapper .col-md-6:eq(0)');

      $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      });
      });

</script>
</body>
</html>
