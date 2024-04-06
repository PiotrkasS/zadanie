<?php
// Początek sesji
session_start();

// Wylogowanie użytkownika poprzez zniszczenie sesji
session_destroy();

// Przekierowanie użytkownika na stronę logowania po wylogowaniu
header("Location: Logowanie.php");
exit();
?>