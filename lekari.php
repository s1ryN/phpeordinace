<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lékaři</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: green;
        }

        hr {
            border: 2px solid green;
            width: 100%;
            margin: 20px 0;
        }

        .doctor-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-top: 20px;
            max-width: 1800px;
        }

        .doctor {
            border: 2px solid black;
            padding: 20px;
            background-color: white;
            text-align: center;
            box-sizing: border-box;
            white-space: nowrap; /* Zabrání přetékání textu na další řádek */
        }

        .faq-support {
            margin-top: 50px;
            text-align: left;
        }
    </style>
</head>
<body>
<h1>Lékaři</h1>
<hr>
<div class="doctor-container" id="doctorContainer">
    <div class="doctor">
        <h2>Dr. Jan Novák</h2>
        <p>Internista</p>
        <p>Email: jan.novak@example.com</p>
        <p>Telefon: +420 123 456 789</p>
    </div>
    <div class="doctor">
        <h2>Dr. Eva Svobodová</h2>
        <p>Kardiolog</p>
        <p>Email: eva.svob@example.com</p>
        <p>Telefon: +420 987 654 321</p>
    </div>
    <div class="doctor">
        <h2>Dr. Petr Dvořák</h2>
        <p>Ortoped</p>
        <p>Email: petr.dvorak@example.com</p>
        <p>Telefon: +420 654 321 987</p>
    </div>
    <div class="doctor">
        <h2>Dr. Anna Veselá</h2>
        <p>Neurolog</p>
        <p>Email: anna.vesela@example.com</p>
        <p>Telefon: +420 123 987 654</p>
    </div>
    <div class="doctor">
        <h2>Dr. Martin Horák</h2>
        <p>Dermatolog</p>
        <p>Email: martin.horak@example.com</p>
        <p>Telefon: +420 321 654 987</p>
    </div>
    <div class="doctor">
        <h2>Dr. Jana Eva</h2>
        <p>Pediatr</p>
        <p>Email: jana.eva@example.com</p>
        <p>Telefon: +420 789 123 456</p>
    </div>
    <div class="doctor">
        <h2>Dr. Pavel Malý</h2>
        <p>Gynekolog</p>
        <p>Email: pavel.maly@example.com</p>
        <p>Telefon: +420 456 789 123</p>
    </div>
    <div class="doctor">
        <h2>Dr. Lenka Černá</h2>
        <p>Endokrinolog</p>
        <p>Email: lenka.cerna@example.com</p>
        <p>Telefon: +420 654 987 321</p>
    </div>
    <div class="doctor">
        <h2>Dr. Tomáš Vrána</h2>
        <p>Urolog</p>
        <p>Email: tomas.vrana@example.com</p>
        <p>Telefon: +420 321 789 654</p>
    </div>
    <div class="doctor">
        <h2>Dr. Petra Štěpánová</h2>
        <p>Oftalmolog</p>
        <p>Email: petra.stepanova@example.com</p>
        <p>Telefon: +420 987 321 456</p>
    </div>
    <div class="doctor">
        <h2>Dr. Aleš Marek</h2>
        <p>Onkolog</p>
        <p>Email: ales.marek@example.com</p>
        <p>Telefon: +420 159 753 456</p>
    </div>
    <div class="doctor">
        <h2>Dr. Jitka Hová</h2>
        <p>Psycholožka</p>
        <p>Email: jitka.hova@example.com</p>
        <p>Telefon: +420 951 753 159</p>
    </div>
</div>
<hr>
<div class="faq-support">
    <h2 style="color: green;">FAQ a Podpora</h2>
    <p><strong>CALL CENTRUM</strong></p>
    <p>Tel. číslo: +420 123 456 789</p>
    <p>Volejte Po-Pá od 07:00 do 21:00</p>
</div>
</body>
</html>
