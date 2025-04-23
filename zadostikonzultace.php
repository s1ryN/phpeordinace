<?php
require 'conn.php';

if (!isset($_SESSION['doktor_id'])) {
    header("Location: doktorlogin.php");
    exit();
}

$doctor_id = $_SESSION['doktor_id'];

$stmt = $conn->prepare("
    SELECT 
        k.idkonzultace, k.popisprob, k.vytvoreni, u.jmeno AS uzivatel_jmeno, u.prijmeni AS uzivatel_prijmeni, ko.odpoved
    FROM 
        konzultace k
    LEFT JOIN 
        uzivatel u ON k.uzivatel_id = u.id
    LEFT JOIN 
        konzultaceodpoved ko ON k.idkonzultace = ko.konzultace_id
    WHERE 
        k.doktor_id = ?
");
$stmt->bind_param("i", $doctor_id);
$stmt->execute();
$stmt->bind_result($idkonzultace, $popisprob, $vytvoreni, $uzivatel_jmeno, $uzivatel_prijmeni, $odpoved);

$consultations = [];
while ($stmt->fetch()) {
    $consultations[] = [
        'idkonzultace' => $idkonzultace,
        'popisprob' => $popisprob,
        'vytvoreni' => $vytvoreni,
        'uzivatel_jmeno' => $uzivatel_jmeno,
        'uzivatel_prijmeni' => $uzivatel_prijmeni,
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
<h1>Žádosti o konzultace</h1>
<div id="consultationContainer">
    <?php if (count($consultations) > 0): ?>
        <?php foreach ($consultations as $consultation): ?>
            <div class="consultation" onclick="toggleDetails(<?php echo $consultation['idkonzultace']; ?>)">
                <div>Datum vytvoření konzultace: <?php echo htmlspecialchars($consultation['vytvoreni']); ?></div>
                <div class="toggle-button">+</div>
            </div>
            <div id="details-<?php echo $consultation['idkonzultace']; ?>" class="consultation-details">
                <div><label>Uživatel:</label> <?php echo htmlspecialchars($consultation['uzivatel_jmeno'] . ' ' . $consultation['uzivatel_prijmeni']); ?></div>
                <div><label>Popis problému:</label> <?php echo htmlspecialchars($consultation['popisprob']); ?></div>
                <?php if ($consultation['odpoved']): ?>
                    <div><label>Odpověď:</label> <?php echo htmlspecialchars($consultation['odpoved']); ?></div>
                <?php else: ?>
                    <form method="POST" action="odpovednazadost.php">
                        <div>
                            <label for="odpoved-<?php echo $consultation['idkonzultace']; ?>">Vaše odpověď:</label>
                            <textarea id="odpoved-<?php echo $consultation['idkonzultace']; ?>" name="odpoved" rows="4" required></textarea>
                        </div>
                        <input type="hidden" name="idkonzultace" value="<?php echo $consultation['idkonzultace']; ?>">
                        <button type="submit">Odeslat</button>
                    </form>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <div class="consultation">Žádné konzultace</div>
    <?php endif; ?>
</div>
</body>
</html>
