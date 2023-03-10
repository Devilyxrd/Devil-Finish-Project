<?php
      session_start();
      require_once '../php/connect.php';
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
    <!--JS-->
    <script src="../js/main.js"></script>
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--CUSTOM CSS-->
    <link rel="stylesheet" href="../css/contact.css">
    <!--FAVICON-->
    <link rel="shortcut icon" href="../media/src/favicon-32x32.png" type="image/x-icon">
    <!--SWALFIRE-->
    <script src="../js/sweetalert2.all.js"></script>
    <!--TITLE-->
    <title>İletişim</title>
</head>
<body>
  <div class="anakutu">

    <div class="nav">
      <div class="logo"><a href="index.html"><img src="../media/src/logo.png" alt="LOGO"></a></div>
      <ul id="menu">
          <?php
            if(isset($_SESSION['ad'])){
              //echo '<script>Swal.fire("Başarılı","Veri Alındı", "success");</script>';

              $devilSorgu = 'SELECT * FROM devilmembers WHERE ad = :a';
              $devilQuery = $db -> prepare($devilSorgu);
              $devilQuery -> bindParam(':a' , $_SESSION['ad'] , PDO::PARAM_STR);
              $devilQuery -> execute();
              $devilResult = $devilQuery -> fetchAll(PDO::FETCH_ASSOC);
              
              foreach ($devilResult as $devilRow){
                //echo $devilRow['ad'];
          ?>
          <li><a href="/Devil-Bitirme-Projesi/html/index.php">Anasayfa</a></li>

          <div class="dropdown">
            <li><a href="#"><?= $devilRow['ad'] . " " . $devilRow['soyad'] ?></a></li>
            <div class="dropdown-content">
            <a href="user/dashboard.php">Ayarlar</a>
            <a href="user/logout.php">Çıkış Yap</a>
            </div>
          </div>
          <?php
            }  
          } else {
              //echo '<script>Swal.fire("Başarısız","Veri Alınamadı", "error");</script>';
              header("Refresh:1, url = /Devil-Bitirme-Projesi/html/login.php");
          }
          ?>
      </ul>

    </div>

    
    <?php
      if(isset($_SESSION['ad'])){

        $devSorgu = 'SELECT * FROM devilmembers WHERE ad = :a';
        $devQuery = $db -> prepare($devSorgu);
        $devQuery -> bindParam(':a' , $_SESSION['ad'] , PDO::PARAM_STR);
        $devQuery -> execute();
        $devResult = $devQuery -> fetchAll(PDO::FETCH_ASSOC);

        foreach($devResult as $devRow){
          //echo $devRow['ad'];
        
      
    ?>
    <div class="dash">
      <!--<input type="text" name="ad" id="ad" placeholder="Ad" value=""><br><br>
      /<input type="text" name="soyad" id="soyad" placeholder="Soyad" value=""><br><br>
      <input type="email" name="email" id="email" placeholder="Email" value=""><br><br>
      <input type="text" name="pass" id="pass" placeholder="Şifrenizi Değiştirmek İstiyorsanız Buraya Yeni Şifrenizi Yazınız"><br><br>-->

      <div class="backOne">
          <p id="caption">Dev Academy User Dashbord</p>

          <form action="#">
            <div class="ad">
              <label for="ad" id="labelAd">Ad</label>
              <div class="adKenar">
                <input type="text" name="ad" id="devilAd" value="<?= $devRow['ad'] ?>" disabled>
              </div>
            </div>

            <div class="soyad">
            <label for="soyad" id="labelSoyad">Soyad</label>
              <div class="soyadKenar">
                <input type="text" name="soyad" id="devilSoyad" value="<?= $devRow['soyad'] ?>" disabled>
              </div>
            </div>

            <div class="email">
            <label for="email" id="labelEmail">Email</label>
              <div class="emailKenar">
                <input type="text" name="ad" id="devilEmail" value="<?= $devRow['email'] ?>" disabled>
              </div>
            </div>

            <div class="kTarih">
            <label for="Ktarih" id="labelKTarih">Kayıt Tarihi</label>
              <div class="ktarihKenar">
                <input type="text" name="Ktarih" id="devilKTarih" value="<?= $devRow['kTarih'] ?>" disabled>
              </div>
            </div>
          </form>

      </div>

      <div class="backTwo">
        <p id="caption">Dev Academy Contact</p>

        <form action="contact.php" method="post" autocomplete="off">

            <div class="kenarlik">
                <textarea style="resize:none;" name="message" id="msg" cols="30" rows="10" onkeyup="checkChar()" onkeydown="checkChar()"></textarea>
            </div>

            <script>
                function checkChar() {
                    var allowedChar = 200;
                    var content = document.getElementById("msg");
                    var contLength = content.value.length;

                    if (contLength > allowedChar) {
                        content.value = content.value.substring(0, allowedChar);
                        Swal.fire("Uyarı","200 Karakter Sınırlaması vardır." , "warning");
                    }
                }
            </script>

          <input type="submit" value="Gönder" id="reg" name="msgGonder">
        </form>
      </div>

    </div>
    <?php
      }
    } else {
      header("Refresh:1 , url = login.php");
    }
    ?>

    <div class="footer">
      <div class="foto">
        <a href="/Devil-Bitirme-Projesi/html/index.php"><img src="../media/src/logo.png" alt="LOGO"></a>
      </div>

      <div class="menu">
        <ul>
          <li><a href="/Devil-Bitirme-Projesi/html/index.php">Anasayfa</a></li>
          <li><a href="/Devil-Bitirme-Projesi/html/contact.php">İletişim</a></li>
          <li><a href="/Devil-Bitirme-Projesi/html/index.php#areaOne">Dersler</a></li>
          <li><a href="dashboard.php"><?= $devilRow['ad'] . " " . $devilRow['soyad']?></a></li>
        </ul>
      </div>

      <div class="about">
        DevAcademy tamamen Devil tarafından kodlanıp tasarlanmıştır. İzinsiz paylaşılması ve kullanılması tamamen yasaktır. Sitemizi güvenle kullanıp ihtiyacınız olan tüm derslere ücretsiz şekilde erişebilirsiniz. DevAcademy sevgilerle <3
      </div>
    </div>

  </div>


</body>
</html>

<?php
    if(isset($_POST['msgGonder'])){
      $ad = $devRow['ad'];
      $soyad = $devRow['soyad'];
      $email = $devRow['email'];
      $msg = trim($_POST['message']);

      if( empty($msg) ){

        echo '<script>Swal.fire("Başarısız","Mesaj alanı boş olamaz","warning");</script>';

      } else {
        $insert = $db->prepare("INSERT INTO devilcontact SET
        ad=?,
        soyad=?,
        email=?,
        message=?");
        $insert->execute([$ad,$soyad,$email,$msg]);


        if($db->lastInsertID()){
            echo '<script>Swal.fire("Başarılı","Mesajınız Başarıyla Yetkili Kişilere Ulaştırıldı","success");</script>';
          } else {
            echo '<script>Swal.fire("Başarısız","Bilinmeyen Bir Hata Oluştu Lütfen Tekrar Deneyiniz!","error");</script>';
          }
      }
    }
?>

<!--
Kaan Was Here <3 Made By Kaan <3
Devil Was Here <3 Made By Devil <3
-->