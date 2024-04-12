<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
  <meta name="description" content="Ontdek de smaken van Mexico bij Chillie’s Galore, Chillie's Galore, Eten bij Chillie's Galroe, fajitas, zachte tamales, Heeft u of een van uw familieleden/vrienden allergieën?,  Bij Chillie’s Galore willen wij ervoor zorgen dat al onze gasten een veilige en plezierige eetervaring hebben.">
  <meta name="keywords" content="Chillie's Galore, Eten bij Chillie's Galroe, fajitas, zachte tamales, voorgerechten, hoofdgerechten, desserts, dranken, allergieën, contact">
  <meta name="author" content="Melvin Olsthoorn">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="lib/slideshow.js" defer></script>
</head>
<body>
<?php 

  include 'header.php';

?>
<main id="menu-main">
  <section id="alinea-1">
    <article class="vak-1">
      <div class="streep-vak">
        <h1 class="titel">Eten bij Chillie's Galore</h1>
        <div class="streep"></div>
      </div>
      <div class="sub-vak">
        <p class="tekst">Ontdek de smaken van Mexico bij Chillie’s Galore! Van sissende fajitas tot zachte tamales, ons menu barst van heerlijke gerechten. Begin met verse guacamole en knapperige tortillachips, geniet van onze smeuïge Queso Fundido, en proef de verrukkelijke ceviche. Kies vervolgens uit onze hoofdgerechten, zoals onze onmiskenbare fajitas of onze zorgvuldig gerolde Enchiladas. Sluit af met een zoete noot, zoals onze weelderige Tres Leches Cake of krokante Churros met chocoladesaus. Kom langs en ontdek de authentieke smaken van Chillie’s Galore!</p>
      </div>
    </article>
  </section>
  <section id="alinea-2">
    <article class="vak-2">
      <div class="streep-vak">
        <h1 class="titel2">Bekijk ons menu</h1>
        <div class="streep-2"></div>
      </div>
      <div class="vak-3">
        <section class="gerechten menu-hover">
          <article class="boxen">
            <article class="driehoek">
              <h1 class="gerecht-info">Voorgerechten</h1>
            </article>
          </article>
        </section>
        <section class="gerechten-2 menu-hover">
          <article class="boxen">
            <article class="driehoek">
              <h1 class="gerecht-info">Hoofdgerechten</h1>
            </article>
          </article>
        </section>
        <section class="gerechten-3 menu-hover">
          <article class="boxen">
            <article class="driehoek">
              <h1 class="gerecht-info">Desserts</h1>
            </article>
          </article>
        </section>
        <section class="gerechten-4 menu-hover" onclick="window.location.href = 'dranken.php'">
          <article class="boxen">
            <article class="driehoek">
              <h1 class="gerecht-info">Dranken</h1>
            </article>
          </article>
        </section>
      </div>
    </article>
  </section>
  <section id="alinea-3">
    <article id="vak-4">
      <div class="streep-vak">
        <h1 class="titel">Allergenen</h1>
        <div class="streep"></div>
        <p class="tekst-2">Heeft u of een van uw familieleden/vrienden allergieën? Neem dan gerust contact met ons op. Bij Chillie’s Galore willen wij ervoor zorgen dat al onze gasten een veilige en plezierige eetervaring hebben. Uw gezondheid en welzijn is voor ons van het grootste belang en wij doen er alles aan om ervoor te zorgen dat u met een gerust hart kunt genieten van een uw maaltijd bij ons. Wij adviseren u om naar ons te bellen zodat alle vragen in 1 gesprek beantwoord kunnen worden!</p>
      </div>
    </article>
    <img id="allergenen-foto" src="img/menu/allergenen.png">
  </section>
</main>
<?php 

  include 'footer.php';

?>
</body>
</html>