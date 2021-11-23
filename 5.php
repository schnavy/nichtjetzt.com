<?php $thisPage="Mehr"; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include("header.php"); ?>

<body>

  <?php include("nav.php"); ?>
  <div id="video-overlay">
    <a class="video-close" onclick="closeVideo()">
      Zurück
    </a>
    <div class="video">
    <div style="padding:56.25% 0 0 0;position:relative;">
      <iframe src="https://player.vimeo.com/video/173056553?title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
      </iframe>
    </div>
    <script src="https://player.vimeo.com/api/player.js"></script>
    </div>
  </div>
  <div class="container content" id="panel">
    <?php include("logo.php");?>
    <div class="row">

      <!-- <div class="title offset-md- col-md-12">
        <h1></h1>

      </div> -->

      <div id="hero" class="hero col-md-12">
        <img class="" name="slide" src="Bilder/nj5/nj5-01.jpg" alt="">
        <div class="nextimg" onclick="nextImg()"></div>
        <div class="previmg" onclick="prevImg()"></div>
        <div class="BU">
          <p>Klicke auf das Bild für mehr Eindrücke.</p>
          </div>
      </div>

      <div class="Beschreibung offset-md- col-md-10">
        <p>

          <h3><?php print($thisPage) ?> — <i>März 2015</i><br /><br />
            <p>
              Ein klar strukturiertes Gestaltungsprinzip trifft auf eine funktionelle Ausreizung des Mediums Magazin auf fast einem Meter Heftbreite! Jedes Exemplar ist ein Unikat mit individualisierter Titelseite. Alle Hefte wurden von den
              Studierenden auf rund 800 Fotos buchstäblich festgehalten. Zusammen ergibt das einen experimentellen Kurzfilm zum Thema MEHR.
              </p><div class="video-link" onclick="openVideo()"> → Zum Video. </div>
          </h3>
      </div>
      <div class="mobile-images">
        <img class="col-md-3" src="Bilder/nj5/nj5-02.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj5/nj5-03.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj5/nj5-04.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj5/nj5-06.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj5/nj5-07.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj5/nj5-08.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj5/nj5-10.jpg" alt="">
        <img class="col-md-3" src="Bilder/nj5/nj5-12.jpg" alt="">
      </div>
      <div class="credits offset-md-7 col-md-5">
        <p><i>Redaktion & Gestaltung:</i>
          Hannah Godde, Christina Gotz, Lucas Kramer, Magda Kreps, André Kurberg, Martina Ludewig, Patricia Paryz, Lea Pürling,
          Timo Rychert, Sarah Schögler, Paulina Wetzel, Jasmin Gritzka. Betreut von Prof. Stefan Stefanescu und Anne-Ev Ustorf.
          Versandkostenfrei erhältlich bei <a href="https://www.slanted.de/en/beitrag/nicht-jetzt-5-mehr/" target="_blank" rel="noopener">slanted.de</a><br/>

        </p>
      </div>

    </div>
  </div>
  <?php include("footer.php"); ?>
  <script type="text/javascript">
    var images = ["Bilder/nj5/nj5-01.jpg",
      "Bilder/nj5/nj5-02.jpg",
      "Bilder/nj5/nj5-03.jpg",
      "Bilder/nj5/nj5-04.jpg",
      "Bilder/nj5/nj5-06.jpg",
      "Bilder/nj5/nj5-07.jpg",
      "Bilder/nj5/nj5-08.jpg",
      "Bilder/nj5/nj5-10.jpg",
      "Bilder/nj5/nj5-12.jpg",
    ];
  </script>
</body>

</html>
