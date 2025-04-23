<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Přihlášení/Registrace</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
      background-color: #f0f0f0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      background-color: white;
      border: 2px solid black;
      border-radius: 10px;
      padding: 20px;
      width: 50%;
      text-align: center;
    }

    .container h1 {
      color: #008000;
      margin-bottom: 20px;
    }

    .button-group {
      display: flex;
      justify-content: space-around;
      margin-top: 20px;
    }

    .button-group a {
      padding: 15px 30px;
      background-color: #008000;
      color: white;
      text-decoration: none;
      font-size: 18px;
      border-radius: 5px;
    }

    .button-group a:hover {
      background-color: #005500;
    }
  </style>
</head>
<body>
<div class="container">
  <h1>Přihlášení/Registrace</h1>
  <div class="button-group">
    <a href="prihlaseni.php">Přihlásit se</a>
    <a href="registrace.php">Registrovat se</a>
  </div>
</div>
</body>
</html>
