  <!DOCTYPE html>
  <html lang="nl">
  <head>
  <meta charset="utf-8">
  <meta name="description" content= "In Mexico-Stad ontstond een restaurant uit liefde voor de Mexicaanse keuken.">
  <meta name="keywords" content="ChilliesGalore, Chillies, Galore, Chillies Galore, Restaurant, Dining, Eating, Spicy, Mexican, Mexico-Stad"> 
  <meta name="author" content="J. van Leeuwen">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Chillie's Galore</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="lib/slideshow.js" defer></script>
  <!-- Icon Linksboven Tabblad -->
  <link rel="icon" href="img/header-logo.png" type="image/icon type">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  </head>
  <body>
  <?php 

  include 'header.php';

  ?>
  <main id="grid-container-vacature">
  <section class="home-ontdek-ons grid-item">
    <div class="home-paragraph1">
      <article class="home-text-ontdenk-ons">
        <h1 class="home-titel-ontdenk-ons"> Werken bij ons </h1>
        <div class="general-bar"> </div>
        <p class="home-info-text"> Op zoek naar de leukste baan? Dan ben je bij Chillie's Galore aan het juiste adres! Bekijk onze vacatures. Word jij onze toekomstige ober, steun jij Diego als chef of word je onze nieuwe restaurant manager?</p>
      </article>
      <article class="home-img-ontdenk-ons">
        <img class="general-man-aan-tafel afbeelding-vacature-block" src="img/manaantafel.PNG">
        <img class="planten-en-licht" src="img/plantenlicht.PNG">
      </article>
    </div>
  </section>
  <section class="home-ontdek-ons grid-item">
    <div class="home-paragraph1">
      <article class="home-img-ontdenk-ons">
        <img class="planten-en-licht" src="img/restaurantingezoomd.PNG">
        <img class="general-man-aan-tafel afbeelding-vacature-block" src="img/vacature/ober.jpg">
      </article>
      <article class="home-text-ontdenk-ons">
        <h1 class="home-titel-ontdenk-ons"> Ober </h1>
        <div class="general-bar"> </div>
        <p class="home-info-text"> Lijkt het jou leuk om als ober bij Chillie's Galore te werken? Twijfel dan niet langer en kom werken voor Chillie's Galore! Vul dan het onderstaande formulier in en wie weet word jij onze nieuwe collega!  </p>
      </article>
    </div>
  </section>
  <section class="home-ontdek-ons grid-item">
    <div class="home-paragraph1">
      <article class="home-text-ontdenk-ons">
        <h1 class="home-titel-ontdenk-ons"> Chef </h1>
        <div class="general-bar"> </div>
        <p class="home-info-text"> Als jij het leuk vindt om als chef voor Chillie's Galore aan de slag te gaan, twijfel dan niet langer!  Vul dan het onderstaande formulier in en wie weet word jij onze nieuwe collega! </p>
      </article>
      <article class="home-img-ontdenk-ons">
        <img class="general-man-aan-tafel" src="img/chef.PNG">
        <img class="general-man-aan-tafel afbeelding-vacature-block" src="img/vacature/chef.jpeg">
      </article>
    </div>
  </section>
  <section class="home-ontdek-ons grid-item">
    <div class="home-paragraph1">
      <article class="home-img-ontdenk-ons">
        <img class="planten-en-licht" src="img/restaurantingezoomd.PNG">
        <img class="general-man-aan-tafel afbeelding-vacature-block" src="img/vacature/manager.jpg">
      </article>
      <article class="home-text-ontdenk-ons">
        <h1 class="home-titel-ontdenk-ons"> Restaurant Manager </h1>
        <div class="general-bar"> </div>
        <p class="home-info-text"> Chillie's Galore is op zoek naar een nieuwe restaurant manager. Wellicht zoeken wij jou! Geïntereseerd? Vul dan het onderstaande formulier in en wie weet word jij onze nieuwe collega! </p>
      </article>
    </div>
  </section>
  <section id="form">
        <article class="container">
            <p class="container-title">Vacature Formulier</p>
            <div class="form-bar"> </div>
            <form id="conact" method="post">
                <div class="user-details" id="gridje">
                    <article class="input">
                        <p class="details">Voornaam</p>
                        <input type="text" name="voornaam" placeholder="Vul hier je voornaam in" required>
                    </article>
                    <article class="input">
                        <p class="details">Achternaam</p>
                        <input type="text" name="voornaam" placeholder="Vul hier je achternaam in" required>
                    </article>
                    <article class="input">
                        <p class="details">Leeftijd</p>
                        <input type="text" name="achternaam" placeholder="Vul hier je leeftijd in" required>
                    </article>
                    <article class="input">
                        <p class="details">Telefoonnummer</p>
                        <input type="text" name="telnummer" placeholder="Vul hier je telefoonnummer in" required>
                    </article>
                    <article class="input">
                        <p class="details">Email</p>
                        <input type="text" name="email" placeholder="Vul hier je email in" required>
                    </article>
                    <article class="input">
                        <p class="details">Vertel iets over jezelf</p>
                        <input type="text" name="aantal" placeholder="Vertel hier iets over jezelf" required>
                    </article>
                    <article class="input">
                        <p class="details">Functie</p>
                        <select class="details input selectfunctie" id="cars" name="cars">
                          <option value="volvo">Ober</option>
                          <option value="saab">Chef</option>
                          <option value="fiat">Restaurant Manager</option>
                        </select>
                    </article>
                    <article class="input">
                        <p class="details">CV</p>
                        <input class="filebutton" type="file" name="aantal" placeholder="Upload hier je CV">
                    </article>
                </div>
                <article class="reserveer">
                    <input type="submit" value="Verstuur" name="send">
                </article>
                Wij proberen binnen uiterlijk 3-5 werkdagen contact met u op te nemen.
            </form> 
        </article>
    </section>
</main>
  <?php 

  include 'footer.php';

  ?>
  </body>