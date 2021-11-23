<?php $thisPage="Neemodsch"; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include("header.php"); ?>

<body>

  <?php include("nav.php"); ?>


  <div class="container content" id="panel">
    <?php include("logo.php");?>

    <div class="row">
      <div class="hero col-md-12">
        <img class="" name="slide" src="Bilder/nj8/nj8-12.jpg" alt="">
        <div class="nextimg" onclick="nextImg()"></div>
        <div class="previmg" onclick="prevImg()"></div>
        <div class="BU">
          <p>Klicke auf das Bild für mehr Eindrücke.</p>
          </div>
      </div>


      <div class="Beschreibung offset-md- col-md-10">
        <p>
          <h3>
            <!-- Mode Spezial</br>Erschienen März 2019 </br></br> -->
            <?php print($thisPage) ?> — <i>März 2019</i><br /><br />

            Dreibroschenoper: Wie Mode Dich anschaut. Eine Blickverdrehung in drei Akten. — »Neemodsch« ist ein experimentelles
            Mode-Magazin. Es entstand in verschiedenen kooperativen Versuchsanordnungen. Inwiefern kann ein Objekt zum eigentlichen Akteur werden?
            Mode wird zum Medium für einen Perspektivwechsel.
            Mode- und Fotografie-Studierende entwickelten zusammen Bildkonzepte und fotografierten an verschiedensten Orten, Editorial Designer gestalteten kollektive Prozesse wie den »Schnellen Brüter«. Es entstanden skurrile,
            poetische Textfragmente als Grundlage für die Gestaltung. Der Entwurfsprozess rückt in den Fokus und Konzepte, Entwürfe und Skizzen gestatten einen Blick hinter die Kulissen des Modemachens. Die Produktion des Heftes selbst wird zum
            Thema.

      </div>
      <div class="mobile-images">
        <img class="col-md-3" src="Bilder/nj8/nj8-12.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj8/nj8-05.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj8/nj8-08.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj8/nj8-02.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj8/nj8-03.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj8/nj8-04.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj8/nj8-06.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj8/nj8-07.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj8/nj8-09.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj8/nj8-10.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj8/nj8-11.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj8/nj8-01.jpg" alt="">
      </div>


      <div class="credits offset-md-7 col-md-5">
        <p><i>Redaktion & Gestaltung:</i> Weronika Bizetic, Jasmin Cathor, Dana Elmi Sarabi, Anna Garcia Gómez, Martin Medin, Nico Papayannis, Theres Summe, David Wahrenburg, Katharine Watzlawick, Sophia Weider, Niclas Wentz, betreut von den ProfessorInnen Stefan
          Stefanescu, Kai Dünhölter und Linn Schröder.
          Versandkostenfrei erhältlich bei <a href="http://www.textem.de/neemodsch.html" target="_blank" rel="noopener">textem.de</a><br/>
</p>
      </div>
      <!-- <div class="credits offset-md-2 col-md-5">

          </div> -->


    </div>
  </div>
  <?php include("footer.php"); ?>
  <script type="text/javascript">
    var images = ["Bilder/nj8/nj8-12.jpg",
      "Bilder/nj8/nj8-05.jpg",
      "Bilder/nj8/nj8-08.jpg",
      "Bilder/nj8/nj8-02.jpg",
      "Bilder/nj8/nj8-03.jpg",
      "Bilder/nj8/nj8-04.jpg",
      "Bilder/nj8/nj8-06.jpg",
      "Bilder/nj8/nj8-07.jpg",
      "Bilder/nj8/nj8-08.jpg",
      "Bilder/nj8/nj8-09.jpg",
      "Bilder/nj8/nj8-10.jpg",
      "Bilder/nj8/nj8-11.jpg",
      "Bilder/nj8/nj8-01.jpg",
    ];
  </script>
</body>

</html>
