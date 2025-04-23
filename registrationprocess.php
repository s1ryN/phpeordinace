<?php
require 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jmeno = $_POST['firstname'];
    $prijmeni = $_POST['lastname'];
    $stat = $_POST['country'];
    $mesto = $_POST['city'];
    $ulice = $_POST['street'];
    $psc = $_POST['postalcode'];
    $pohlavi = $_POST['gender'] == 'male' ? 1 : 2;
    $datnaroz = $_POST['birthdate'];
    $pojistovna = $_POST['insurance'];
    $telefon = $_POST['phone'];
    $email = $_POST['email'];
    $heslo = $_POST['password'];

    $stmt = $conn->prepare("INSERT INTO uzivatel (jmeno, prijmeni, stat, mesto, ulice, psc, pohlavi, datnaroz, pojistovna, telefon, email, heslo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssiisssss", $jmeno, $prijmeni, $stat, $mesto, $ulice, $psc, $pohlavi, $datnaroz, $pojistovna, $telefon, $email, $heslo);

    if ($stmt->execute()) {
        header("location: prihlaseni.php");
    } else {
        echo "Chyba: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
