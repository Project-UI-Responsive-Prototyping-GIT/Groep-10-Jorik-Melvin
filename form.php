<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="reserveren bij Chillie's Galore, contact, privacybeleid van Chillie's Galore">
    <meta name="keywords" content="reserveren, contact, privacybeleid">
    <meta name="author" content="J. van Leeuwen & M. Olsthoorn">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="lib/slideshow.js" defer></script>
</head>
<body>
<?php 

include 'header.php';

?>
<main id="form-main">
    <section id="form">
        <article class="container">
            <p class="container-title">Reserveer</p>
            <div class="form-bar"> </div>
            <form id="conact" method="post" action="mail.php">
                <div class="user-details" id="gridje">
                    <article class="input">
                        <p class="details">Voornaam</p>
                        <input type="text" name="voornaam" placeholder="Vul hier je voornaam in" required>
                    </article>
                    <article class="input">
                        <p class="details">Tussenvoegsel</p>
                        <input type="text" name="tussenvoegsel" placeholder="Vul hier je tussenvoegsel in">
                    </article>
                    <article class="input">
                        <p class="details">Achternaam</p>
                        <input type="text" name="achternaam" placeholder="Vul hier je achternaam in" required>
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
                        <p class="details">Aantal Personen</p>
                        <input type="text" name="aantal" placeholder="Vul hier het aantal personen in" required>
                    </article>
                    <article class="input">
                        <p class="details">Gelegenheid</p>
                        <input type="text" name="gelegenheid" placeholder="Vul hier de gelegenheid in" required>
                    </article>
                    <article class="input">
                        <p class="details">Datum</p>
                        <input type="date" name="datum" placeholder="Test" required>
                    </article>
                    <article class="input">
                        <p class="details">Tijd</p>
                        <input type="time" name="doordeweekstijd" min="15:00" max="23:00" step="3600">
                    </article>
                    <article class="input">
                        <p class="details">Locatie </p>
                        <select class="details input selectfunctie" id="cars" name="cars">
                            <option value="volvo">Den Haag</option>
                            <option value="saab">Utrecht</option>
                            <option value="fiat">Breda</option>
                        </select>
                    </article>
                    <p id="tijdenform" class=openingstijdenform><i>Doordeweeks:<br> 17:00 - 21:00. <br><br>Weekend:<br> 15:00 - 23:00.<br><br>Alle reserveringen die buiten onze tijden vallen worden automatisch ongeldig gemaakt zonder terugkoppeling<br><br>Problemen? Contacteer ons!</i></p>
                </div>
                <article class="privacy-verklaring">
                    <p>Door dit formulier in te vullen, gaat u akkoord met ons <b id="popUp" onclick='modalAan()'>privacybeleid</b>. Wij respecteren uw privacy en zullen uw persoonlijke informatie alleen gebruiken voor het verwerken van uw reservering. Uw gegevens worden niet gedeeld met derden, tenzij vereist door de wet.</p>
                </article>
                <dialog id="modal" class="modal">
                    <h1>Privacy verklaring</h1><br>
                    <p>Laatst bijgewerkt: 10-03-2024 <br><br>

Wij bij Chillie's Galore waarderen het vertrouwen dat u in ons stelt bij het maken van<br> een reservering. We zijn toegewijd aan het beschermen van uw privacy en het zorgvuldig omgaan<br> met uw persoonlijke gegevens. Deze privacyverklaring beschrijft hoe wij informatie verzamelen<br>, gebruiken, delen en beschermen in verband met restaurantreserveringen.<br><br>

<b>1. Verzamelde informatie:</b><br><br>

Om uw reservering te verwerken en onze service te verbeteren, verzamelen wij de volgende informatie:<br><br>

Naam<br>
Telefoonnummer<br>
E-mailadres<br>
Voorkeuren met betrekking tot dieet of speciale verzoeken<br><br>
<b>2. Doeleinden van gegevensverwerking:</b><br><br>

Wij verwerken uw persoonlijke gegevens voor de volgende doeleinden:<br><br>

Het bevestigen van uw restaurantreservering<br>
Het verstrekken van relevante informatie met betrekking tot uw reservering<br>
Het verbeteren van onze service en aanpassen aan uw voorkeuren<br>
Het voldoen aan wettelijke verplichtingen met betrekking tot gegevensbewaring<br><br>
<b>3. Gegevensbeveiliging:</b><br><br>

Wij nemen de nodige technische en organisatorische maatregelen om uw persoonlijke gegevens<br> te beschermen tegen ongeoorloofde toegang, verlies, vernietiging of wijziging. Toegang tot uw<br> gegevens is beperkt tot geautoriseerd personeel en derden die nodig zijn voor de verwerking van <br>uw reservering.<br><br>

<b>4. Delen van gegevens:</b><br><br>

Wij delen uw persoonlijke gegevens alleen met derden indien dit noodzakelijk is voor de <br>verwerking van uw reservering of om te voldoen aan wettelijke verplichtingen. Wij verkopen,<br> verhuren of verhandelen uw gegevens niet met derden voor commerciële doeleinden.<br><br>

<b>5. Bewaartermijn:</b><br><br>

Wij bewaren uw persoonlijke gegevens alleen voor de periode die nodig is om de bovengenoemde<br> doeleinden te bereiken, tenzij een langere bewaartermijn vereist is door de wet.<br><br>

<b>6. Uw rechten:</b><br><br>

U hebt het recht om uw persoonlijke gegevens in te zien, te corrigeren, te verwijderen of bezwaar <br>te maken tegen de verwerking ervan. Neem contact met ons op via [contactgegevens] om uw <br>rechten uit te oefenen.<br><br>

<b>7. Wijzigingen in de privacyverklaring:</b><br><br>

Wij behouden ons het recht voor om deze privacyverklaring op elk moment te wijzigen. Eventuele<br> wijzigingen worden op deze pagina gepubliceerd, en het is uw verantwoordelijkheid om<br> regelmatig op de hoogte te blijven van eventuele updates.<br><br>

Door gebruik te maken van onze reserveringsservice stemt u in met de voorwaarden van deze <br>privacyverklaring.<br><br>

Heeft u vragen of opmerkingen over onze privacypraktijken? Neem dan contact met ons op via onze contactgegevens.<br><br>

Met vriendelijke groet,

Chillie's Galore
06-12345678 /// @example.com</p>
<button id="close" onclick="modelUit()">Close</button>
                </dialog>
                <article class="avg">
                    <input type="checkbox" id="toestemming" name="toestemming" value="yes" required>
                    <label for="toestemming">Ik geef toestemming voor het verwerken van mijn gegevens volgens het privacybeleid van de website.</label>
                </article>
                    <article class="reserveer">
                    <input type="submit" value="Reserveer" name="send" onclick="openPopUp()">
                </article>
            </form> 
        </article>
    </section>
</main>
<?php 

    include 'footer.php';

?>
</body>
</html>