<!DOCTYPE html>
<html>
<head>
	<?php include 'header.php' ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <?php include 'nav.php' ?>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
	<?php include 'sidebar.php' ?>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Kehadiran</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="callout callout-warning my-1">
                    <div class="row col-md-6">
                        <div class="col-md-4 fw-bold">Wali Kelas</div>
                        <div class="col-md-8"> Bu Maya </div>
                        <div class="col-md-4 fw-bold"> Tahun Pelajaran </div>
                        <div class="col-md-8"> 2023-2025 </div>
                        <div class="col-md-4 fw-bold"> Semester </div>
                        <div class="col-md-8"> 1/Genap </div>
                    </div>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                    <form action="core/proses - kehadiran.php" method="POST">
                        <input type="hidden" name="_token" value="yR8aCL9HB7oEYTlVInq93lw3iHWfQrkor2ZBdvM6">
                        <input type="hidden" name="_method" value="PUT">

                        <table id class="table table-sm table-hover ">
                            <thead>
                                <tr class="bg-dark text-white">
                                    <th>#</th>
                                    <th>NIS</th>
                                    <th>Nama</th>
                                    <th>L/P</th>
                                    <th style="text-align: center;">Sakit</th>
                                    <th style="text-align: center;">Ijin</th>
                                    <th style="text-align: center;">Tanpa Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            include '../config/connection.php';
                            $sql = "SELECT * FROM kehadiran";
                            $kaifahreza = mysqli_query($conn, $sql); 
                            ?>
                            <?php foreach ($kaifahreza as $row) : ?>
                            <tr>
                              <td><?= $row['id_kehadiran']; ?></td>
                              <td><?= $row['nis'] ?></td>
                              <td style="max-width: 300px" class="text-uppercase"><?= $row['nama']?></td>
                              <td><?= $row['jenis_kelamin']; ?></td>
                              <td style="text-align: center;"><input type="number" class="form_control input-nilai" name="sakit1" id="sakit" value="<?= $row['sakit']; ?>"></td>
                              <td style="text-align: center;"><input type="number" class="form_control input-nilai" name="sakit1" id="sakit" value="<?= $row['ijin']; ?>"></td>
                              <td style="text-align: center;"><input type="number" class="form_control input-nilai" name="sakit1" id="sakit" value="<?= $row['keterangan']; ?>"></td>
                            </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-success float-right">Simpan</button>
                        <div class="checkbox float-right me-3">
                        </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>





  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
	<?php include 'footer.php' ?>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../assets/plugins/moment/moment.min.js"></script>
<script src="../assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>
</body>
</html>
