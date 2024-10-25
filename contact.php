<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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

        .contact-details {
            margin-bottom: 30px;
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
        <a href="home.php">Home</a> <!-- Updated link -->
        <a href="order.php">Order Now</a>
        <a href="contact.php">Contact Us</a>
    </div>

    <div class="container">
        <h1>Contact Us</h1>

        <div class="contact-details">
            <div><strong>Email:</strong> info@example.com</div>
            <div><strong>Phone:</strong> (123) 456-7890</div>
            <div><strong>Address:</strong> 123 Cake Street, Sweet City, SC 12345</div>
        </div>
        <div data-role="footer" align="center">
        <small>Programmed by: Joanna Julian 
     <br>
        Created: 2024</small>
      </div>
    </div>

    <footer>
        &copy; 2024 Cake Shop
    </footer>

</body>
</html>
