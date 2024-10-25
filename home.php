<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Cakes</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            background-color: #e3e3e3;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar a {
            color: #000;
            text-decoration: none;
            margin: 0 15px;
            font-weight: 500;
        }

        .navbar button {
            background-color: #FF6F61;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 500;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #000;
        }

        .cake {
            display: flex;
            justify-content: space-between;
            padding: 15px;
            border-bottom: 1px solid #ddd;
        }

        .cake:last-child {
            border-bottom: none; /* Remove border for the last item */
        }

        .cake-name {
            font-weight: bold;
            font-size: 1.2em;
        }

        .cake-price {
            color: #FF6F61;
            font-size: 1.2em;
        }

        footer {
            text-align: center;
            padding: 10px;
            background-color: #e3e3e3;
            color: #000;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <a href="cakes_home.php">Home</a>
        <a href="order.php">Order Now</a>
        <a href="contact.php">Contact Us</a>
        <form method="POST" action="logout2.php" style="display:inline;">
            <button type="submit">Logout</button>
        </form>
    </div>

    <div class="container">
        <h1>Available Cakes</h1>

        <div class="cake">
            <div class="cake-name">Chocolate Cake</div>
            <div class="cake-price">$25</div>
        </div>

        <div class="cake">
            <div class="cake-name">Vanilla Cake</div>
            <div class="cake-price">$20</div>
        </div>

        <div class="cake">
            <div class="cake-name">Red Velvet Cake</div>
            <div class="cake-price">$30</div>
        </div>

        <div class="cake">
            <div class="cake-name">Lemon Drizzle Cake</div>
            <div class="cake-price">$22</div>
        </div>

        <div class="cake">
            <div class="cake-name">Carrot Cake</div>
            <div class="cake-price">$28</div>
        </div>
    </div>

    <footer>
        <div data-role="footer" align="center">
            <small>Programmed by: Joanna Julian <br>
            Created: 2024</small>
        </div>
    </footer>

</body>
</html>
