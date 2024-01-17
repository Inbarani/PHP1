<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Suomen vuodenajat</title>
</head>
<body>
  
    <section>
        <header>           
           <h2 style="text-align: center;">SUOMEN VUODENAJAT</h2>
           <!--<img src="image/shutterstock_159080183_ge8_vuodenajat_p.jpg" alt="vuodenajat" style="width: 100%;">-->  
        </header>
        <div class="main">
            <div id="myBtnContainer">
                <button class="btn active" onclick="filterSelection('all')"> Etusivu</button>
                <button class="btn" onclick="filterSelection('kevat')"> Kevät</button>
                <button class="btn" onclick="filterSelection('kesa')"> Kesä</button>
                <button class="btn" onclick="filterSelection('syksy')"> Syksy</button>
                <button class="btn" onclick="filterSelection('talvi')"> Talvi</button>
            </div>
            
            
            <!-- Portfolio Gallery Grid -->
            <div class="row">
              <div class="column kevat">
                <div class="content">
                  <img src="image/kevat1.jpg" alt="kevat" style="width:100%">
                  <h4>Kevät</h4>
                  <p>Kevät alkaa yleensä maaliskuun lopulla tai huhtikuun alussa ja kestää toukokuun loppuun asti.</p>
                </div>
              </div>
              <div class="column kevat">
                <div class="content">
                  <img src="image/kevat2.jpg" alt="kevat" style="width:100%">
                  <h4>Järvi</h4>
                  <p>Keväällä Suomessa on usein säänvaihteluita, ja lämpötilat voivat vaihdella nollan asteen tuntumasta yli 10 asteeseen.</p>
                  
                </div>
              </div>
              <div class="column kevat">
                <div class="content">
                  <img src="image/kevat3.jpg" alt="kevat" style="width:100%">
                  <h4>Kukat</h4>
                  <p>Keväällä Suomessa kukkivat monetkevätkukat, kuten krookukset, narsissit , ja puut ja pensaat alkavat vihertää.</p>
                </div>
              </div>

              <div class="column kesa">
                <div class="content">
                  <img src="image/kesa.jpg" alt="kesa" style="width:100%">
                  <h4>Kesä</h4>
                  <p>Kesä alkaa kesäkuun alussa ja kestää elokuun loppuun asti. Kesä on yleensä Suomen lämpimin vuodenaika.</p>
                </div>
              </div>
              <div class="column kesa">
                <div class="content">
                  <img src="image/kesa2.jpg" alt="kesa" style="width:100%">
                  <h4>Marjat</h4>
                  <p>Kesä on suosittu aika matkustaa Suomeen ja nauttia Suomen kauniista luonnosta ja aktiviteeteista.</p>
                </div>
              </div>
              <div class="column kesa">
                <div class="content">
                  <img src="image/kesa3.jpg" alt="kesa" style="width:100%">
                  <h4>Kukat</h4>
                  <p>Kesällä Suomessa on paljon valoisaa aikaa, ja etenkin Lapissa voi kokea keskiyön auringon, ja voi kokea keskiyön auringon.</p>
                </div>
              </div>

              <div class="column syksy">
                <div class="content">
                  <img src="image/syksy1.jpg" alt="syksy" style="width:100%">
                  <h4>Syksy</h4>
                  <p>Syksy alkaa syyskuun alussa ja kestää marraskuun loppuun asti. Syksy on tunnettu kauniista ruskan väreistä, kun puut ja pensaat muuttuvat keltaisiksi, punaisiksi ja oransseiksi.</p>
                </div>
              </div>
              <div class="column syksy">
                <div class="content">
                  <img src="image/lehdet.jpg" alt="syksy" style="width:100%">
                  <h4>Lehdet</h4>
                  <p>Syksy on tunnettu kauniista ruskan väreistä, kun puut ja pensaat muuttuvat keltaisiksi, punaisiksi ja oransseiksi. Suomalaiset valmistautuvat talveen keräämällä marjoja ja sieniä.</p>
                </div>
              </div>
              <div class="column syksy">
                <div class="content">
                  <img src="image/sieni.jpg" alt="syksy" style="width:100%">
                  <h4>Sienet</h4>
                  <p>Syksyllä monet suomalaiset valmistautuvat talveen keräämällä marjoja ja sieniä. Syksy on tunnettu kauniista ruskan väreistä, kun puut ja pensaat muuttuvat keltaisiksi, punaisiksi ja oransseiksi.</p>
                </div>
              </div>
              <div class="column talvi">
                <div class="content">
                  <img src="image/snow.jpg" alt="talvi" style="width:100%">
                  <h4>Talvi</h4>
                  <p>Talvi alkaa joulukuun alussa ja kestää helmikuun loppuun asti. Talvi on yleensä Suomen kylmin vuodenaika, ja monilla alueilla maahan tulee lunta. Talvella monet suomalaiset harrastavat talviurheilua, kuten hiihtoa ja luistelua. </p>
                </div>
              </div>
              <div class="column talvi">
                <div class="content">
                  <img src="image/joulu.jpg" alt="talvi" style="width:100%">
                  <h4>Joulu</h4>
                  <p>Talvi alkaa joulukuun alussa ja kestää helmikuun loppuun asti. Talvi on yleensä Suomen kylmin vuodenaika, ja monilla alueilla maahan tulee lunta. Talvella monet suomalaiset harrastavat talviurheilua, kuten hiihtoa ja luistelua. </p>
                </div>
              </div>
              <div class="column talvi">
                <div class="content">
                  <img src="image/liikunta.jpg" alt="talvi" style="width:100%">
                  <h4>Liikunta</h4>
                  <p>Talvi alkaa joulukuun alussa ja kestää helmikuun loppuun asti. Talvi on yleensä Suomen kylmin vuodenaika, ja monilla alueilla maahan tulee lunta. Talvella monet suomalaiset harrastavat talviurheilua, kuten hiihtoa ja luistelua. </p>
                </div>
              </div>
            </div>
    <!-- END GRID -->
          <div id="myBtnContainer">
          <button class="btn" onclick="filterSelection('register')"> Register</button> 
          </div>
        </div>
    <script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

</section>  
<footer>
  &copy; Inbarani Ayyappan 2023
</footer>

</body>

</html>