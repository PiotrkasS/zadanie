<?php
// Początek sesji
session_start();

// Sprawdź, czy użytkownik jest zalogowany
if (!isset($_SESSION['username'])) {
    // Użytkownik nie jest zalogowany, przekieruj go do strony logowania
    header("Location: Logowanie.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('stylsg.php'); 
   
    ?>

    <style>
        #comment-form {
            margin-top: 20px;
        }

        #komentarze {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .komentarz {
            background-color: #f0f0f0;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            width: 40; /* dostosuj szerokość według potrzeb */
        }
    </style>
</head>
<body>

<header>
    <h1>Strona Muzyczna</h1>
</header>

<nav>
    <a href="menu/nowosci.php">Nowości</a>
    <a href="menu/gatunki.php">Gatunki</a>
    <a href="menu/wykonawcy.php">Wykonawcy</a>
    <a href="menu/koncerty.php">Koncerty</a>
    <a href="menu/kontakt.php">Kontakt</a>
    <a href="menu/pobierz.php">Pobierz</a>
    <a href="Logowanie.php">Logowanie</a>
    <a href="rejestracja.php">Rejestracja</a>
    <a href="wyloguj.php">Wyloguj</a>

</nav>

<main>
    <section id="top-bands">
        <h2>Top 3 Zespołów</h2>
        <ol>
            <li>Linkin Park</li>
            <li>Queen</li>
            <li>The Beatles</li>                                                                                                                               
        </ol>
    </section>
    <section class="content-section" id="nowosci">
  
    <h1>Założenie konta pozwoli Ci pobrać wybrane utwory</h1>
    <h3>Przykłądowe utwory</h3></br>
    <a href="">"In the End" - Linkin Park</a></br>
    <a href="">"We Are the Champions" - Queen</a></br>
    <a href="">"One Minute to Midnight" - Justice</a></br>


</section>
    
    <section class="content-section" id="nowosci">
  
        <h2>Nowości Muzyczne</h2>
        <p>Tutaj umieść treść związana z nowościami muzycznymi.</p>
    </section>

    <section class="content-section" id="komentarze">
        <h3>Komentarze użytkowników</h3>

        <!-- Formularz komentarza -->
        <form id="comment-form" action="" method="post">
            <label for="comment">Dodaj komentarz:</label><br>
            <textarea id="comment" name="comment" rows="4" cols="50"></textarea><br>
            <input type="submit" value="Dodaj komentarz">
        </form>

        <?php
        
        






        $db = new mysqli("localhost", "root", "", "projekt");

        // Sprawdź połączenie
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['comment']) && !empty($_POST['comment'])) {
                $comment = htmlspecialchars($_POST['comment']);
                $username = "przykladowy_username";

                // Przygotuj zapytanie SQL do dodania komentarza do bazy danych
                $query = "INSERT INTO opisy (opis, username) VALUES ('$comment', '$username')";

                // Wykonaj zapytanie
                if ($db->query($query) === TRUE) {
                    echo "<p>Komentarz dodany pomyślnie.</p>";
                } else {
                    echo "<p style='color: red;'>Błąd: " . $db->error . "</p>";
                }
            } else {
                echo "<p style='color: red;'>Błąd: Komentarz nie może być pusty.</p>";
            }
        }

        // Pobierz ostatnie 10 komentarzy
        $query_select = "SELECT * FROM opisy ORDER BY id DESC LIMIT 10";
        $result = $db->query($query_select);

        if ($result) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='komentarz'>{$row['opis']}</div>";
            }
            $result->free();
        } else {
            echo "<p style='color: red;'>Błąd podczas pobierania komentarzy: " . $db->error . "</p>";
        }

        // Zamknij połączenie
        $db->close();
        
        ?>
    </section>

</main>

</body>
</html>
