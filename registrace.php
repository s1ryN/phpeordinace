<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrace</title>
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

    .registration-form {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      background-color: white;
      border: 2px solid black;
      border-radius: 10px;
    }

    .registration-form div {
      margin-bottom: 15px;
    }

    .registration-form label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    .registration-form input,
    .registration-form select {
      width: 100%;
      padding: 10px;
      box-sizing: border-box;
    }

    .registration-form button {
      width: 100%;
      padding: 10px;
      background-color: green;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }

    .registration-form button:hover {
      background-color: darkgreen;
    }

    .error-message {
      color: red;
      display: none;
    }

    .success-message {
      display: none;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      color: green;
      font-size: 36px;
      font-weight: bold;
      height: 100vh;
    }

    .back-button {
      display: block;
      width: 200px;
      margin: 20px auto;
      padding: 10px;
      text-align: center;
      background-color: green;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      font-size: 16px;
    }

    .back-button:hover {
      background-color: darkgreen;
    }
  </style>
</head>
<body>
<h1>Registrace</h1>
<div id="registrationContainer" class="registration-form">
  <form id="registrationForm" action="registrationprocess.php" method="POST">
    <div>
      <label for="firstname">Jméno:</label>
      <input type="text" id="firstname" name="firstname" required>
    </div>
    <div>
      <label for="lastname">Příjmení:</label>
      <input type="text" id="lastname" name="lastname" required>
    </div>
    <div>
      <label for="country">Stát:</label>
      <input type="text" id="country" name="country" required>
    </div>
    <div>
      <label for="city">Město:</label>
      <input type="text" id="city" name="city" required>
    </div>
    <div>
      <label for="street">Ulice:</label>
      <input type="text" id="street" name="street" required>
    </div>
    <div>
      <label for="postalcode">PSČ:</label>
      <input type="text" id="postalcode" name="postalcode" required>
    </div>
    <div>
      <label for="gender">Pohlaví:</label>
      <select id="gender" name="gender" required>
        <option value="">Vyberte...</option>
        <option value="male">Muž</option>
        <option value="female">Žena</option>
      </select>
    </div>
    <div>
      <label for="birthdate">Datum narození:</label>
      <input type="date" id="birthdate" name="birthdate" required>
    </div>
    <div>
      <label for="insurance">Pojišťovna:</label>
      <input type="text" id="insurance" name="insurance" required>
    </div>
    <div>
      <label for="phone">Telefon:</label>
      <input type="text" id="phone" name="phone" required>
    </div>
    <div>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div>
      <label for="password">Heslo:</label>
      <input type="password" id="password" name="password" required>
    </div>
    <button type="submit">Registrovat</button>
  </form>
</div>
</body>
</html>
