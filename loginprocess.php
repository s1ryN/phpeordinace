<?php
session_start();
require 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $heslo = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, heslo FROM uzivatel WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();

        if ($heslo = "heslo") {
            $_SESSION['user_id'] = $id;
            $_SESSION['email'] = $email;

            header("Location: ucet.php");
            exit();
        } else {
            echo "Nesprávné heslo";
        }
    } else {
        echo "Uživatel nenalezen";
    }

    $stmt->close();
    $conn->close();
}
?>