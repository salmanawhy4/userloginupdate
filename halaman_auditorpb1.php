<!DOCTYPE html>
<html>
<head>
 <title>Halaman AuditorPB1</title>
</head>
<body>
 <?php
 session_start();

 // cek apakah yang mengakses halaman ini sudah login
 if($_SESSION['role']==""){
  header("location:index.php?pesan=gagal");
 }

 ?>
 <h1>Halaman AuditorPB1</h1>

 <p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['role']; ?></b>.</p>
 <a href="logout.php">LOGOUT</a>

 <br/>
 <br/>

</body>
</html>