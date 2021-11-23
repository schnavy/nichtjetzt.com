<?php $thisPage="Teilen"; ?>
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
        <img class="" name="slide" src="Bilder/nj4/nj4-18.jpg" alt="">
        <div class="nextimg" onclick="nextImg()"></div>
        <div class="previmg" onclick="prevImg()"></div>
        <div class="BU">
          <p>Klicke auf das Bild für mehr Eindrücke.</p>
          </div>
      </div>
      <div class="Beschreibung offset-md- col-md-10">
        <h3><?php print($thisPage) ?> — <i>Juli 2013</i>
          <p>
            <br />
            Das deutsche Wort »Teilen« beinhaltet zwei sehr unterschiedliche Bedeutungen, die das 168-seitige Doppelheft in die Themen »share« und »split« teilen. Die Titelseiten der Hefte, 784 unterschiedliche Einzelstücke, ergeben zusammengesetzt
            ein knapp 60 Quadratmeter großes Bild, das eine embryonale Zellteilung zeigt.
          </p>
        </h3>
      </div>
      <div class="mobile-images">
        <img class="col-md-3" src="Bilder/nj4/nj4-03.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj4/nj4-04.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj4/nj4-06.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj4/nj4-07.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj4/nj4-08.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj4/nj4-10.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj4/nj4-12.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj4/nj4-13.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj4/nj4-14.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj4/nj4-15.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj4/nj4-16.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj4/nj4-17.jpg" alt="">
      </div>
      <div class="credits offset-md-7 col-md-5">
        <p><i>Redaktion & Gestaltung:</i>
          Teresa Baier, Jasmin Baltres, Jennifer David, Fabian Greve, Soeren Koswig, Janina Lentföhr, Dom Odenkirchen, Anne Stiefel, Simon Weize, Jana Blumendeller, Merle Düpmeier, Justus Düsenberg, Christina Gnatzy, Peter Kaden, Ines Könitz, Lara
          Kothe, Hanna Osen. Betreut von Prof. Stefan Stefanescu.
          Versandkostenfrei erhältlich bei <a href="https://www.slanted.de/en/beitrag/nicht-jetzt-nr-4-teilen/" target="_blank" rel="noopener"slanted.de</a><br />
          <img src="Bilder/icons/adc_logo2.png" alt="">
      </div>
    </div>
  </div>
  <?php include("footer.php"); ?>
  <script type="text/javascript">
    var images = ["Bilder/nj4/nj4-18.jpg",
      "Bilder/nj4/nj4-03.jpg",
      "Bilder/nj4/nj4-04.jpg",
      "Bilder/nj4/nj4-06.jpg",
      "Bilder/nj4/nj4-07.jpg",
      "Bilder/nj4/nj4-08.jpg",
      "Bilder/nj4/nj4-10.jpg",
      "Bilder/nj4/nj4-12.jpg",
      "Bilder/nj4/nj4-13.jpg",
      "Bilder/nj4/nj4-14.jpg",
      "Bilder/nj4/nj4-15.jpg",
      "Bilder/nj4/nj4-16.jpg",
      "Bilder/nj4/nj4-17.jpg",
    ];
  </script>
</body>

</html>
