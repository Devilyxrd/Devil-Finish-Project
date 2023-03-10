<?php
        session_start();
        require_once "../php/connect.php";
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--CUSTOM CSS-->
    <link rel="stylesheet" href="../css/login.css">
    <!--SWEETALERT-->
    <script src="../js/sweetalert2.all.js"></script>
    <!--JS-->
    <script src="../js/main.js"></script>
    <!--FAVICON-->
    <link rel="shortcut icon" href="../media/src/favicon-32x32.png" type="image/x-icon">
    <!--TITLE-->
    <title>Login</title>
</head>
<body>
    <div class="anakutu">
        <div class="background">
            <img id="soft-back" src="../media/gif/gif-two.gif" alt="BACKGROUND-GIF">
        </div>

        <div class="login-box">
            <img src="../media/src/logo.png" alt="LOGO" id="logo">
            <h3 id="caption">DevAkademi'ye Hoşgeldiniz</h3>
            <form action="login.php" method="post" class="login-form" autocomplete="off">
                <!--LABEL-->
                <label for="ad" id="name-text">Ad</label>
                <label for="soyad" id="lastname-text">Soyad</label>
                <label for="eposta" id="eposta-text">Email</label>
                <label for="passwd" id="sifre-text">Şifre</label>
                <!--INPUTS-->
                <div class="nickname">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="nick" id="ad" placeholder="Adınız...">
                </div>

                <div class="lastname">
                    <i class="fa-solid fa-tag"></i>
                    <input type="text" name="lastn" id="soyad" placeholder="Soyadınız...">
                </div>

                <div class="eposta">
                    <i class="fa-solid fa-at"></i>
                    <input type="email" name="eposta" id="eposta" placeholder="Email...">
                </div>

                <div class="sifre">
                    <i class="fa-solid fa-key"></i>
                    <input type="password" id="passwd" name="passwd" placeholder="Şifreniz...">
                    <i class="fa fa-eye parola" onClick="parolaGosterOne('passwd', this)"></i>
                </div>

                <input type="submit" value="Giriş Yap" id="login-btn" name="giris">
                <!--INPUTS-->
            </form>

            <p id="kayit">Hey Dev Akademiye Hoşgeldin! Mevcut bir hesabın yok mu bu çok üzücü :( <a href="register.php">Buradan kayıt sayfasına gidebilirsin</a></p>
        </div>
    </div>

    
    <?php  

    if(isset($_POST['giris'])){

    $ad = trim($_POST['nick']);
    $soyad = trim($_POST['lastn']);
    $email = trim($_POST['eposta']);
    $sifre = md5($_POST['passwd']);


        if( empty($ad) || empty($soyad) || empty($email) || empty($sifre) ){

            echo '<script>Swal.fire("Başarısız","Lütfen tüm alanları doldurunuz","error");</script>';
      
          } else {
      
            if(filter_var($email,FILTER_VALIDATE_EMAIL) == false){
      
              echo '<script>Swal.fire("Başarısız","Lütfen geçerli bir email adresi giriniz","error");</script>';
      
          } else {
              $sorgu = "SELECT * FROM devilmembers WHERE ad = :a && soyad = :s && email = :e && sifre = :sf";
              
              $query= $db -> prepare($sorgu);
              $query-> bindParam(':a', $ad, PDO::PARAM_STR);
              $query-> bindParam(':s', $soyad, PDO::PARAM_STR);
              $query-> bindParam(':e', $email, PDO::PARAM_STR);
              $query-> bindParam(':sf', $sifre, PDO::PARAM_STR);
              $query-> execute();
              $results=$query->fetchAll(PDO::FETCH_OBJ);
      
              //$insert = $db->prepare($sorgu);
              //$insert->execute(array(':a' => $ad , ':s' => $soyad , ':e' => $email , ':sf' => $sifre));
              //$count = $insert -> rowCount();
            
              if($query->rowCount() > 0){
                $_SESSION["ad"] = $ad;  
                //$_SESSION["soyad"] = $soyad;
                // oturum için kullanıcı id değerini tutmamız yeterli. bu id değeri ile diğer bilgilerine ulaşabiliriz. 
                echo '<script>Swal.fire("Başarılı","Girişiniz başarılı bir şekilde sağlandı. Ana Sayfaya Yönlendiriliyorsun!","success");</script>';
                header("Refresh:2; url=index.php");
              }  else  {
                  echo '<script>Swal.fire("Başarısız","Bilgiler Yanlış","error");</script>';
                  exit();
                  
                }
              }
          }
        }
        
    ?> 

</body>
</html>


<!--


<div class="reg-box">
            
        </div>


<img id="soft-back" src="../media/gif/gif-two.gif" alt="BACKGROUND-GIF">

-->

<!--
Kaan Was Here <3 Made By Kaan <3
Devil Was Here <3 Made By Devil <3
-->