<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h2>Logowanie</h2>
    <form id="loginForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="username">Nazwa użytkownika:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Hasło:</label>
        <input type="password" id="password" name="password" required>
        <br>c
        <button type="button"  name="register" id="register">Rejestracja</button>
        <button type="button"  name="guest" id="guest">Powrót</button>
    </form>

    <script>
        document.getElementById('register').addEventListener('click', function() {
            window.location.href = 'rejestracja.php';
        });
    </script>
     <script> 
        document.getElementById('guest').addEventListener('click', function() {
            window.location.href = 'stronaglowna.php';
        });
    </script>

</body>
</html>

sss