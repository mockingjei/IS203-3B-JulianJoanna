<?php
session_start(); // Start the session

// Define the admin PIN (you may want to store this securely)
define('ADMIN_PIN', '1234'); // Change this to your desired PIN

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entered_pin = isset($_POST['pin']) ? $_POST['pin'] : null;

    // Check if the entered PIN matches the defined PIN
    if ($entered_pin === ADMIN_PIN) {
        // Redirect to the signup page for admin
        header("Location: signup.php"); // Change to your admin signup page
        exit();
    } else {
        $_SESSION['error_message'] = "Incorrect PIN. Please try again."; // Store error message in session
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7; /* Light background for better contrast */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background: #e3e3e3;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 300px; /* Set fixed width for the form */
        }

        .header {
            color: #000;
            text-transform: uppercase;
            letter-spacing: 2px;
            display: block;
            font-weight: bold;
            font-size: x-large;
            margin-bottom: 20px; /* Adjust margin */
            text-align: center;
        }

        .inputBox {
            position: relative;
            width: 100%;
            margin-bottom: 15px; /* Less space between input fields */
        }

        .inputBox input {
            width: 100%;
            padding: 10px;
            outline: none;
            border: none;
            color: #000;
            font-size: 1em;
            background: transparent;
            border-bottom: 2px solid #000;
            transition: 0.1s;
        }

        .enter {
            height: 45px;
            width: 100%; /* Full width for button */
            border-radius: 5px;
            border: 2px solid #000;
            cursor: pointer;
            background-color: transparent;
            transition: 0.5s;
            text-transform: uppercase;
            font-size: 12px; /* Slightly larger font size */
            letter-spacing: 2px;
            margin-top: 10px; /* Space above the button */
        }

        .enter:hover {
            background-color: rgb(0, 0, 0);
            color: white;
        }

        .notification {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid transparent;
            border-radius: 5px;
            display: none; /* Hidden by default */
        }
        .error {
            color: red;
            border-color: lightcoral;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        // Display error message
        if (isset($_SESSION['error_message'])) {
            echo '<div class="notification error">' . $_SESSION['error_message'] . '</div>';
            unset($_SESSION['error_message']); // Clear message after displaying
        }
        ?>
        
        <form action="signin.php" method="POST">
            <div class="header">Admin Access</div>
            <div class="inputBox">
                <input type="password" name="pin" required="required" placeholder="Enter PIN">
            </div>

            <button class="enter" type="submit">Enter</button>
        </form>
        <div data-role="footer" align="center">
        <small>Programmed by: Joanna Julian 
     <br>
        Created: 2024</small>
      </div>
    </div>
</body>
</html>
