<?php
session_start();
require 'conn.php';

if (!isset($_SESSION['doktor_id'])) {
    header("Location: doktorlogin.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idkonzultace = $_POST['idkonzultace'];
    $odpoved = $_POST['odpoved'];

    $stmt = $conn->prepare("INSERT INTO konzultaceodpoved (odpoved, konzultace_id) VALUES (?, ?)");
    $stmt->bind_param("si", $odpoved, $idkonzultace);

    if ($stmt->execute()) {
        header("Location: zadostikonzultace.php");
    } else {
        echo "Chyba při ukládání odpovědi.";
    }

    $stmt->close();
    $conn->close();
} else {
    header("Location: zadostikonzultace.php");
    exit();
}
?>
