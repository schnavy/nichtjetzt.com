<?php $thisPage="Start"; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include ("header.php"); $title = "Home";?>

<body>
  <div id="wrapper">


    <div class="curtain section">
      <p>»nicht jetzt!« Magazin</p>

      <a href="#2">
        <!-- <h1>&#8595;<h1/> -->
        <img src="Bilder/arrowdown.png" alt="">
      </a>
    </div>
    <div class="content section" id="2">

      <?php include ("nav.php"); ?>
      <div class="container" id="panel">
        <?php include ("logo.php");?>

        <div class="row">
          <!-- <div class="title offset-md- col-md-12">

        </div> -->
          <div class="intro Beschreibung offset-md- col-md-12">
            <h2>»nicht jetzt!« ist ein stu&shy;den&shy;tisches, mono&shy;the&shy;ma&shy;tisches Magazin des Departments Design der HAW Hamburg.
              Unsere aktuelle Sonderausgabe »Neemodsch« zeigt neue Mode und Fotografie aus Hamburg.

            </h2>
          </div>
          <div class=" offset-md- col-md-5">
            <p>Die Zeitschrift »nicht jetzt!« wird von studentischen Teams im Studiengang
              Kommunikationsdesign redaktionell geführt und graphisch gestaltet. Jede Ausgabe
              erscheint in einem neuen Layout, unter einem eigenem Thema und mit einem anderen
              redaktionellen Konzept. Sämtliche Fotos und Illustrationen stammen von Studierenden
              des Departments. Die aktuelle Ausgabe »Neemodsch« ist das Ergebnis einer engen Kooperation
              mit den Bereichen Modedesign und Fotografie. Seit 2006 erschienen acht Ausgaben.</p>
          </div>


          <!-- <img class="col-xs-12 col-md-4" src="Bilder/nj7-02.jpg" alt="">
        <img class="col-xs-12 col-md-4" src="Bilder/nj7-03.jpg" alt="">
        <img class="col-xs-12 col-md-4" src="Bilder/nj7-04.jpg" alt=""> -->
        </div>
      </div>
    </div>
    <?php include ("footer.php"); ?>
</body>

</html>
