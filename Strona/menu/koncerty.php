<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona Muzyczna</title>
    <style>
        body {
            background: url('zmac/imagine/linkin.jpeg') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
            width: 50%;
        }

        nav {
            background-color: #444;
            padding: 1em;
            text-align: center;
            width: 100%;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 0.5em 1em;
            margin: 0 0.5em;
            border-radius: 4px;
            background-color: #666;
            display: inline-block;
            margin-bottom: 0.5em;
        }

        nav a:hover {
            background-color: #888;
        }

        main {
            width: 100%;
            padding: 1em;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        #top-bands {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 1em;
            border-radius: 4px;
            width: 30%;
            margin-bottom: 2%;
        }

        #top-bands h2 {
            color: #333;
        }

        #top-bands ol {
            list-style-type: decimal;
            padding-left: 20px;
        }

        #concerts {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 1em;
            border-radius: 4px;
            width: 30%;
            margin: 2% auto;
        }

        #concerts h2 {
            color: #333;
        }

        #concerts ul {
            list-style-type: none;
            padding: 0;
        }

        #concerts li {
            margin-bottom: 0.5em;
        }

        #concerts a {
            color: #333;
            text-decoration: none;
            display: block;
            padding: 0.5em;
            border-radius: 4px;
            background-color: #ddd;
        }

        #concerts a:hover {
            background-color: #ccc;
        }
    </style>
</head>
<body>

<header>
    <h1>Strona Muzyczna</h1>
</header>

<nav>
    <a href="../stronaglowna.php">Strona Główna</a>
</nav>

<main>


    <div id="concerts">
        <h2>Koncerty</h2>
        <ul>
            <li><a href="#">Linkin Park</a></li>
            <li><a href="#">Queen</a></li>
            <li><a href="#">The Beatles</a></li>
        </ul>
    </div>

</main>

</body>
</html>
