<?php
require 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php");
        exit();
    }

    $user_id = $_SESSION['user_id'];
    $doctor_id = $_POST['doctor'];
    $description = $_POST['description'];

    $stmt = $conn->prepare("INSERT INTO konzultace (uzivatel_id, doktor_id, popisprob) VALUES (?, ?, ?)");
    $stmt->bind_param("iis", $user_id, $doctor_id, $description);

    if ($stmt->execute()) {
        header("Location: ucet.php");
    } else {
        echo "Došlo k chybě při odesílání konzultace.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Neplatný požadavek.";
}
?>
