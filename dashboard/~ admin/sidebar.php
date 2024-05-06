    <a href="#" class="brand-link">
      <img src="../assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
          <li class="nav-item">
            <a href="../" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-header fw-bold mt-2">Master Data</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Biodata
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="siswa.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Siswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="guru.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Guru</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="akun.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Akun</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Administrasi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <li class="nav-item">
                <a href="kelas.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Kelas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="jurusan.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Jurusan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="mapel.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Mapel</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Penilaian
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pembelajaran.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pembelajaran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="nilai-sosial.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nilai Sosial</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?data-guru=guru" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nilai Spiritual</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="ketidakhadiran.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ketidakhadiran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="catatan.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Catatan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="ekstrakulikuler.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ekstrakulikuler</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?data-admin=admin" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Prestasi</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header fw-bold">Raport</li>
          <li class="nav-item">
            <a href="?rawr" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p> Nilai Akhir </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?rawr" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p> Raport </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->