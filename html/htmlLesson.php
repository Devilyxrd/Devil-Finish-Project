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
    <link rel="stylesheet" href="../css/htmlLesson.css">
    <!--FAVICON-->
    <link rel="shortcut icon" href="../media/src/favicon-32x32.png" type="image/x-icon">
    <!--SWALFIRE-->
    <script src="../js/sweetalert2.all.js"></script>
    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--JS-->
    <script src="../js/main.js"></script>
    <!--TITLE-->
    <title>Html Dersleri</title>
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
                  <iframe class="dersOne" id="dersOne" src="https://www.youtube.com/embed/Y86zzWRle3g?list=PLURN6mxdcwL_dk2ftGRrvt4R2TqfIUysy" title="1-Web Geliştirme Eğitim Müfredatı | HTML | CSS | BOOTSTRAP | JAVASCRİPT | JQUERY|" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

                <div class="lessonTwo" id="lessonTwo">
                  <iframe class="dersTwo" id="dersTwo" src="https://www.youtube.com/embed/uHEr6d6EftA?list=PLURN6mxdcwL_dk2ftGRrvt4R2TqfIUysy" title="2- Frontend - Backend Kavramları | Html | Css | Bootstrap | Javascript | JQuery" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

                <div class="lessonThree" id="lessonThree">
                  <iframe class="dersThree" id="dersThree" src="https://www.youtube.com/embed/lAAVIv8vJAI?list=PLURN6mxdcwL_dk2ftGRrvt4R2TqfIUysy" title="3 - Visual Studio Code Kurulumu | HTML Dersleri" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

                <div class="lessonFour" id="lessonFour">
                  <iframe class="dersFour" id="dersFour" src="https://www.youtube.com/embed/DXrXndBfBzo?list=PLURN6mxdcwL_dk2ftGRrvt4R2TqfIUysy" title="4-Meta Etiketlerini Tanıyalım | HTML Dersleri" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

                <div class="lessonFive" id="lessonFive">
                  <iframe class="dersFive" id="dersFive" src="https://www.youtube.com/embed/CbW_7zIwotE?list=PLURN6mxdcwL_dk2ftGRrvt4R2TqfIUysy" title="5 - Yorum Satırı Nedir , Nasıl Kullanılır | HTML Dersleri" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

                <div class="lessonSix" id="lessonSix">
                  <iframe class="dersSix" id="dersSix" src="https://www.youtube.com/embed/je5BxZz8bcY?list=PLURN6mxdcwL_dk2ftGRrvt4R2TqfIUysy" title="6 - Visual Studio Code Kısayolları | HTML Dersleri | Shortcuts" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

            </div>
          </div>

          <div class="panel">
            <ul>
              <li><a class="dOne" onclick="devilOne()">Html Ders Bir</a></li>
              <li><a class="dTwo" onclick="devilTwo()">Html Ders İki</a></li>
              <li><a class="dThree" onclick="devilThree()">Html Ders Üç</a></li>
              <li><a class="dFour" onclick="devilFour()">Html Ders Dört</a></li>
              <li><a class="dFive" onclick="devilFive()">Html Ders Beş</a></li>
              <li><a class="dSix" onclick="devilSix()">Html Ders Altı</a></li>
            </ul>
          </div>

          <div class="ozetKenarlik">
                  <h1>Html Ufak Ders Notları</h1>

                  <p id="icerik">
                  HTML nedir?
HTML'in açılımı Hyper Text Markup Language’dir.
Türkçesi ise "Yüksek Metin İşaretleme Dili" dir.
HTLM etiketleri ile web sayfaları tasarlayabiliriz.
Bir HTML dosyasının uzantısı htm veya html olmak zorundadır.
Html zamanla gelişerek en son sürümü olan Html5 teknolojisine ulaşmıştır.
HTML yazma işini bizim yerimize yapan programlar (Frontpage, Dreamweaver, Namo vb.)’ da vardır.
Ancak dersimizde biz bu programları kullanmayacağız.
Web sitemizi nasıl yayınlarız?
Alan adı (Domain name) satın alma: Web sitemizi yayınlamadan önce bir alan adı yani domain satın
almalıyız. Bu adresin kullanım hakları daha önceden satın alınmamış olması gerekmektedir. Ör:
www.google.com
Not: Her web adresinin bir ip numarası vardır. IP (Internet Protocol) numarası bilgisayarların iletişim
kurmasını sağlayan standart bir protokoldür. Her bilgisayarın kendine ait özel bir numarası vardır. IP
adresi her biri noktayla ayrılan ve 0 ile 255 arasındaki rakamlardan oluşmuş 4 adet numara setidir.
Örneğin: 192.168.123.254. Bu numaraları akılda tutmak zor olduğundan, alan adı (domain name)
sistemi adını verdiğimiz bir isimlendirme oluşturulmuştur. Siz tarayıcınızın adres çubuğuna
www.meb.gov.tr yazdığınızda, tarayıcınız merkezi bir bilgisayarla iletişim kurarak www.meb.gov.tr
adresinin yerini tuttuğu IP numarasını öğrenecek ve bu IP numaralı bilgisayara bağlanarak istediğiniz
bilgilere erişmenizi sağlayacaktır.
İnternet adreslerinde görülen kısaltmalar şunlardır:
 gov: Hükümet kurumları (government)
 edu: Eğitim kurumları (education)
 org: Ticari olmayan kuruluşlar (organization)
 com: Ticari kuruluşlar (company)
Not: Bunun yanında kullanılan ülke kısaltmaları da vardır. Bazıları; tr:Türkiye, jp:Japonya, uk:İngiltere,
it:İtalya, ch:Isviçre gibi.
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