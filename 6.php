<?php $thisPage="Dazwischen"; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include("header.php"); ?>

<body>

  <?php include("nav.php"); ?>

  <div class="container content" id="panel">
    <?php include("logo.php");?>
    <div class="row">
      <!-- <div class="title offset-md- col-md-12">
          <h1></h1>

        </div> -->
      <div class="hero col-md-12">
        <img name="slide" src="Bilder/nj6/nj6-04.jpg" alt="">
        <div class="nextimg" onclick="nextImg()"></div>
        <div class="previmg" onclick="prevImg()"></div>
        <div class="BU">
          <p>Klicke auf das Bild für mehr Eindrücke.</p>
          </div>
      </div>
      <div class="Beschreibung offset-md-0 col-md-10">
        <h3><?php print($thisPage) ?> — <i>September 2016</i> <br /><br />
          <p>
            Die sechste Ausgabe der »nicht jetzt!« berichtet über »Zwischenwelten« und Ufo-Sichtungen in Amerika, erzählt von Geschichten zwischen Israelis und Palestinensern oder von der Gründung einer virtuellen Stadt zwischen Deutschland und Polen.
            Wir blicken ins nächtliche Zwischenreich der Hamburger Feierkultur, in den Alltag einer Wohngemeinschaft, die für unbestimmte Zeit in einem Schloss lebt, und besuchen Hinterhofmoscheen in deutschen Metropolen. Auch gestalterisch zelebriert
            die Ausgabe das Thema und lässt zwischen den Heftseiten einiges entdecken.
          </p>
        </h3>
      </div>
      <div class="mobile-images">
        <img class="col-md-3" src="Bilder/nj6/nj6-03.jpg" alt="">
        <img class="col-md-4" src="Bilder/nj6/nj6-06.jpg" alt="">
        <img class="col-md-4" src="Bilder/nj6/nj6-07.jpg" alt="">
        <img class="col-md-4" src="Bilder/nj6/nj6-08.jpg" alt="">
        <img class="col-md-4" src="Bilder/nj6/nj6-10.jpg" alt="">
        <img class="col-md-4" src="Bilder/nj6/nj6-12.jpg" alt="">
        <img class="col-md-4" src="Bilder/nj6/nj6-13.jpg" alt="">
        <img class="col-md-4" src="Bilder/nj6/nj6-14.jpg" alt="">
        <img class="col-md-4" src="Bilder/nj6/nj6-15.jpg" alt="">
      </div>
      <div class="credits offset-md-7 col-md-5">
        <p><i>Redaktion & Gestaltung:</i> Leigh Chen, Marta Górka-Feldmann, Lucie Gundlach, Dennis Gusko, Hadas Harel, Natalie Hoppe, Ottilie Karrer, Isabel Kiefaber, Timo Knorr, Madeleine Meixner, Sandra Polzin, Sophie Popp, Julia Schröder, Theresia
          Uhrlau, Hagar Wiskind, Sonja Witte, Tayyib Yavuz Cayirli. Betreut von Prof. Stefan Stefanescu sowie Urs Spindler und Malte Brenneisen.
          Versandkostenfrei erhältlich bei <a href="https://www.slanted.de/en/beitrag/nicht-jetzt-6-dazwischen/" target="_blank" rel="noopener">slanted.de</a><br/>
      </div>
    </div>
    </div>


  <?php include("footer.php"); ?>
  <script type="text/javascript">
    var images = ["Bilder/nj6/nj6-04.jpg",
      "Bilder/nj6/nj6-06.jpg",
      "Bilder/nj6/nj6-07.jpg",
      "Bilder/nj6/nj6-08.jpg",
      "Bilder/nj6/nj6-10.jpg",
      "Bilder/nj6/nj6-12.jpg",
      "Bilder/nj6/nj6-13.jpg",
      "Bilder/nj6/nj6-14.jpg",
      "Bilder/nj6/nj6-15.jpg",
    ];
  </script>
</body>

</html>
