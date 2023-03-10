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
    <link rel="stylesheet" href="../css/register.css">
    <!--SWEETALERT-->
    <script src="../js/sweetalert2.all.js"></script>
    <!--JS-->
    <script src="../js/main.js"></script>
    <!--FAVICON-->
    <link rel="shortcut icon" href="../media/src/favicon-32x32.png" type="image/x-icon">
    <!--TITLE-->
    <title>Register</title>
</head>
<body>
    <div class="anakutu">
        <div class="background">
            <img id="soft-back" src="../media/gif/gif-two.gif" alt="BACKGROUND-GIF">
        </div>

        <div class="reg-box">
            <img src="../media/src/logo.png" alt="LOGO" id="logo">
            <h3 id="caption">DevAkademi'ye Hoşgeldiniz</h3>
            <form action="register.php" method="post" class="reg-form" autocomplete="off">
                <!--LABEL-->
                <label for="ad" id="name-text">Ad</label>
                <label for="soyad" id="lastname-text">Soyad</label>
                <label for="eposta" id="eposta-text">Email</label>
                <label for="passwd" id="sifre-text">Şifre</label>
                <label for="passwd-again" id="sifreagain-text">Şifre Tekrar</label>
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

                <div class="sifre-tekrar">
                    <i class="fa-solid fa-shield-halved"></i>
                    <input type="password" name="pass-again" id="passwd-again" placeholder="Şifre Tekrar...">
                    <i class="fa fa-eye parola" onClick="parolaGosterTwo('passwd-again', this)"></i>
                </div>

                <input onclick="formkontrol()" type="submit" value="Kayıt Ol" id="reg-btn" name="kayitol">
                <!--INPUTS-->
            </form>

            <p id="giris">Hey Dev Akademiye Hoşgeldin! Mevcut bir hesabın mı var bu harika! <a href="login.php">Buradan giriş sayfasına gidebilirsin</a></p>
        </div>
    </div>

    <?php 
    
    if(isset($_POST['kayitol'])){

        $ad = trim($_POST['nick']);
        $soyad = trim($_POST['lastn']);
        $email = trim($_POST['eposta']);
        $sifre = trim($_POST['passwd']);
        $vTarih = date("Y-m-d h:i:s");
        $sifretekrar = trim($_POST['pass-again']);
        $sifrele = md5($sifre);
        

        $kontrol = $db->prepare('SELECT * FROM devilmembers WHERE email = :em');
        $kontrol -> execute(array(':em' => $email));
        $gelen = $kontrol->fetch(PDO::FETCH_ASSOC);

        if( empty($ad) || empty($soyad) || empty($email) || empty($sifre) || empty($sifretekrar) ){

          echo '<script>Swal.fire("Başarısız","Lütfen tüm alanları doldurunuz","error");</script>';

        } else {

          if(filter_var($email,FILTER_VALIDATE_EMAIL) == false){

            echo '<script>Swal.fire("Başarısız","Lütfen geçerli bir email adresi giriniz","error");</script>';

          } else if (!empty($gelen['email'])){

            echo '<script>Swal.fire("Başarısız","Girdiğiniz eposta adresi zaten kullanılıyor","error");</script>';

          } else if ($sifre != $sifretekrar){

            echo '<script>Swal.fire("Başarısız","Şifreler uyuşmuyor","error");</script>';

          } else {
            $insert = $db->prepare("INSERT INTO devilmembers SET
              ad=?,
              soyad=?,
              email=?,
              sifre=?,
              kTarih=?");
              $insert->execute([$ad,$soyad,$email,$sifrele,$vTarih]);

              if($db->lastInsertId()){
                echo '<script>Swal.fire("Başarılı","Kaydınız başarılı bir şekilde oluşturuldu. Giriş Sayfasına Yönlendiriliyorsun!","success");</script>';
                header("Refresh:2; url = login.php");
              }  else{

                  echo '<script>Swal.fire("Başarısız","Bilinmeyen bir hata oluştu!","error");</script>';
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