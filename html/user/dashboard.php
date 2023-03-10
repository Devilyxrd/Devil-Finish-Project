<?php
      session_start();
      require_once 'connect.php';
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
    <link rel="stylesheet" href="./general/main.css">
    <!--FAVICON-->
    <link rel="shortcut icon" href="./general/favicon-32x32.png" type="image/x-icon">
    <!--SWALFIRE-->
    <script src="sweetalert2.all.js"></script>
    <!--TITLE-->
    <title>Kullanıcı Anasayfası</title>
</head>
<body>
  <div class="anakutu">

    <div class="nav">
      <div class="logo"><a href="index.html"><img src="./general/logo.png" alt="LOGO"></a></div>
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
            <a href="dashboard.php">Hesap Bilgileri</a>
            <a href="logout.php">Çıkış Yap</a>
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
        <p id="caption">Dev Academy Pass Reset</p>

        <form action="dashboard.php" method="post" autocomplete="off">
          <div class="mevcutSifre">
          <label for="mevcutS" id="labelMS">Mevcut Şifre</label>
              <div class="mevcutsifreKenar">
                <input type="text" name="mevcutS" id="devilMevcutSifre">
              </div>
          </div>

          <div class="yeniSifre">
          <label for="yeniS" id="labelYS">Yeni Şifre</label>
              <div class="yenisifreKenar">
                <input type="text" name="yeniS" id="devilYeniSifre">
              </div>
          </div>

          <div class="yenisifreTekrar">
          <label for="yeniST" id="labelYST">Yeni Şifre Tekrar</label>
              <div class="yenisifretekrarKenar">
                <input type="text" name="yeniST" id="devilYeniSifreTekrar">
              </div>
          </div>

          <input type="submit" value="Kaydet" id="reg" name="kaydet">
        </form>
      </div>

    </div>
    <?php
      }
    } else {
      header("Refresh:1 , url = /Devil-Bitirme-Projesi/html/login.php");
    }
    ?>


    <div class="footer">
      <div class="foto">
        <a href="/Devil-Bitirme-Projesi/html/index.php"><img src="./general/logo.png" alt="LOGO"></a>
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
    if(isset($_POST['kaydet'])){
      $mevcutSifre = md5($_POST['mevcutS']);
      $yeniSifre = trim($_POST['yeniS']);
      $yeniSifreTekrar = trim($_POST['yeniST']);

      $mdliSifre = md5($yeniSifre);

      if( empty($mevcutSifre) || empty($yeniSifre) || empty($yeniSifreTekrar) ){

        echo '<script>Swal.fire("Başarısız","Lütfen tüm alanları doldurunuz","error");</script>';

      } else {
        if($devRow['sifre'] != $mevcutSifre){
          echo '<script>Swal.fire("Başarısız","Mevcut Şifreler Uyuşmuyor","error");</script>';
        } else if($yeniSifre != $yeniSifreTekrar){
          echo '<script>Swal.fire("Başarısız","Yeni Şifreniz ve Tekrarı Uyuşmuyor","error");</script>';
        } else {
          $sql = 'UPDATE devilmembers SET sifre = ? WHERE id = ' . $devRow['id'];
          $result = $db -> prepare($sql);
          $result -> execute([$mdliSifre]);

          echo '<script>Swal.fire("Başarılı","Şifreniz Başarıyla Değiştirildi","success");</script>';
        }
      }
    }
?>