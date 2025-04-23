<?php
require 'conn.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

$stmt = $conn->prepare("
    SELECT 
        k.idkonzultace, k.popisprob, k.vytvoreni, d.jmeno AS doktor_jmeno, d.prijmeni AS doktor_prijmeni, ko.odpoved
    FROM 
        konzultace k
    LEFT JOIN 
        doktor d ON k.doktor_id = d.iddoktor
    LEFT JOIN 
        konzultaceodpoved ko ON k.idkonzultace = ko.konzultace_id
    WHERE 
        k.uzivatel_id = ?
");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($idkonzultace, $popisprob, $vytvoreni, $doktor_jmeno, $doktor_prijmeni, $odpoved);

$consultations = [];
while ($stmt->fetch()) {
    $consultations[] = [
        'idkonzultace' => $idkonzultace,
        'popisprob' => $popisprob,
        'vytvoreni' => $vytvoreni,
        'doktor_jmeno' => $doktor_jmeno,
        'doktor_prijmeni' => $doktor_prijmeni,
        'odpoved' => $odpoved
    ];
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moje konzultace</title>
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
            font-size: 36px;
            font-weight: bold;
        }

        .consultation {
            border: 2px solid black;
            padding: 10px;
            margin-bottom: 10px;
            background-color: white;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .consultation div {
            flex-grow: 1;
        }

        .toggle-button {
            width: 30px;
            height: 30px;
            background-color: white;
            border: 2px solid black;
            cursor: pointer;
            text-align: center;
        }

        .consultation-details {
            display: none;
            border: 2px solid black;
            background-color: white;
            padding: 10px;
            margin-top: 10px;
        }

        .consultation-details div {
            margin-bottom: 10px;
        }

        .consultation-details label {
            font-weight: bold;
        }
    </style>
    <script>
        function toggleDetails(id) {
            const details = document.getElementById('details-' + id);
            if (details.style.display === 'none' || details.style.display === '') {
                details.style.display = 'block';
            } else {
                details.style.display = 'none';
            }
        }
    </script>
</head>
<body>
<h1>Moje konzultace</h1>
<div id="consultationContainer">
    <?php if (count($consultations) > 0): ?>
        <?php foreach ($consultations as $consultation): ?>
            <div class="consultation" onclick="toggleDetails(<?php echo $consultation['idkonzultace']; ?>)">
                <div>Datum vytvoření konzultace: <?php echo htmlspecialchars($consultation['vytvoreni']); ?></div>
                <div class="toggle-button">+</div>
            </div>
            <div id="details-<?php echo $consultation['idkonzultace']; ?>" class="consultation-details">
                <div><label>Popis problému:</label> <?php echo htmlspecialchars($consultation['popisprob']); ?></div>
                <?php if ($consultation['odpoved']): ?>
                    <div><label>Odpověď lékaře (<?php echo htmlspecialchars($consultation['doktor_jmeno'] . ' ' . $consultation['doktor_prijmeni']); ?>):</label> <?php echo htmlspecialchars($consultation['odpoved']); ?></div>
                <?php else: ?>
                    <div><label>Odpověď lékaře:</label> Zatím žádné odpovědi</div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <div class="consultation">Žádné konzultace</div>
    <?php endif; ?>
</div>
</body>
</html>
