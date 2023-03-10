<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="sweetalert2.all.js"></script>
      <title>Çıkış Yap</title>
</head>
<body style="background-color:black;">
      <?php   
      //logout.php  
      session_start();  
      session_destroy();  
      header("Refresh:1; url = /Devil-Bitirme-Projesi/html/login.php");
      echo '<script>Swal.fire("Başarılı","Hesaptan çıkış yapıldı. Güle Güle","success");</script>';
?> 
</body>
</html>