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
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--CUSTOM CSS-->
    <link rel="stylesheet" href="../css/pyLesson.css">
    <!--FAVICON-->
    <link rel="shortcut icon" href="../media/src/favicon-32x32.png" type="image/x-icon">
    <!--SWALFIRE-->
    <script src="../js/sweetalert2.all.js"></script>
    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--JS-->
    <script src="../js/main.js"></script>
    <!--TITLE-->
    <title>Python Dersleri</title>
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

          <!---->

    <div class="area">
          <div class="kenarlik">
            <div class="videoArea">

                <div class="lessonOne" id="lessonOne">
                    <iframe class="dersOne" id="dersOne" src="https://www.youtube.com/embed/EzHgbO1Cee4?list=PLWctyKyPphPiul3WbHkniANLqSheBVP3O" title="PYTHON - Kullanım Alanları, Avantajları ve Felsefesi" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

                <div class="lessonTwo" id="lessonTwo">
                    <iframe class="dersTwo" id="dersTwo" src="https://www.youtube.com/embed/k-zK7ltCXCA?list=PLWctyKyPphPiul3WbHkniANLqSheBVP3O" title="Python Dersleri #0 | Anaconda Kurulum" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

                <div class="lessonThree" id="lessonThree">
                    <iframe class="dersThree" id="dersThree" src="https://www.youtube.com/embed/S0d0ma5q-iI?list=PLWctyKyPphPiul3WbHkniANLqSheBVP3O" title="Python Dersleri #1 | Print Komutu ile Ekrana Yazdırma" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

                <div class="lessonFour" id="lessonFour">
                    <iframe class="dersFour" id="dersFour" src="https://www.youtube.com/embed/Uwq-YtI-T60?list=PLWctyKyPphPiul3WbHkniANLqSheBVP3O" title="Python Dersleri #2 | Değişken ve Atama" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

                <div class="lessonFive" id="lessonFive">
                    <iframe class="dersFive" id="dersFive" src="https://www.youtube.com/embed/sJkyGixATl0?list=PLWctyKyPphPiul3WbHkniANLqSheBVP3O" title="Python Dersleri #3 | Veri Tipleri ve Sayı Tipleri (Integer ve Float)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

                <div class="lessonSix" id="lessonSix">
                    <iframe class="dersSix" id="dersSix" src="https://www.youtube.com/embed/dpyWdDf0Js4?list=PLWctyKyPphPiul3WbHkniANLqSheBVP3O" title="Python Dersleri #4 | Yazı Veri Tipleri (String ve Char)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

            </div>
          </div>

          <div class="panel">
            <ul>
              <li><a class="dOne" onclick="devilOne()">Python Ders Bir</a></li>
              <li><a class="dTwo" onclick="devilTwo()">Python Ders İki</a></li>
              <li><a class="dThree" onclick="devilThree()">Python Ders Üç</a></li>
              <li><a class="dFour" onclick="devilFour()">Python Ders Dört</a></li>
              <li><a class="dFive" onclick="devilFive()">Python Ders Beş</a></li>
              <li><a class="dSix" onclick="devilSix()">Python Ders Altı</a></li>
            </ul>
          </div>

          <div class="ozetKenarlik">
                  <h1>Python Ufak Ders Notları</h1>

                  <p id="icerik">
                  Yazılım geliştirme süreci şu şekilde işler;
 Programcı programlama dili kullanarak kodları
oluşturur,
 Yazılan kod bütünü, hata ayıklayıcı (debugger)
kullanılarak hatalara karşı denetlenir,
 Hataları giderilmiş kodlar, derleyici (compiler)
kullanılarak bilgisayarın yorumlayabileceği
elektriksel sinyallere dönüştürülür. Bu süreç
sonunda bilgisayar, elektriksel sinyalleri
yorumlayarak komutların gereğini yapar.
Yazılım, bilgisayarın donanımını anlamlı hale getiren,
bilgisayarları kullanıcıların amaçları doğrultusunda
kullanmasını sağlayan kod ve komutlardır.
Yapılacak bir işlemi ya da hesaplamayı gerçekleştirmek için
birbirini izleyen komut veya yönergelerden oluşan yapılardır.
Yazılım Geliştirme Süreci:
 Kullanıcı programı çalıştırdığında, yorumlayıcı
programlar, Python kodunu makine koduna çevirir.
 Üst düzey program kodu kaynak kod (source code)
olarak adlandırılır. Bu koda karşılık gelen makine diline
ise hedef kod (target code) adı verilir. Yorumlayıcı,
kaynak kodu hedef koda dönüştürür.
 Üst düzey programların güzelliği, kodlamanın
donanımdan bağımsız olarak yapılabilmesidir. Üstünde
çalışılan platform ne olursa olsun, Python yorumlayıcısı
kurulu ise tüm programlar tüm platformlarda
çalıştırılabilir.
Editörler, programcının kaynak kodu yazmasını ve dosyaya
kaydetmesini sağlar. Dili oluşturan parçaların kurallara uygun
bir şekilde düzenlenmesi söz dizimi (syntax) olarak ifade
edilir. Derleyiciler, kaynak kod içeriğini dönüştürerek hedef
kod içeren bir dosya oluşturur. Derlenerek oluşturulan
popüler dillere örnek olarak C, C++, Java ve C# verilebilir.
Yorumlayıcılar da derleyiciler gibi üst düzey kaynak kodu
hedef koda (genellikle makine kodu) çevirir ancak
derleyicilerden farklı çalışır.

                  </p>
          </div>
    </div>

          <!---->

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