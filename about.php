<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="description" content= "Chef Diego is een meester in de Mexicaanse keuken, doordrenkt met de rijke tradities van zijn geboorteland.">
    <meta name="keywords" content="ChilliesGalore, Chillies, Galore, Chillies Galore, Chef, Diego, Mexico-Stad, Gastvrij, Locaties, Breda, Den Haag, Utrecht">
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
<main id="grid-container2">
<section id="about-main-text" class="grid-item">
    <h1 id="about-about-text"> About </h1>
    <div class="home-bar"></div>
</section>
<section class="about-chef grid-item">
    <div class="home-paragraph1">
        <article class="home-img-ontdenk-ons">
            <img class="general-man-aan-tafel" src="img/chef.PNG">
        </article>
        <article class="home-text-ontdenk-ons">
            <h1 class="home-titel-ontdenk-ons"> Chef </h1>
            <div class="general-bar"> </div>
            <p class="home-info-text"> Chef Diego is een meester in de Mexicaanse keuken, doordrenkt met de rijke tradities van zijn geboorteland. Opgegroeid in de straten van Mexico-Stad, leerde hij al op jonge leeftijd de geheimen van de keuken kennen van zijn grootmoeder. Met zijn unieke vermogen om traditionele receptente vernieuwen.
            </p>
        </article>
    </div>
</section>
<section id="about-fill-image" class="grid-item">
    <article id="about-onstaan">
        <p id="about-onstaan-title"> Onstaan </p>
        <div class="about-bar"></div>
        <div id="about-onstaat-grote-text">
            <p id="about-onstaat-text"> In Mexico-Stad ontstond een restaurant uit liefde voor de Mexicaanse keuken. Met kleurrijke gerechten en warme gastvrijheid veroverde het al snel harten wereldwijd. </p>
        </div>
    </article>
</section>
<!-- Vestigingen -->
<section id="about-vestigingen" class="grid-item">
    <div id="vestigingen-box">
        <h1 class="about-vestigingen-title-text"> Vestigingen </h1>
        <div class="vestigingen-bar"></div>
        <p id="about-vestigingen-beschrijving"> Chillie’s Galore heeft drie vestigingen verspreid over Nederland. </p>
        <article id="about-vestigingen-locaties">
            <div class="about-denhaag">
                <img class="about-vestigingen-pin" src="img/pin.png">
                <p class="about-locatie"> Den Haag</p>
            </div>
            <div class="about-denhaag">
                <img class="about-vestigingen-pin" src="img/pin.png">
                <p class="about-locatie"> Utrecht </p>
            </div>
            <div class="about-denhaag">
                <img class="about-vestigingen-pin" src="img/pin.png">
                <p class="about-locatie"> Breda </p>
            </div>
        </article>
    </div>
    <div>
        <article id="vestigingen-map">
        <img id="about-vestigingen-map" src="img/kaartnl.PNG">
        </article>
    </div>
</section>
<section id="about-video" class="grid-item">
    <video id="about-video2" controls autoplay> <source src="img/food.mp4" type="video/mp4"></video>
</section>
<section id="about-reviews" class="grid-item">
    <div id="reviews-div1">
        <h1 class="about-reviews-title-text"> Reviews </h1>
        <div class="vestigingen-bar"></div>
        <p id="reviews-text"> Gasten prijzen het restaurant van Chef Diego voor zijn ongeëvenaarde Mexicaanse smaken en hartelijke gastvrijheid. Met lof voor de verfijnde gerechten die de tradities van Mexico vieren, blijven de lovende recensies binnenstromen. </p>
        <p id="reviews-text2" onclick="window.location.href = 'review.php'">Lees meer...</p>
    </div>
    <div id="reviews-div2">
        <img class="reviews" src="img/review1.PNG">
        <img class="reviews" src="img/review2.PNG">
    </div>
</section>
</main>
<?php 

    include 'footer.php';

?>
</body>