<?php
require 'conn.php';

$stmt = $conn->prepare("SELECT iddoktor, jmeno, prijmeni FROM doktor");
$stmt->execute();
$stmt->bind_result($iddoktor, $jmeno, $prijmeni);

$doctors = [];
while ($stmt->fetch()) {
    $doctors[] = ['iddoktor' => $iddoktor, 'jmeno' => $jmeno, 'prijmeni' => $prijmeni];
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konzultace</title>
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

        .consultation-form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border: 2px solid black;
            border-radius: 10px;
        }

        .consultation-form div {
            margin-bottom: 15px;
        }

        .consultation-form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .consultation-form input,
        .consultation-form select,
        .consultation-form textarea {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }

        .consultation-form button {
            width: 100%;
            padding: 10px;
            background-color: green;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .consultation-form button:hover {
            background-color: darkgreen;
        }

        .success-message {
            display: none;
            text-align: center;
            color: green;
            font-size: 24px;
            font-weight: bold;
        }

        .back-button {
            display: none;
            margin-top: 20px;
            padding: 10px 20px;
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
<h1>Žádost o konzultaci</h1>
<div class="consultation-form" id="formContainer">
    <form id="consultationForm" method="POST" action="konzultovani.php">
        <div>
            <label for="doctor">Vyberte lékaře:</label>
            <select id="doctor" name="doctor" required>
                <?php foreach ($doctors as $doctor): ?>
                    <option value="<?php echo htmlspecialchars($doctor['iddoktor']); ?>">
                        <?php echo htmlspecialchars($doctor['jmeno'] . ' ' . $doctor['prijmeni']); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <label for="description">Popis problému:</label>
            <textarea id="description" name="description" rows="4" required></textarea>
        </div>
        <button type="submit">Odeslat</button>
    </form>
</div>

</body>
</html>
