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
            <h1 class="m-0 text-dark">Data Nilai Sosial</h1>
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
                                <a href="#edit" title="edit"><svg xmlns="http://www.w3.org/2000/svg" width="25"viewBox="0 0 64 64"><path fill="#ed7899" d="M46.2,7.92h9.63a4,4,0,0,1,4,4V17.1a0,0,0,0,1,0,0H42.2a0,0,0,0,1,0,0V11.92a4,4,0,0,1,4-4Z" transform="rotate(45 51.017 12.512)"></path><path fill="#c2cde7" d="M32.5 15.51H55.129999999999995V24.869999999999997H32.5z" transform="rotate(45 43.817 20.19)"></path><path fill="#f9e3ae" d="M17.12 17.45H35.5V57.92999999999999H17.12z" transform="rotate(45 26.318 37.691)"></path><path fill="#f6d397" d="M27.38 21.7H33.74V62.17999999999999H27.38z" transform="rotate(45 30.567 41.941)"></path><path fill="#faefde" d="M5 57L6 46 13 47 14 50 16.92 51.5 19 59 7 59 5 57z"></path><path fill="#faefde" d="M18.88 13.2H25.24V53.67999999999999H18.88z" transform="rotate(45 22.068 33.441)"></path><path fill="#8d6c9f" d="M60.59,15.9a4,4,0,0,0-1.17-2.83L50.93,4.59a4.09,4.09,0,0,0-5.66,0L41,8.83a2,2,0,0,0-2.83,0l-5.66,5.66a2,2,0,0,0,0,2.83l.05.05L5.52,44.4a3,3,0,0,0-.87,1.88L4,54.68l-.7,4.92a1,1,0,0,0,1,1.14H4.4L9.32,60l8.45-.62a3,3,0,0,0,1.9-.87l27.08-27a2,2,0,0,0,2.77,0l5.66-5.66a2,2,0,0,0,0-2.83l4.24-4.24A4,4,0,0,0,60.59,15.9Zm-48.69,32,.58,2.88a1,1,0,0,0,.78.78l2.88.58,1.07,5.34L9.59,58,6,54.41l.61-7.6ZM19,56.35l-1-4.77L34.67,35a1,1,0,0,0-1.41-1.41L16.66,50.17,14.3,49.7l-.47-2.36L27.59,33.58a1,1,0,0,0-1.41-1.41L12.42,45.93,7.75,45,34,18.78,45.32,30.09ZM52.34,25.8h0a1,1,0,0,0-1.41,0l-1.41,1.41a1,1,0,0,0,0,1.41h0L48.1,30h0L34,15.9l1.41-1.41a1,1,0,0,0,1.41,0l1.41-1.41a1,1,0,0,0,0-1.41l1.41-1.41.71.71L53.05,23.68l.71.71ZM58,17.31l-4.24,4.24L42.44,10.24,46.69,6a2,2,0,0,1,2.83,0L58,14.49a2,2,0,0,1,0,2.83Z"></path><path fill="#8d6c9f" d="M40.32 15.19l-1.41 1.41A1 1 0 1 0 40.32 18l1.41-1.41a1 1 0 0 0-1.41-1.41zM43.86 18.73l-1.41 1.41a1 1 0 1 0 1.41 1.41l1.41-1.41a1 1 0 0 0-1.41-1.41zM47.39 22.26L46 23.68a1 1 0 1 0 1.41 1.41l1.41-1.41a1 1 0 0 0-1.41-1.41zM31.84 26.51L29 29.33a1 1 0 1 0 1.41 1.41l2.83-2.83a1 1 0 0 0-1.41-1.41z"></path></svg></a>
                                <a href="#hapus" title="hapus"><svg xmlns="http://www.w3.org/2000/svg" width="25" viewBox="0 0 64 64"><rect width="48" height="10" x="7" y="7" fill="#f9e3ae" rx="2" ry="2"></rect><rect width="36" height="4" x="13" y="55" fill="#f9e3ae" rx="2" ry="2"></rect><path fill="#c2cde7" d="M47 55L15 55 10 17 52 17 47 55z"></path><path fill="#ced8ed" d="M25 55L15 55 10 17 24 17 25 55z"></path><path fill="#b5c4e0" d="M11,17v2a3,3,0,0,0,3,3H38L37,55H47l5-38Z"></path><path fill="#8d6c9f" d="M16 10a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0V11A1 1 0 0 0 16 10zM11 10a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0V11A1 1 0 0 0 11 10zM21 10a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0V11A1 1 0 0 0 21 10zM26 10a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0V11A1 1 0 0 0 26 10zM31 10a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0V11A1 1 0 0 0 31 10zM36 10a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0V11A1 1 0 0 0 36 10zM41 10a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0V11A1 1 0 0 0 41 10zM46 10a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0V11A1 1 0 0 0 46 10zM51 10a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0V11A1 1 0 0 0 51 10z"></path><path fill="#8d6c9f" d="M53,6H9A3,3,0,0,0,6,9v6a3,3,0,0,0,3,3c0,.27,4.89,36.22,4.89,36.22A3,3,0,0,0,15,60H47a3,3,0,0,0,1.11-5.78l2.28-17.3a1,1,0,0,0,.06-.47L52.92,18H53a3,3,0,0,0,3-3V9A3,3,0,0,0,53,6ZM24.59,18l5,5-4.78,4.78a1,1,0,1,0,1.41,1.41L31,24.41,37.59,31,31,37.59l-7.29-7.29h0l-5.82-5.82a1,1,0,0,0-1.41,1.41L21.59,31l-7.72,7.72L12.33,27.08,21.41,18Zm16,0,3.33,3.33a1,1,0,0,0,1.41-1.41L43.41,18h7.17L39,29.59,32.41,23l5-5Zm-11,21L23,45.59l-5.11-5.11a1,1,0,0,0-1.41,1.41L21.59,47l-5.86,5.86L14.2,41.22l8.8-8.8Zm7.25,4.42L32.41,39,39,32.41l5.14,5.14a1,1,0,0,0,1.41-1.41L40.41,31,47,24.41l2.67,2.67-1.19,9L38.3,46.28h0L31,53.59,24.41,47,31,40.41l4.42,4.42a1,1,0,0,0,1.41-1.41ZM23,48.41,28.59,54H17.41Zm16,0L44.59,54H33.41ZM40.41,47,48,39.37,46.27,52.86ZM50,24.58,48.41,23l2.06-2.06Zm-19-3L27.41,18h7.17Zm-19.47-.64L13.59,23,12,24.58Zm3.47.64L11.41,18h7.17ZM47,58H15a1,1,0,0,1,0-2H47a1,1,0,0,1,0,2Zm7-43a1,1,0,0,1-1,1H9a1,1,0,0,1-1-1V9A1,1,0,0,1,9,8H53a1,1,0,0,1,1,1Z"></path></svg></a>
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
