<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hlavní Stránka</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f0f0f0;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 20px;
            border-bottom: 2px solid #008000;
        }

        .header input[type="text"] {
            padding: 5px;
            font-size: 14px;
        }

        .header h1 {
            text-align: center;
            flex-grow: 1;
            color: #008000;
        }

        .header .user {
            display: flex;
            align-items: center;
        }

        .header .user a {
            color: white;
            text-decoration: none;
            font-size: 14px;
            background-color: #008000;
            padding: 10px 20px;
            border-radius: 5px;
            margin-left: 10px;
            display: inline-block;
        }

        .header .user a:hover {
            background-color: #005500;
        }

        .navigation {
            display: flex;
            justify-content: space-around;
            margin: 20px 0;
        }

        .navigation .nav-item {
            border: 2px solid black;
            border-radius: 15px;
            padding: 40px;
            background-color: white;
            width: 200px;
            text-align: center;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            text-decoration: none;
            color: black;
        }

        .navigation .nav-item:hover {
            background-color: #e0e0e0;
        }

        .content {
            background-color: white;
            border: 2px solid black;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .content h2 {
            margin-top: 0;
        }

        .erecept-options {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .erecept-option {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            width: 100%;
        }

        .erecept-option button {
            margin-right: 20px;
            padding: 10px;
            border: 2px solid black;
            background-color: white;
            cursor: pointer;
            font-size: 16px;
            width: 150px;
        }

        .erecept-option button:hover {
            background-color: #e0e0e0;
        }

        .erecept-option span {
            margin-right: 20px;
            white-space: nowrap;
        }

        .erecept-option input[type="password"] {
            padding: 10px;
            border: 2px solid black;
            border-radius: 5px;
            width: 50%;
            min-width: 250px;
            margin-left: auto;
        }

        .section {
            background-color: white;
            border: 2px solid black;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .section h2 {
            margin-top: 0;
        }

        .faq-support {
            padding-top: 20px;
            border-top: 5px solid #008000;
            text-align: left;
        }

        .faq-support h2 {
            color: #008000;
        }

        .faq-support p {
            margin: 5px 0;
        }

        .news {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .news .news-slider {
            position: relative;
            width: 70%;
        }

        .news .news-slider img {
            width: 100%;
            height: auto;
            border: 2px solid black;
            display: none;
        }

        .news .news-slider img.active {
            display: block;
        }

        .news .news-slider .caption {
            position: absolute;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
            width: 100%;
            text-align: center;
            padding: 10px;
        }

        .news .news-slider .arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
            padding: 10px;
            cursor: pointer;
        }

        .news .news-slider .arrow.left {
            left: 0;
        }

        .news .news-slider .arrow.right {
            right: 0;
        }

        .news .news-info {
            width: 28%;
            margin-left: 2%;
        }

        .about-us, .faq-support {
            text-align: left;
        }
    </style>
</head>
<body>
<div class="header">
    <h1>NÁZEV WEBU</h1>
    <div class="user" id="userArea">
        <a href="logreg.php" id="loginRegisterButton">Přihlásit/Registrovat se</a>
    </div>
</div>

<div class="navigation">
    <a href="lekari.php" class="nav-item">Profily Lékařů</a>
</div>

<div class="section news">
    <div class="news-slider">
        <h2>Lékařské Novinky a Výzkumy</h2>
        <img src="https://via.placeholder.com/600x300" alt="Novinka 1" class="active">
        <img src="https://via.placeholder.com/600x300" alt="Novinka 2">
        <img src="https://via.placeholder.com/600x300" alt="Novinka 3">
        <div class="caption">Popisek Novinky 1</div>
        <div class="arrow left" onclick="prevSlide()">❮</div>
        <div class="arrow right" onclick="nextSlide()">❯</div>
    </div>
    <div class="news-info">
        <h2>O eReceptu</h2>
        <p>Elektronický recept (eRecept) je moderní a pohodlný způsob předepisování léků. Umožňuje lékařům vystavit recept elektronicky a pacientům ho jednoduše vyzvednout v jakékoli lékárně. eRecept přináší rychlost a pohodlí, eliminuje chyby spojené s nečitelností a umožňuje snadný přístup k předepsaným lékům kdykoli a kdekoli. Díky eReceptu máte přehled o svých lécích a jejich dávkování vždy po ruce.</p>
    </div>
</div>

<div class="section about-us">
    <h2>O NÁS</h2>
    <p>Naše lékařské centrum se zaměřuje na poskytování kvalitní a dostupné zdravotní péče. Naši zkušení lékaři jsou připraveni pomoci s jakýmkoli zdravotním problémem. Klientům nabízíme profesionální a individuální přístup s využitím nejmodernějších technologií a postupů. Naše služby zahrnují preventivní péči, diagnostiku, léčbu i dlouhodobou péči o chronicky nemocné pacienty.</p>
    <p>Usilujeme o to, aby každý náš pacient měl přístup k nejlepší možné péči a cítil se u nás dobře. Spolupracujeme s pojišťovnami a dalšími zdravotnickými zařízeními, abychom zajistili komplexní a koordinovanou péči. Věříme, že zdraví je to nejcennější, a jsme zde, abychom vám pomohli o něj pečovat.</p>
</div>

<div class="faq-support">
    <h2>FAQ A PODPORA</h2>
    <p>CALL CENTRUM</p>
    <p>+420 696 969 696</p>
    <p>Volejte Po-Pá od 08:00 do 18:00</p>
</div>

</body>
</html>
