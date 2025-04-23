<?php
require 'conn.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

$stmt = $conn->prepare("SELECT jmeno, prijmeni, stat, mesto, ulice, psc, pohlavi, datnaroz, pojistovna, telefon, email FROM uzivatel WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($jmeno, $prijmeni, $stat, $mesto, $ulice, $psc, $pohlavi, $datnaroz, $pojistovna, $telefon, $email);
$stmt->fetch();
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Osobní údaje</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border: 2px solid black;
            border-radius: 10px;
        }

        h1 {
            color: green;
            font-size: 36px;
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

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 2px solid black;
            border-radius: 5px;
        }

        .button-group {
            text-align: center;
            margin-top: 20px;
        }

        .button-group button {
            padding: 10px 20px;
            background-color: green;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
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
<div class="container" id="personalInfoContainer">
    <h1>Osobní údaje</h1>
    <div class="form-group">
        <label>Jméno:</label>
        <input type="text" value="<?php echo htmlspecialchars($jmeno); ?>" disabled>
    </div>
    <div class="form-group">
        <label>Příjmení:</label>
        <input type="text" value="<?php echo htmlspecialchars($prijmeni); ?>" disabled>
    </div>
    <div class="form-group">
        <label>Stát:</label>
        <input type="text" value="<?php echo htmlspecialchars($stat); ?>" disabled>
    </div>
    <div class="form-group">
        <label>Město:</label>
        <input type="text" value="<?php echo htmlspecialchars($mesto); ?>" disabled>
    </div>
    <div class="form-group">
        <label>Ulice:</label>
        <input type="text" value="<?php echo htmlspecialchars($ulice); ?>" disabled>
    </div>
    <div class="form-group">
        <label>PSČ:</label>
        <input type="text" value="<?php echo htmlspecialchars($psc); ?>" disabled>
    </div>
    <div class="form-group">
        <label>Pohlaví:</label>
        <input type="text" value="<?php echo htmlspecialchars($pohlavi); ?>" disabled>
    </div>
    <div class="form-group">
        <label>Datum narození:</label>
        <input type="text" value="<?php echo htmlspecialchars($datnaroz); ?>" disabled>
    </div>
    <div class="form-group">
        <label>Pojistovna:</label>
        <input type="text" value="<?php echo htmlspecialchars($pojistovna); ?>" disabled>
    </div>
    <div class="form-group">
        <label>Telefon:</label>
        <input type="text" value="<?php echo htmlspecialchars($telefon); ?>" disabled>
    </div>
    <div class="form-group">
        <label>Email:</label>
        <input type="text" value="<?php echo htmlspecialchars($email); ?>" disabled>
    </div>
</div>
</body>
</html>
