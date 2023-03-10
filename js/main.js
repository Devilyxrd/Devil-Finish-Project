function parolaGosterOne(id, el) {
  let x = document.getElementById(id);
  if (x.type === "password") {
    x.type = "text";
    el.className = 'fa fa-eye-slash parola';
  } else {
    x.type = "password";
    el.className = 'fa fa-eye parola';
  }
}

function parolaGosterTwo(id, el) {
  let x = document.getElementById(id);
  if (x.type === "password") {
    x.type = "text";
    el.className = 'fa fa-eye-slash parola';
  } else {
    x.type = "password";
    el.className = 'fa fa-eye parola';
  }
}

function formkontrol(){

  sifre = document.getElementById('passwd').value;

  var sembol = '*|,:<>[]{}`;()@&$#%!+-"/';

  var sembolvar=false;
  for (var i = 0; i < sifre.length; i++) {
      if (sembol.indexOf(sifre.charAt(i))!=-1){
          sembolvar=true;
      }
    }



    if (sifre.length<6)
        document.getElementById("text").innerHTML = "Şifre 6 karekter veya daha büyük olmalıdır.";

    else if (sifre.search(/[a-z]/) < 0)
        document.getElementById("text").innerHTML = "Şifre en az bir Küçük harf içermelidir.";

    else if (sifre.search(/[A-Z]/) < 0)
        document.getElementById("text").innerHTML = "Şifre en az bir Büyük harf içermelidir.";

    else if (sifre.search(/[0-9]/) < 0)
        document.getElementById("text").innerHTML = "Şifre en az bir rakam içermelidir.";

    else if (sembolvar==false)
        document.getElementById("text").innerHTML = "Şifre en az bir sembol içermelidir.";

    else
        document.getElementById("text").innerHTML = "Şifre uygun";
      
}


/**/

function divOneYukari(){
  document.getElementById('cardOne').style.marginTop = "-20px";
}

function divOneAsagi(){
  document.getElementById('cardOne').style.marginTop = "0px";
}

/* */

function divTwoYukari(){
  document.getElementById('cardTwo').style.marginTop = "-20px";
}

function divTwoAsagi(){
  document.getElementById('cardTwo').style.marginTop = "0px";
}

/* */

function divThreeYukari(){
  document.getElementById('cardThree').style.marginTop = "-20px";
}

function divThreeAsagi(){
  document.getElementById('cardThree').style.marginTop = "0px";
}

/* */

function divFourYukari(){
  document.getElementById('cardFour').style.marginTop = "-20px";
}

function divFourAsagi(){
  document.getElementById('cardFour').style.marginTop = "0px";
}

/* */

function divFiveYukari(){
  document.getElementById('cardFive').style.marginTop = "-20px";
}

function divFiveAsagi(){
  document.getElementById('cardFive').style.marginTop = "0px";
}

/* */

function divSixYukari(){
  document.getElementById('cardSix').style.marginTop = "-20px";
}

function divSixAsagi(){
  document.getElementById('cardSix').style.marginTop = "0px";
}

/****************************************************************/

function devilOne(){
  document.getElementById('lessonOne').style.display = "block";
  document.getElementById('lessonTwo').style.display = "none";
  document.getElementById('lessonThree').style.display = "none";
  document.getElementById('lessonFour').style.display = "none";
  document.getElementById('lessonFive').style.display = "none";
  document.getElementById('lessonSix').style.display = "none";

  /**/
    var iframe = document.getElementById('dersTwo');
    var iframe2 = document.getElementById('dersThree');
    var iframe3 = document.getElementById('dersFour');
    var iframe4 = document.getElementById('dersFive');
    var iframe5 = document.getElementById('dersSix');
    iframe.src = iframe.src;
    iframe2.src = iframe2.src;
    iframe3.src = iframe3.src;
    iframe4.src = iframe4.src;
    iframe5.src = iframe5.src;
}

function devilTwo(){
  document.getElementById('lessonOne').style.display = "none";
  document.getElementById('lessonTwo').style.display = "block";
  document.getElementById('lessonThree').style.display = "none";
  document.getElementById('lessonFour').style.display = "none";
  document.getElementById('lessonFive').style.display = "none";
  document.getElementById('lessonSix').style.display = "none";

  /***/

    var iframe = document.getElementById('dersOne');
    var iframe2 = document.getElementById('dersThree');
    var iframe3 = document.getElementById('dersFour');
    var iframe4 = document.getElementById('dersFive');
    var iframe5 = document.getElementById('dersSix');
    iframe.src = iframe.src;
    iframe2.src = iframe2.src;
    iframe3.src = iframe3.src;
    iframe4.src = iframe4.src;
    iframe5.src = iframe5.src;
}

function devilThree(){
  document.getElementById('lessonOne').style.display = "none";
  document.getElementById('lessonTwo').style.display = "none";
  document.getElementById('lessonThree').style.display = "block";
  document.getElementById('lessonFour').style.display = "none";
  document.getElementById('lessonFive').style.display = "none";
  document.getElementById('lessonSix').style.display = "none";

  /***/

    var iframe = document.getElementById('dersOne');
    var iframe2 = document.getElementById('dersTwo');
    var iframe3 = document.getElementById('dersFour');
    var iframe4 = document.getElementById('dersFive');
    var iframe5 = document.getElementById('dersSix');
    iframe.src = iframe.src;
    iframe2.src = iframe2.src;
    iframe3.src = iframe3.src;
    iframe4.src = iframe4.src;
    iframe5.src = iframe5.src;
}

function devilFour(){
  document.getElementById('lessonOne').style.display = "none";
  document.getElementById('lessonTwo').style.display = "none";
  document.getElementById('lessonThree').style.display = "none";
  document.getElementById('lessonFour').style.display = "block";
  document.getElementById('lessonFive').style.display = "none";
  document.getElementById('lessonSix').style.display = "none";

  /***/

    var iframe = document.getElementById('dersOne');
    var iframe2 = document.getElementById('dersTwo');
    var iframe3 = document.getElementById('dersThree');
    var iframe4 = document.getElementById('dersFive');
    var iframe5 = document.getElementById('dersSix');
    iframe.src = iframe.src;
    iframe2.src = iframe2.src;
    iframe3.src = iframe3.src;
    iframe4.src = iframe4.src;
    iframe5.src = iframe5.src;
}

function devilFive(){
  document.getElementById('lessonOne').style.display = "none";
  document.getElementById('lessonTwo').style.display = "none";
  document.getElementById('lessonThree').style.display = "none";
  document.getElementById('lessonFour').style.display = "none";
  document.getElementById('lessonFive').style.display = "block";
  document.getElementById('lessonSix').style.display = "none";

  /***/

    var iframe = document.getElementById('dersOne');
    var iframe2 = document.getElementById('dersTwo');
    var iframe3 = document.getElementById('dersThree');
    var iframe4 = document.getElementById('dersFour');
    var iframe5 = document.getElementById('dersSix');
    iframe.src = iframe.src;
    iframe2.src = iframe2.src;
    iframe3.src = iframe3.src;
    iframe4.src = iframe4.src;
    iframe5.src = iframe5.src;
}

function devilSix(){
  document.getElementById('lessonOne').style.display = "none";
  document.getElementById('lessonTwo').style.display = "none";
  document.getElementById('lessonThree').style.display = "none";
  document.getElementById('lessonFour').style.display = "none";
  document.getElementById('lessonFive').style.display = "none";
  document.getElementById('lessonSix').style.display = "block";

  /***/

    var iframe = document.getElementById('dersOne');
    var iframe2 = document.getElementById('dersTwo');
    var iframe3 = document.getElementById('dersThree');
    var iframe4 = document.getElementById('dersFour');
    var iframe5 = document.getElementById('dersFive');
    iframe.src = iframe.src;
    iframe2.src = iframe2.src;
    iframe3.src = iframe3.src;
    iframe4.src = iframe4.src;
    iframe5.src = iframe5.src;
}