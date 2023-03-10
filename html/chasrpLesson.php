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
    <link rel="stylesheet" href="../css/chasrpLesson.css">
    <!--FAVICON-->
    <link rel="shortcut icon" href="../media/src/favicon-32x32.png" type="image/x-icon">
    <!--SWALFIRE-->
    <script src="../js/sweetalert2.all.js"></script>
    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--JS-->
    <script src="../js/main.js"></script>
    <!--TITLE-->
    <title>C# Dersleri</title>
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
                    <iframe class="dersOne" id="dersOne" src="https://www.youtube.com/embed/RJ-4hIXK-Ms?list=PLURN6mxdcwL960S-bRuf1F6K09yzNjgcn" title="1- C# Dersleri Visual Studio 2019 Kurulumu | İndirme | Yükleme" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

                <div class="lessonTwo" id="lessonTwo">
                    <iframe class="dersTwo" id="dersTwo" src="https://www.youtube.com/embed/mHQELX88Xg0?list=PLURN6mxdcwL960S-bRuf1F6K09yzNjgcn" title="2- C# Dersleri Visual Studio Arayüz Tanıtımı" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

                <div class="lessonThree" id="lessonThree">
                    <iframe class="dersThree" id="dersThree" src="https://www.youtube.com/embed/81-SqSllub4?list=PLURN6mxdcwL960S-bRuf1F6K09yzNjgcn" title="3- C# Dersleri Hello World Yazdırma ve Yorum Satırı Kullanımı | Merhaba Dünya" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

                <div class="lessonFour" id="lessonFour">
                    <iframe class="dersFour" id="dersFour" src="https://www.youtube.com/embed/Lo_YFtD0qJ0?list=PLURN6mxdcwL960S-bRuf1F6K09yzNjgcn" title="4- C# Dersleri Veri Tiplerine Giriş | Data Types" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

                <div class="lessonFive" id="lessonFive">
                    <iframe class="dersFive" id="dersFive" src="https://www.youtube.com/embed/cjNTYgvUWQ0?list=PLURN6mxdcwL960S-bRuf1F6K09yzNjgcn" title="5- C# Dersleri Byte Veri Tipi Nedir , Nasıl Kullanılır ? | VERİ TİPLERİ | DATA TYPES" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

                <div class="lessonSix" id="lessonSix">
                    <iframe class="dersSix" id="dersSix" src="https://www.youtube.com/embed/q1C74CeRKVI?list=PLURN6mxdcwL960S-bRuf1F6K09yzNjgcn" title="6-  C# Dersleri Short Veri Tipi Nedir , Nasıl Kullanılır ? | VERİ TİPLERİ | DATA TYPES" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

            </div>
          </div>

          <div class="panel">
            <ul>
              <li><a class="dOne" onclick="devilOne()">C# Ders Bir</a></li>
              <li><a class="dTwo" onclick="devilTwo()">C# Ders İki</a></li>
              <li><a class="dThree" onclick="devilThree()">C# Ders Üç</a></li>
              <li><a class="dFour" onclick="devilFour()">C# Ders Dört</a></li>
              <li><a class="dFive" onclick="devilFive()">C# Ders Beş</a></li>
              <li><a class="dSix" onclick="devilSix()">C# Ders Altı</a></li>
            </ul>
          </div>

          <div class="ozetKenarlik">
                  <h1>C# Ufak Ders Notları</h1>

                  <p id="icerik">
                  C# programlama dili, Microsoft yazılım şirketi tarafından geliştirilen bir programlama dilidir.

 

Genellikle Visual Studio programıyla, C# programlama diliyle program geliştirilir.

 

Değişkenler ve Sabitler:

 

Değişkenler:

 

Değişken nedir?

 

Değişken, çeşitli veri türlerinde(metin, sayı, tarih vs.) veri saklayabileceğimiz ve bellekte belirli bir yer kaplayan, yardımcıdır.

 

Değişkenler sayesinde veri aktarımı yapıyoruz.

 

Değişkenler, bir programlama dilinde çok büyük bir öneme sahiptir.

 

Değişken mantığını anlayamamamız, programlamanın %50'lik bir kısmını eksik bırakmamız anlamına gelmektedir.

 

veri türü değişken adı;

 

Değişken tanımlamasının yapısı yukarıdaki gibidir.

 

int i;

 

Değişken tanımlaması yukarıdaki gibidir.

 

int i ifadesiyle, integer(tam sayı) türünde adı i olan bir değişken tanımladık. Bu değişken bellekte 4 byte'lık bir alan kaplayacaktır.

 

int i;

i = 10;

 

Yukarıdaki i değişkenine, tanımladıktan sonra değer atadık.

 

int i = 10;

bool dogrumu = false;
double yuzde = 98.32, ortalama = 35.32;
char karakter = 'A';
 

İstersek yukarıdaki gibi tanımlarken de değer atayabiliriz.

 

Değişkenleri kullanmak:

 

Değişkenlerin değerlerini atadıktan sonra kullanabiliriz.

int i = 10;Console.WriteLine(i);
Yukarıdaki gibi değişkenimizi yazdırabiliriz.

 

Yukarıda programın çıktısı 10 olacaktır.

 

Veri tipleri:

 

C# programlama dilinde birçok veri türü mevcuttur. Ve bu veri tipleri kapasiteleri farklıdır.

 

Veri tipleri ikiye ayrılır.

 

1- Değer tipleri,

2- Referans tipleri

 


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