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
            <h1 class="m-0 text-dark">Data Catatan</h1>
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
                <br>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                    <div class="dataTable-top">
                      <div class="dataTable-dropdown">
                        <select style="border-radius: 4px;" class="dataTable-selector form-select">
                          <option value="5">5</option>
                          <option value="10">10</option>
                          <option value="15">15</option>
                          <option value="20">20</option>
                          <option value="25">25</option>
                        </select>
                      </div><br>
                      
                      <div class="dataTable-container">
                        <table id="table1" class="table table-sm table-hover dataTable-table">
                          <thead>
                            <tr class="bg-dark">
                              <th scope="col" data-sortable  class="asc"><a style="color: white;" href="#" >#</a></th>
                              <th scope="col" data-sortable  class="asc"><a style="color: white;" href="#" class="dataTable-sorter">Kelas</a></th>
                              <th scope="col" data-sortable  class="asc"><a style="color: white;" href="#" class="dataTable-sorter">Wali Kelas</a></th>
                              <th scope="col" data-sortable  class="asc"><a style="color: white;" href="#" class="dataTable-sorter">Semester</a></th>
                              <th scope="col" data-sortable  class="asc"><a style="color: white;" href="#" class="dataTable-sorter">Aksi</a></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                            include '../config/connection.php';
                            $sql = "SELECT kelas.id_kelas, kelas.kelas, wali_kelas.nama_wali, semester.fase FROM kelas INNER JOIN wali_kelas ON kelas.id_kelas = wali_kelas.id_wali INNER JOIN semester ON kelas.id_kelas = semester.semester_id";
                            $kaifahreza = mysqli_query($conn, $sql); 
                            ?>
                            <?php foreach ($kaifahreza as $row) : ?>
                            <tr>
                              <td><?= $row['id_kelas']; ?></td>
                              <td><?= $row['kelas'] ?></td>
                              <td><?= $row['nama_wali']; ?></td>
                              <td><?= $row['fase']; ?></td>
                              <td>
                                <a href="ketidakhadiran-2.php" title="hadir"><?xml version="1.0" ?><svg class="feather feather-folder" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"/></svg></a>
                              </td>
                            <?php endforeach; ?>
                            </tr>
                          </tbody>
                        </table>
                      </div><br>
                      <div class="dataTable-bottom">
                        <div class="dataTable-info"></div>
                        <nav class="dataTable-pagination">
                          <ul class="dataTable-pagination-list pagination pagination-primary">
                            <li class="pager page-item"><a href="#" data-page="1" class="page-link">←</a></li>
                            <li class="active page-item"><a href="#" data-page="1" class="page-link">1</a></li>
                            <li class="page-item"><a href="#" data-page="2" class="page-link">2</a></li>
                            <li class="pager page-item"><a href="#" data-page="2" class="page-link">→</a></li>
                          </ul>
                        </nav>
                      </div>
                    </div>
                  </div>
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
