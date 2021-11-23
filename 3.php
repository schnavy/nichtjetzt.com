<?php $thisPage="Geschmack";?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include("header.php");?>

<body>

  <?php include("nav.php"); ?>

  <div class="container content" id="panel">
    <?php include("logo.php");?>
    <div class="row">
      <div class="hero col-md-12">
        <img class="" name="slide" src="Bilder/nj3/nj3-03.jpg" alt="">
        <div class="nextimg" onclick="nextImg()"></div>
        <div class="previmg" onclick="prevImg()"></div>
        <div class="BU">
          <p>Klicke auf das Bild für mehr Eindrücke.</p>
          </div>
      </div>
      <div class="Beschreibung offset-md-0 col-md-10">
        <h3>
          <p><?php print($thisPage) ?> — <i>November 2011</i>
          </p>
        </h3>

      </div>
      <div class="mobile-images">
        <img class="col-md-3" src="Bilder/nj3/nj3-02.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj3/nj3-01.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj3/nj3-04.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj3/nj3-06.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj3/nj3-07.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj3/nj3-08.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj3/nj3-10.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj3/nj3-12.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj3/nj3-13.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj3/nj3-14.jpg" alt="">
      </div>
      <div class="credits offset-md-7 col-md-5">
        <p><i>Redaktion & Gestaltung:</i>
          Charlotte Bräuer, Lynn Dohrmann, Karina Donis, Franziska Ebert, Tillmann Engel, Marie Hochhaus, Louise Jessen,
          Cyrill Kuhlmann, Carsten Lerch, Benjamin Stracker. Betreuung: Prof. Stefan Stefanescu.
          Versandkostenfrei erhältlich unter <a href="https://www.slanted.de/en/beitrag/nicht-jetzt-3/" target="_blank" rel="noopener">slanted.de</a><br/>
          <img src="Bilder/icons/adc_logo.png" alt="">

      </div>

    </div>
  </div>
  <?php include("footer.php"); ?>
  <script type="text/javascript">
    var images = ["Bilder/nj3/nj3-03.jpg",
      "Bilder/nj3/nj3-02.jpg",
      "Bilder/nj3/nj3-01.jpg",
      "Bilder/nj3/nj3-04.jpg",
      "Bilder/nj3/nj3-06.jpg",
      "Bilder/nj3/nj3-07.jpg",
      "Bilder/nj3/nj3-08.jpg",
      "Bilder/nj3/nj3-10.jpg",
      "Bilder/nj3/nj3-12.jpg",
      "Bilder/nj3/nj3-13.jpg",
      "Bilder/nj3/nj3-14.jpg",
    ];
  </script>
</body>

</html>
