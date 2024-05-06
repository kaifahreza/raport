<?php
        require '../config/connection.php';

        if (isset($_POST['submit'])){
            $nama = $_POST['nama'];
            $kelas = $_POST['kelas'];
            $nisn = $_POST['nisn'];
            $jeniskelamin = $_POST['jenisk'];
            $ttl = $_POST['ttl'];
            $agama = $_POST['agama']; 

            $query = "INSERT INTO siswa (nama_siswa, kelas, nisn, jenis_kelamin, tanggal_lahir, Agama) 
                                   VALUES ('$nama', '$kelas', '$nisn', '$jeniskelamin', '$ttl', '$agama')";
            $proses = mysqli_query($conn, $query);

            if ($proses){
                echo 
				"
				<script>
					alert('Data Berhasil Ditambahkan')
					window location.href='siswa.php';
				</script>
				";
            }else{
                echo "<script> alert('Data Gagal Ditambahkan') window.location.href='siswa.php'; </script> ";    
        }
    }
?>