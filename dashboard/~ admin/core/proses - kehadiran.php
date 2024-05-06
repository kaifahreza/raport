<?php
session_start();
include '../config/connection.php';

if (isset($_POST['submit'])) {
$data = mysqli_query($conn, "SELECT * FROM kehadiran");

if ($cek > 0) {
    $_SESSION['sakit'] = $username;
    $_SESSION['password'] = $login['password'];
    $_SESSION['access'] = $login['access'];
    $_SESSION['access'] = 'login';

if ($login['access'] == 'admin') {    
    echo "
    <script>
    window.location.href='dashboard/';
    </script>
    ";
    

}
elseif ($login['access'] == 'guru') {
    # code...
    echo "
    <script>
    alert('Anda Login Sebagai Guru')
    window.location.href='home_pengunjung.php';
    </script>
    
    ";
    
}
elseif ($login['access'] == 'siswa') {
   
    # code...
    
    echo "
    <script>
    alert('Anda Login Sebagai Siswa')
    window.location.href='home_kasir.php';
    </script>
    
    ";
}

}else {
    
    
    echo"
    <script>
    alert('Anda Gagal login);
    window.location.href='homel.php';
    </script>";
}
}
?>
