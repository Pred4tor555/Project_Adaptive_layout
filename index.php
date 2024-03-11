<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhotoArena</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        nav {
            background-color: #444;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        nav ul {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        section {
            padding: 20px;
            background-color: #fff;
            margin-top: 20px;
            border-radius: 5px;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        /* Адаптивные стили */
        @media (max-width: 800px) {
            .container {
                padding: 10px;
            }
            nav ul li {
                display: block;
                margin: 10px 0;
            }
        }

        @media (max-width: 600px) {
            header h1 {
                font-size: 24px;
            }
            section {
                padding: 10px;
            }
        }
    </style>
</head>

<body>
<header>
    <h1>Welcome to PhotoArena</h1>
</header>

<nav>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
</nav>

<div class="container">
    <section>
        <h2>Latest Photos</h2>
        <div class="photo-gallery">

        </div>
    </section>

    <section>
        <h2>About PhotoArena</h2>
        <p>Welcome to PhotoArena, your ultimate destination for stunning photography.</p>
    </section>
</div>

<footer>
    <p>&copy; 2024 PhotoArena. All rights reserved.</p>
</footer>
</body>
</html>
