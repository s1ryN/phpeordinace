<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Můj účet</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border: 2px solid black;
            border-radius: 10px;
            position: relative;
        }

        h1 {
            color: green;
            font-size: 36px;
            font-weight: bold;
        }

        hr {
            border: 1px solid green;
            margin-bottom: 20px;
        }

        .links {
            margin-bottom: 20px;
        }

        .links a {
            display: block;
            font-size: 18px;
            margin: 10px 0;
            color: black;
            text-decoration: none;
        }

        .links a:hover {
            text-decoration: underline;
        }

        .logout-button {
            position: absolute;
            right: 20px;
            bottom: 20px;
            padding: 10px;
            background-color: white;
            color: black;
            border: 2px solid black;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
        }

        .logout-button:hover {
            background-color: #e0e0e0;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Můj účet</h1>
    <hr>
    <div class="links" id="userLinks">
        <a href="konzultace.php">Žádost o konzultaci</a>
        <a href="moje_konzultace.php">Moje konzultace</a>
        <a href="udaje.php">Osobní údaje</a>
    </div>
    <a href="index.php" class="logout-button" onclick="logout()">ODHLÁSIT SE</a>
</div>

</body>
</html>
