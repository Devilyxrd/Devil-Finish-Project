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
    <link rel="stylesheet" href="../css/cplusLesson.css">
    <!--FAVICON-->
    <link rel="shortcut icon" href="../media/src/favicon-32x32.png" type="image/x-icon">
    <!--SWALFIRE-->
    <script src="../js/sweetalert2.all.js"></script>
    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--JS-->
    <script src="../js/main.js"></script>
    <!--TITLE-->
    <title>C++ Dersleri</title>
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
                    <iframe class="dersOne" id="dersOne" src="https://www.youtube.com/embed/Mal19MxSTCw?list=PLi1BmHvgBkxKNgl_7rZlhX-NmCKKEpqXM" title="C++ Dersleri 1 : Değişkenler | Sıfırdan Visual Studio 2022 C++ Programlama Yazılım Eğitimi #yazılım" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

                <div class="lessonTwo" id="lessonTwo">
                    <iframe class="dersTwo" id="dersTwo" src="https://www.youtube.com/embed/RNm25_JPVHM?list=PLi1BmHvgBkxKNgl_7rZlhX-NmCKKEpqXM" title="C++ Dersleri -2 : Değişkenler | Sıfırdan Visual Studio 2022 C++ Programlama Yazılım Eğitim #yazılım" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

                <div class="lessonThree" id="lessonThree">
                    <iframe class="dersThree" id="dersThree" rc="https://www.youtube.com/embed/WKCpq7KNg4g?list=PLi1BmHvgBkxKNgl_7rZlhX-NmCKKEpqXM" title="C++ Dersleri - 3 : Aritmetik İşlemler- Sıfırdan Visual Studio 2022 C++ Programlama Yazılım Eğitimi" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

                <div class="lessonFour" id="lessonFour">
                    <iframe class="dersFour" id="dersFour" src="https://www.youtube.com/embed/-y573GulTTE?list=PLi1BmHvgBkxKNgl_7rZlhX-NmCKKEpqXM" title="C++ Dersleri - 4 : Kullanıcıdan veri alma | cin cout ile Kullanıcıdan Input Alma | C++ Programlama" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

                <div class="lessonFive" id="lessonFive">
                    <iframe class="dersFive" id="dersFive" src="https://www.youtube.com/embed/J8gZG9VJVBc?list=PLi1BmHvgBkxKNgl_7rZlhX-NmCKKEpqXM" title="C++ Dersleri 5 : C++ Kütüphane Kullanımı include library Sıfırdan Visual Studio 2022 C++ Programlama" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

                <div class="lessonSix" id="lessonSix">
                    <iframe class="dersSix" id="dersSix" src="https://www.youtube.com/embed/kqqvB1oT868?list=PLi1BmHvgBkxKNgl_7rZlhX-NmCKKEpqXM" title="C++ Dersleri : if else Kullanımı Konu Anlatımı | C++ Programlama #yazılımdersleri  Visual C++ 202" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

            </div>
          </div>

          <div class="panel">
            <ul>
              <li><a class="dOne" onclick="devilOne()">C++ Ders Bir</a></li>
              <li><a class="dTwo" onclick="devilTwo()">C++ Ders İki</a></li>
              <li><a class="dThree" onclick="devilThree()">C++ Ders Üç</a></li>
              <li><a class="dFour" onclick="devilFour()">C++ Ders Dört</a></li>
              <li><a class="dFive" onclick="devilFive()">C++ Ders Beş</a></li>
              <li><a class="dSix" onclick="devilSix()">C++ Ders Altı</a></li>
            </ul>
          </div>

          <div class="ozetKenarlik">
                  <h1>C++ Ufak Ders Notları</h1>

                  <p id="icerik">
                  1. Yorum Satırları ( // ve /* .. */ )

Bu satırlar derleyici için hiç şey ifade etmemektedir. Yani bu satırlar derleyici tarafından önemsenmeyecektir. Ancak yorum satırı kullanmak programcının, programı daha kolay anlayabilmesini sağlar. Düşünün bin hatta on bin, satırlık bir uygulama yazdığınızı... Bu programı başka bir programcıya devrettiğiniz zaman o programcı yorum satılarına bakarak programı rahatça anlayabilir ve geliştirebilir.
Unutmayın!
//  ile tek satır yorum yazılırken
 /*  ... */ arasına örnekte olduğu gibi çok satırlı yorum yazılabilir.

2. #include "stdafx.h”

"stdafx.h" programın daha hızlı çalışmasını sağlayan, daha önceden derlenmiş bir kütüphanedir. "stdafx.h" kütüphanesini, include deyimi ile uygulamamıza çağrıyoruz.

3. #include <iostream>

Açılımı In Out Stream, olan iostream kütüphanesini, include deyimi ile uygulamamıza çağırdık.

4. int main() {..}

C++ programlarında illa ki bir main fonksiyonu bulunmaktadır. int main C++'ın ana fonksiyonudur. Tüm C++ programları bu bölümde çalıştırılır.

5. std::cout << "Merhaba Dunya\n";

Açılımı Character Out olan cout ve << ifadeleri ile yazdığımız ifadeyi ekrana yazdırırız.

Unutmadan, yeri gelmişken söyleyelim. cout'un başında illa ki std:: kullanmamıza gerek yok. int main'den önce "using namespace std" kodunu kullanarak. Bunu bir örnekle inceleyelim.

#include “stdafx.h”
#include <iostream>

using namespace std;

int main(){
cout << “Merhaba Dünya! \n”;
system(“Pause”);
return 0;

}
 "\n" ise bir alt satıra geçmemizi sağlıyor.
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