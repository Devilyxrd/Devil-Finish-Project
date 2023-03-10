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
    <link rel="stylesheet" href="../css/main.css">
    <!--FAVICON-->
    <link rel="shortcut icon" href="../media/src/favicon-32x32.png" type="image/x-icon">
    <!--SWALFIRE-->
    <script src="../js/sweetalert2.all.js"></script>
    <!--TITLE-->
    <title>Anasayfa</title>
</head>
<body>
  <div class="anakutu">

    <div class="nav">
      <div class="logo"><a href="index.php"><img src="../media/src/logo.png" alt="LOGO"></a></div>
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
          <li><a href="index.php">Anasayfa</a></li>
          <li><a href="contact.php">İletişim</a></li>
          
          <div class="dropdownTwo">
            <li><a href="#">Dersler</a></li>
            <div class="dropdown-content-two">
            <a href="htmlLesson.php">Html</a>
            <a href="cssLesson.php">Css</a>
            <a href="jsLesson.php">Js</a>
            <a href="pyLesson.php">Python</a>
            <a href="csharpLesson.php">C#</a>
            <a href="cplusLesson.php">C++</a>
            </div>
          </div>

          <div class="dropdown">
            <li><a href="#"><?= $devilRow['ad'] . " " . $devilRow['soyad'] ?></a></li>
            <div class="dropdown-content">
            <a href="user/dashboard.php">Hesap Bilgileri</a>
            <a href="user/logout.php">Çıkış Yap</a>
            </div>
          </div>
          <?php
            }  
          } else {
              //echo '<script>Swal.fire("Başarısız","Veri Alınamadı", "error");</script>';
              header("Refresh:1, url = login.php");
          }
          ?>
      </ul>
    </div>

    <!--KESİK-->
    
    <div class="sliderArea">
        <p id="caption">Welcome To The DevAcademy</p>
          <div class="slider">
            <div class="slider-content">
              <div class="slider-item">
                <img src="../media/src/one.jpg" alt="IMAGE ONE">
              </div>

              <div class="slider-item">
                <img src="../media/src/two.png" alt="IMAGE TWO">
              </div>

              <div class="slider-item">
                <img src="../media/src/three.jpg" alt="IMAGE THREE">
              </div>

              <div class="slider-item">
                <img src="../media/src/four.jpg" alt="IMAGE FOUR">
              </div>

              <div class="slider-item">
                <img src="../media/src/five.png" alt="IMAGE FİVE">
              </div>
            </div>
          </div>
    </div>
    

    <div class="cardsArea">
      <div class="area">
        <!---->
        <div class="areaOne" id="areaOne">
          <!---->
          <div class="cardOne" id="cardOne" onmouseover="divOneYukari()" onmouseleave="divOneAsagi()">
            <div class="imgOne">
              <a href="htmlLesson.php"><img src="../media/src/html.png" alt="HTML"></a>
              <p id="htmlText">DevAcademy ücretsiz html eğitim paketine hoşgeldiniz. Eğitimleri görmek için resme tıklayabilirsiniz. İyi dersler! by Devil <3</p>
            </div>
          </div>
          <!---->
          <div class="cardTwo" id="cardTwo" onmouseover="divTwoYukari()" onmouseleave="divTwoAsagi()">
            <div class="imgTwo">
              <a href="cssLesson.php"><img src="../media/src/css.png" alt="CSS"></a>
              <p id="cssText">DevAcademy ücretsiz css eğitim paketine hoşgeldiniz. Eğitimleri görmek için resme tıklayabilirsiniz. İyi dersler! by Devil <3</p>
            </div>
          </div>
          <!---->
          <div class="cardThree" id="cardThree" onmouseover="divThreeYukari()" onmouseleave="divThreeAsagi()">
            <div class="imgThree">
              <a href="jsLesson.php"><img src="../media/src/js.png" alt="JS"></a>
              <p id="jsText">DevAcademy ücretsiz js eğitim paketine hoşgeldiniz. Eğitimleri görmek için resme tıklayabilirsiniz. İyi dersler! by Devil <3</p>
            </div>
          </div>
          <!---->
        </div>
        <!----------------------------------------------------------------------------------->
        <div class="areaTwo">
          <div class="cardFour" id="cardFour" onmouseover="divFourYukari()" onmouseleave="divFourAsagi()">
            <div class="imgFour">
              <a href="pyLesson.php"><img src="../media/src/py.png" alt="PY"></a>
              <p id="pyText">DevAcademy ücretsiz py eğitim paketine hoşgeldiniz. Eğitimleri görmek için resme tıklayabilirsiniz. İyi dersler! by Devil <3</p>
            </div>
          </div>
          <!---->
          <div class="cardFive" id="cardFive" onmouseover="divFiveYukari()" onmouseleave="divFiveAsagi()">
            <div class="imgFive">
              <a href="chasrpLesson.php"><img src="../media/src/csharp.png" alt="CSHARP"></a>
              <p id="csharpText">DevAcademy ücretsiz c# eğitim paketine hoşgeldiniz. Eğitimleri görmek için resme tıklayabilirsiniz. İyi dersler! by Devil <3</p>
            </div>
          </div>
          <!---->
          <div class="cardSix" id="cardSix" onmouseover="divSixYukari()" onmouseleave="divSixAsagi()">
            <div class="imgSix">
              <a href="cplusLesson.php"><img src="../media/src/cplus.png" alt="CPLUS"></a>
              <p id="cplusText">DevAcademy ücretsiz c++ eğitim paketine hoşgeldiniz. Eğitimleri görmek için resme tıklayabilirsiniz. İyi dersler! by Devil <3</p>
            </div>
          </div>
        </div>
        <!---->
      </div>
    </div>


    <div class="footer">
      <div class="foto">
        <a href="index.php"><img src="../media/src/logo.png" alt="LOGO"></a>
      </div>

      <div class="menu">
        <ul>
          <li><a href="index.php">Anasayfa</a></li>
          <li><a href="contact.php">İletişim</a></li>
          <li><a href="#areaOne">Dersler</a></li>
          <li><a href="user/dashboard.php"><?= $devilRow['ad'] . " " . $devilRow['soyad']?></a></li>
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
/*      if(isset($_SESSION['ad'])){
        $sorgu = "SELECT * FROM devilmembers WHERE ad = :a";  
        $query= $db -> prepare($sorgu);
        $query-> bindParam(':a', $_SESSION['ad'] , PDO::PARAM_STR);
        $query -> execute();
        //$results = $query->fetchAll(PDO::FETCH_OBJ);
          
        while ($cikti = $query->fetch(PDO::FETCH_ASSOC)) {
          echo "Adı: " . $cikti["ad"] . "<br /> Soyadı: " . $cikti["soyad"] . "<br /> E-posta: " . $cikti["email"];
        }
        } else {
          header("Refresh:1; url=login.php");
        }
*/
?>

<!--
Kaan Was Here <3 Made By Kaan <3
Devil Was Here <3 Made By Devil <3
-->