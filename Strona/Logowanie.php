<?php
// login.php

include("interfacelogowania.php");
include("interface.php");

session_start();

$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$login = isset($_POST['login']);
$register = isset($_POST['register']);
$guest = isset($_POST['guest']);


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($login)) {
        if (strlen($username) < 5 || strlen($password) < 5) {
            echo "<div class='message1'>Login lub hasło są za krótkie.</div>";
        } else {
            // Połączenie z bazą danych
            $db = new mysqli("localhost", "root", "", "projekt");

            // Sprawdzenie, czy połączenie się udało
            if ($db->connect_error) {
                die("Connection failed: " . $db->connect_error);
            }

            // Przygotowanie i wykonanie zapytania
            $q = $db->prepare("SELECT * FROM users WHERE username = ?");
            $q->bind_param("s", $username);
            $q->execute();
            $result = $q->get_result();

            // Sprawdzenie czy użytkownik istnieje i hasło jest poprawne
            if ($result->num_rows > 0) {
                $user = $result->fetch_assoc();
                if ($password == $user['password']) {
                    // Zalogowanie użytkownika
                    $_SESSION['username'] = $username;
                    header("Location: stronaglowna.php");
                    exit();
                } else {
                    echo "<div class='message1'>Nieprawidłowe hasło.</div>";
                }
            } else {
                echo "<div class='message1'>Użytkownik nie istnieje.</div>";
            }

            // Zamknięcie połączenia z bazą danych
            $db->close();
        }
    }

    if (isset($password)) {
        if (strlen($password) < 5) {
            echo "<div class='message2'>Hasło jest za krótkie.</div>";
        }
    } elseif ($register) {
        // Przekieruj do formularza rejestracyjnego
        ob_end_clean();
        header("Location: Strona/rejestracja.php");
        exit();
    } 
            if (isset($guest)) {
        // Przekieruj jako gość
        header("Location: stronaglowna.php");
        exit();
    
    }
    
}
?>
