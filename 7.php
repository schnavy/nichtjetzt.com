<?php $thisPage="Auf der Jagd"; ?>
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
        <img name="slide" src="Bilder/nj7/nj7-01.jpg" alt="">
        <div class="nextimg white" onclick="nextImg()"></div>
        <div class="previmg white" onclick="prevImg()"></div>
        <div class="BU">
          <p>Klicke auf das Bild für mehr Eindrücke.</p>
          </div>
      </div>
      <div class="Beschreibung offset-md- col-md-10">
        <h3><?php print($thisPage) ?> — <i>März 2018</i><br /><br />
          <p>
            Legt die Ohren an und reibt eure Hände warm: Es wird geblättert und gerubbelt, geföhnt und gestaunt! Die siebte Ausgabe der »nicht jetzt!« beschäftigt sich mit individuellen Sehn&shy;süchten, Trieben und Wünschen: Unter dem Titel
            »Auf der Jagd« bläst sie zum Blick darauf, was Menschen treibt und zieht: Sie berichtet von einem halben Leben mit einem Stalker, zeigt die ziel&shy;wasser&shy;haltigen Rituale eines deutschen Schützen&shy;vereins, lässt eine
            App-gestützte Prostituierte erzählen, die das wirklich gerne ist, und liefert Impressionen von den amerikanischen Verwandten, die Dich zum Sperr&shy;feuerschießen in den Garten einladen. Natürlich übersteht auch das Layout
            das nicht schadlos: Der Farbraum wird gesprengt, Bilder bluten, die Typografie gerät ins Ziel&shy;fern&shy;rohr und wird als Beute gerissen – ein Fest!
          </p>
        </h3>
      </div>

      <div class="mobile-images">
        <img class="col-sm-12" src="Bilder/nj7/nj7-03.jpg" alt="">
        <img class="col-sm-12" src="Bilder/nj7/nj7-04.jpg" alt="">
        <img class="col-sm-12" src="Bilder/nj7/nj7-06.jpg" alt="">
        <img class="col-sm-12" src="Bilder/nj7/nj7-07.jpg" alt="">
        <img class="col-sm-12" src="Bilder/nj7/nj7-08.jpg" alt="">
        <img class="col-sm-12" src="Bilder/nj7/nj7-10.jpg" alt="">
        <img class="col-sm-12" src="Bilder/nj7/nj7-12.jpg" alt="">
        <img class="col-sm-12" src="Bilder/nj7/nj7-02.jpg" alt="">

      </div>
      <div class="credits offset-md-7 col-md-5">
        <p><i>Redaktion & Gestaltung:</i> Saskia Beuchel, Henrik Bohle, Signe Heldt, Celia Hesse, Julika Hother, Melina Jaensch, Julia Koch, Hasibe Lesmann, Franziska Martin, Mareen Meibauer, Lisa Mersmann, Jannik Schießwohl, Katrin Schulz, Geniya
          Snegovskaya, Marco Wesche, betreut von Prof. Stefan Stefanescu sowie Urs Spindler und Henning Walther.
          Versandkostenfrei erhältlich bei <a href="https://www.slanted.de/en/beitrag/nicht-jetzt-7-auf-der-jagd-2/" target="_blank" rel="noopener">slanted.de</a><br/>
 </p>
      </div>
    </div>

  </div>
  <?php include("footer.php"); ?>
  <script type="text/javascript">
    var images = ["Bilder/nj7/nj7-01.jpg",
      "Bilder/nj7/nj7-03.jpg",
      "Bilder/nj7/nj7-04.jpg",
      "Bilder/nj7/nj7-06.jpg",
      "Bilder/nj7/nj7-07.jpg",
      "Bilder/nj7/nj7-08.jpg",
      "Bilder/nj7/nj7-10.jpg",
      "Bilder/nj7/nj7-12.jpg",
      "Bilder/nj7/nj7-02.jpg",
    ];
  </script>
</body>

</html>
