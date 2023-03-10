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
    <link rel="stylesheet" href="../css/jsLesson.css">
    <!--FAVICON-->
    <link rel="shortcut icon" href="../media/src/favicon-32x32.png" type="image/x-icon">
    <!--SWALFIRE-->
    <script src="../js/sweetalert2.all.js"></script>
    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--JS-->
    <script src="../js/main.js"></script>
    <!--TITLE-->
    <title>JavaScript Dersleri</title>
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
                    <iframe class="dersOne" id="dersOne" src="https://www.youtube.com/embed/mcwBvvThO40?list=PLURN6mxdcwL86Q8tCF1Ef6G6rN2jAg5Ht" title="1) JavaScript Nedir ?  | Yeni Seri | JAVASCRIPT Dersleri" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

                <div class="lessonTwo" id="lessonTwo">
                    <iframe class="dersTwo" id="dersTwo" src="https://www.youtube.com/embed/TLFsVu1GXzg?list=PLURN6mxdcwL86Q8tCF1Ef6G6rN2jAg5Ht" title="2) JavaScript Eklentilerin Kurulması | JAVASCRIPT Dersleri" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

                <div class="lessonThree" id="lessonThree">
                    <iframe class="dersThree" id="dersThree" src="https://www.youtube.com/embed/v8wh2RI1axk?list=PLURN6mxdcwL86Q8tCF1Ef6G6rN2jAg5Ht" title="3) HTML Sayfasına Javascript Ekleme | JAVASCRIPT Dersleri" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

                <div class="lessonFour" id="lessonFour">
                    <iframe class="dersFour" id="dersFour" src="https://www.youtube.com/embed/XE99VjmiHLM?list=PLURN6mxdcwL86Q8tCF1Ef6G6rN2jAg5Ht" title="4) Çıktı Alma Metotları | document.write() | console.log() | alert()  | JAVASCRIPT Dersleri" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

                <div class="lessonFive" id="lessonFive">
                    <iframe class="dersFive" id="dersFive" src="https://www.youtube.com/embed/EEw5DFMU_PM?list=PLURN6mxdcwL86Q8tCF1Ef6G6rN2jAg5Ht" title="5) Window ve Document Nesnesi | JAVASCRIPT Dersleri" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

                <div class="lessonSix" id="lessonSix">
                    <iframe class="dersSix" id="dersSix" src="https://www.youtube.com/embed/g2iV5yNXg8A?list=PLURN6mxdcwL86Q8tCF1Ef6G6rN2jAg5Ht" title="6) Geliştirme Aracı Nedir ¿  | JAVASCRİPT Dersleri" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

            </div>
          </div>

          <div class="panel">
            <ul>
              <li><a class="dOne" onclick="devilOne()">Js Ders Bir</a></li>
              <li><a class="dTwo" onclick="devilTwo()">Js Ders İki</a></li>
              <li><a class="dThree" onclick="devilThree()">Js Ders Üç</a></li>
              <li><a class="dFour" onclick="devilFour()">Js Ders Dört</a></li>
              <li><a class="dFive" onclick="devilFive()">Js Ders Beş</a></li>
              <li><a class="dSix" onclick="devilSix()">Js Ders Altı</a></li>
            </ul>
          </div>

          <div class="ozetKenarlik">
                  <h1>Js Ufak Ders Notları</h1>

                  <p id="icerik">
                  Kısaca Javascriptden bahsetmek gerekirse web dünyası adına arayüz programlamada sıklıkla kullandığımız bi script dili günümüzde arayüz geliştirme mobil uygulama geliştirme , oyun programlama , sunucu taraflı uygulama geliştirme gibi bir çok konuda kullanabildiğimiz adeta bir joker kartı diyebiliriz.Ne kadar doğrudur bilinmez fakat “Sadece Javascript öğrenerek istediğiniz her işi uçtan uca yapabilecek yeteneğe sahip olabilirsiniz.”

Ön yüz geliştirmede sıklıkla kullanıldığına biraz önce değinmiştim.Bu konulara aşina olan birçok kişinin de bildiği üzere ön yüz geliştirmede oldukça popüler olan React , Angular , Vue gibi güçlü frameworkler ve sayısız kütüphane Javascript üzerine kurulmuştur.Hal böyle olunca Web geliştirmede javascript vazgeçilmez olmuş durumdadır.

Profesyonel dünyaya bakacak olursak aslında javascript diye bir kavram yoktur . Daha çok EcmaScript , TypeScript , CoffeeScript isimlerini duyacaksınızdır.Her birinin farklı yazım metotları bulunur ve birbirlerine fazla benzemezler.Ama sonuç olarak her biri Javascript temelinden gelmektedir.

Bu seri Javascript dilinin temel özelliklerinden başlayacak ve hemen hemen tüm özelliklere değinilmeye çalışılacaktır.Daha sonra EcmaScript ve TypeScript ile başka yazılarda devam etmeyi umuyorum.
Neden Javascript?

Öğrenimi kolay.

Kurulum gerektirmez.

Web tarayıcılarında yerleşik olarak bulunur.

Her alanda kullanılabilir.

Mesela :

Node.js ile sunucu tarafında

Cordova veya React Native ile mobil uygulamalarda

Electron ile masaüstü uygulamalar,IoT,Robotik , Virtual Reality de

Evrensel bir dildir.

Web dünyasının ana dili gibidir.

NPM paketleri 30.000 den fazladır.


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