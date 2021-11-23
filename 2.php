<?php $thisPage="Geld"; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include("header.php");?>

<body>

  <?php include("nav.php"); ?>

  <div class="container content" id="panel">
    <?php include("logo.php");?>
    <div class="row">
      <div class="hero col-md-12">
        <img class="" name="slide" src="Bilder/nj2/nj2-01.jpg" alt="">
        <div class="nextimg" onclick="nextImg()"></div>
        <div class="previmg" onclick="prevImg()"></div>
        <div class="BU">
          <p>Klicke auf das Bild für mehr Eindrücke.</p>
          </div>
      </div>
      <div class="Beschreibung offset-md-0 col-md-5">
        <h3>
          <p>
            <?php print($thisPage) ?> — <i>2008</i>
          </p>
        </h3>
      </div>
      <div class="mobile-images">
        <img class="col-md-3" src="Bilder/nj2/nj2-02.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj2/nj2-03.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj2/nj2-04.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj2/nj2-06.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj2/nj2-07.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj2/nj2-08.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj2/nj2-10.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj2/nj2-12.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj2/nj2-13.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj2/nj2-14.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj2/nj2-15.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj2/nj2-16.jpg" alt="">
      </div>
      <div class="credits offset-md-7 col-md-5">
        <p><i>Redaktion & Gestaltung:</i>
          Evelina Augustynska, Daniel Behrens, Lisa Bucher, Andreas Klammt, Curie Kure, Miriam Poferl<br/>
          <img src="Bilder/icons/ddc_logo2.png" alt="">


      </div>
    </div>
    <?php include("footer.php"); ?>
    <script type="text/javascript">
      var images = ["Bilder/nj2/nj2-01.jpg",
        "Bilder/nj2/nj2-02.jpg",
        "Bilder/nj2/nj2-03.jpg",
        "Bilder/nj2/nj2-04.jpg",
        "Bilder/nj2/nj2-06.jpg",
        "Bilder/nj2/nj2-07.jpg",
        "Bilder/nj2/nj2-08.jpg",
        "Bilder/nj2/nj2-10.jpg",
        "Bilder/nj2/nj2-12.jpg",
        "Bilder/nj2/nj2-13.jpg",
        "Bilder/nj2/nj2-14.jpg",
        "Bilder/nj2/nj2-15.jpg",
        "Bilder/nj2/nj2-16.jpg",
      ];
    </script>
</body>

</html>
