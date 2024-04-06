<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona Muzyczna</title>
    <style>
        body {
            background: url("imagine/tlo1.jpg") no-repeat center center fixed;
            background-size: cover;
            font-family: 'Arial', sans-serif;
            margin: 100;
            padding: 100;
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

        .content-section {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 1em;
            border-radius: 4px;
            width: 65%;
            margin-bottom: 2%;
        }
    </style>