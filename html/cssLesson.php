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
    <link rel="stylesheet" href="../css/cssLesson.css">
    <!--FAVICON-->
    <link rel="shortcut icon" href="../media/src/favicon-32x32.png" type="image/x-icon">
    <!--SWALFIRE-->
    <script src="../js/sweetalert2.all.js"></script>
    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--JS-->
    <script src="../js/main.js"></script>
    <!--TITLE-->
    <title>Css Dersleri</title>
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
                    <iframe class="dersOne" id="dersOne" src="https://www.youtube.com/embed/I_1jup4KE-s?list=PLXuv2PShkuHx5OI3uWEJ7jwTG2_YTuz7u" title="1-Css Dersleri-Css Nedir ve Neden Kullanılır?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

                <div class="lessonTwo" id="lessonTwo">
                    <iframe class="dersTwo" id="dersTwo" src="https://www.youtube.com/embed/tQx3Yll3JLM?list=PLXuv2PShkuHx5OI3uWEJ7jwTG2_YTuz7u" title="2-Css Dersleri-Css Nasıl Yazılır?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

                <div class="lessonThree" id="lessonThree">
                    <iframe class="dersThree" id="dersThree" src="https://www.youtube.com/embed/WtLrpB99_Vk?list=PLXuv2PShkuHx5OI3uWEJ7jwTG2_YTuz7u" title="3-Css Dersleri-Internal Css" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

                <div class="lessonFour" id="lessonFour">
                    <iframe class="dersFour" id="dersFour" src="https://www.youtube.com/embed/BKmjWObI-u0?list=PLXuv2PShkuHx5OI3uWEJ7jwTG2_YTuz7u" title="4-Css Dersleri-Inline Css" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

                <div class="lessonFive" id="lessonFive">
                    <iframe class="dersFive" id="dersFive" src="https://www.youtube.com/embed/AjOO7n12hZA?list=PLXuv2PShkuHx5OI3uWEJ7jwTG2_YTuz7u" title="5-Css Dersleri-External Css" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

                <div class="lessonSix" id="lessonSix">
                    <iframe class="dersSix" id="dersSix" src="https://www.youtube.com/embed/veyPQ87aGvE?list=PLXuv2PShkuHx5OI3uWEJ7jwTG2_YTuz7u" title="6-Css Dersleri-Css Uygulama-Todo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

            </div>
          </div>

          <div class="panel">
            <ul>
              <li><a class="dOne" onclick="devilOne()">Css Ders Bir</a></li>
              <li><a class="dTwo" onclick="devilTwo()">Css Ders İki</a></li>
              <li><a class="dThree" onclick="devilThree()">Css Ders Üç</a></li>
              <li><a class="dFour" onclick="devilFour()">Css Ders Dört</a></li>
              <li><a class="dFive" onclick="devilFive()">Css Ders Beş</a></li>
              <li><a class="dSix" onclick="devilSix()">Css Ders Altı</a></li>
            </ul>
          </div>

          <div class="ozetKenarlik">
                  <h1>Css Ufak Ders Notları</h1>

                  <p id="icerik">
                  CSS, Basamaklı Stil Sayfalarının kısaltmasıdır. HTML öğelerinin web sayfasında nasıl görüntüleneceğini açıklar.
Birden fazla web sayfasının düzenini aynı anda kontrol edebilir. Tüm sitenin stil sayfaları harici dosyalarda
tutulabilir.
CSS, web sayfalarımızın tasarım düzenini oluşturan ve farklı cihaz ve ekranalarda görünümlerini ayarlayan önemli
bir araçtır.
HTML, ilk başlarda bir web sayfasının içeriğini tanımlamak için oluşturulmuştur. Oysa bu sayfanın biçimine ve
görünümün tarz katmak için oluşturulmamıştır. örneğin: aşağıdaki iki yazıdan birisinin başlık, diğerinin paragraf
olduğu vurgulanmıştır. Fakat bunların tarzı için (renk, font büyüklüğü vs) bir bilgi içermez.
Daha sonraki versiyonlarında yazılara renk ve büyüklük gibi bir takım özellikler eklemek içn <font> etiketi
kullanılmıştır fakat böyle bir uygulama bütün web sayfalarında her bir eleman için tek tek stil eklenmesi büyük bir
kabus oluşturmuştur. Bunu önlemek için World Wide Web konsorsiyomu CSS tekniğini geliştirerek HTML
sayfalarından bu işlemi kaldırmıştır. Buna göre aşağıdaki iki bilgilerin eklenmesi ile bu satırlar istenildiği şekilde stil
verilmiş olmaktadır.
h1 {
 color: white;
 text-align: center;
}
p {
 font-family: verdana;
 font-size: 20px;
}

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