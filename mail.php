<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$voornaam = $_POST["voornaam"];
$tussenvoegsel = $_POST["tussenvoegsel"];
$achternaam = $_POST["achternaam"];
$datum = $_POST["datum"];
$doordeweeks = "{$_POST["doordeweekstijd"]} doordeweeks";
$weekend = "{$_POST["weekendtijd"]} weekend";
$aantal = $_POST["aantal"];
$gelegenheid = $_POST["gelegenheid"];
$bestelling = "Bevestiging van uw reservering Chillie's Galore!";
$bedrijf = "Chillie's Galore";
$nummer = "06-12345678";
$email = "juanchilliesgalore@gmail.com";

$message = "Beste {$voornaam} {$tussenvoegsel} {$achternaam},<br>
<br>
Hartelijk dank voor het kiezen van {$bedrijf}! We waarderen uw reservering en kijken <br>ernaar uit om u binnenkort als onze gast te verwelkomen.<br>
<br>
Hier zijn de details van uw reservering:<br>
<br>
<b>Datum</b>: {$datum}<br>
<b>Tijd:</b> {$doordeweeks}{$weekend}<br>
<b>Aantal gasten:</b> {$aantal}<br>
Indien u nog speciale verzoeken of dieetwensen heeft, laat het ons dan gerust weten. We doen ons <br>best om aan al uw wensen te voldoen.
<br><br>
Mocht u om welke reden dan ook uw reservering moeten wijzigen of annuleren, neem dan zo snel <br> mogelijk contact met ons op. We begrijpen dat plannen kunnen veranderen en helpen u graag om <br>een nieuwe regeling te treffen.
<br><br>
Nogmaals bedankt voor uw reservering. We kijken ernaar uit om u een heerlijke culinaire <br>ervaring te bezorgen bij {$bedrijf}.
<br><br>
Met vriendelijke groet,
<br><br>
Juan<br>
Eigenaar Chillie's Galore<br>
{$nummer} /// {$email}";

$bevestiging = "Beste {$voornaam} {$tussenvoegsel} {$achternaam},<br><br>

Bedankt voor het kiezen van {$bedrijf}! We kijken ernaar uit om je binnenkort te <br>verwelkomen. Hier zijn de details van je reservering:
<br>
<b>Datum en tijd:</b> {$datum} {$doordeweeks}{$weekend} <br>
<b>Aantal gasten:</b> {$aantal}<br>
<b>Naam van de reservering:</b> {$voornaam} {$tussenvoegsel} {$achternaam}<br>
<b>Contactgegevens:</b> {$_POST['email']}<br>
Heb je nog specifieke verzoeken of vragen? Neem gerust contact met ons op via <br>{$bedrijf} /// {$nummer}.
<br><br>
We kijken ernaar uit om je een geweldige ervaring te bieden!
<br><br>
Met vriendelijke groet,<br>
Het {$bedrijf} Team";

if (isset($_POST["send"])) {
    $mail = new PHPMailer(true);

    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'juanchilliesgalore@gmail.com';
    $mail->Password   = 'fvtoamaaaiovrdvt';
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;

    // Recipients
    $mail->setFrom('juanchilliesgalore@gmail.com', $bedrijf);
    $mail->addAddress($_POST["email"]);
    $mail->addReplyTo('juanchilliesgalore@gmail.com', $bedrijf);

    // Content
    $mail->isHTML(true);
    $mail->Subject = $bestelling;
    $mail->Body    = $message;

    // Success sent message alert
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
<main>
    <section id="form2">
        <article class="container">
            <p class="container-title2">Bedankt voor je reservering!</p>
    <?php 
    if ($mail->send()) {
        echo $bevestiging;
    } else {
        echo 'Email could not be sent. Error: ' . $mail->ErrorInfo;
    }
    ?>

        </article>
    </section>
</main>
<?php 

    include 'footer.php';

?>
</body>
</html>