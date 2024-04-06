<?php
include("interface.php");

// Utwórz połączenie z bazą danych
$conn = new mysqli("localhost", "root", "", "projekt");

// Sprawdź czy udało się połączyć z bazą danych
if ($conn->connect_error) {
    die("Błąd połączenia z bazą danych: " . $conn->connect_error);
}

?>
</head>
<body>
    <h2>Formularz Rejestracji</h2>
    <form id="registrationForm" method="post" action="">
        <label for="username">Imię(username):</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="lastName">Nazwisko:</label>
        <input type="text" id="lastName" name="lastName" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="password">Hasło:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <label for="confirmPassword">Potwierdź hasło:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required>
        <br>
        <button type="submit" name="register">Zarejestruj</button>
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"])) {
    $username = $_POST["username"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    // Dodaj tutaj kod sprawdzający poprawność danych (np. walidacja email, porównanie hasła z potwierdzeniem, itp.)
    if(strlen($password) < 5){
        echo("Hasło musi posiadać więcej niż 5 znaków");
    } elseif(strlen($username) < 5){
        echo("Nazwa użytkownika musi posiadać więcej niż 5 znaków");
    } elseif($password != $confirmPassword){
        echo("Hasła nie są takie same");
    } else {
    // Prepared statement
    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
  

    if ($stmt->affected_rows > 0) {
        echo "Rejestracja zakończona sukcesem!";
        sleep(3);
        header("Location: Logowanie.php");
    } else {
        echo "Błąd podczas rejestracji: " . $stmt->error;
    }

    $stmt->close();
}
}
// Zamknij połączenie z bazą danych
$conn->close();
?>
