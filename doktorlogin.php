<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Přihlášení</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }

        .login-form {
            background-color: white;
            border: 2px solid black;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            width: 300px;
        }

        .login-form h1 {
            color: green;
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 2px solid black;
            border-radius: 5px;
        }

        .form-group input.invalid {
            border-color: red;
        }

        .form-group .error-message {
            color: red;
            display: none;
        }

        .button-group {
            text-align: right;
        }

        .button-group button {
            padding: 10px 20px;
            background-color: green;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .button-group button:hover {
            background-color: darkgreen;
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

        .hidden {
            display: none;
        }
    </style>
</head>
<body>
<div class="login-form" id="loginContainer">
    <form method="POST" action="doktorloginprocess.php">
    <h1>Přihlášení pro doktory</h1>
    <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="password">Heslo:</label>
        <input type="password" id="password" name="password" required>
    </div>
    <div class="button-group">
        <button type="submit">Přihlásit se</button>
    </div>
    </form>
    <a href="prihlaseni.php">Jste pacient? Přihlášení zde.</a>
</div>
</body>
</html>
