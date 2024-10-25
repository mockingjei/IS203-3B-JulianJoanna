<?php
session_start(); // Start the session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost"; // Change if needed
    $username = "root"; // Your database username
    $password = ""; // Your database password
    $dbname = "joanna"; // Your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data
    $username = isset($_POST['username']) ? $_POST['username'] : null;
    $password = isset($_POST['password']) ? $_POST['password'] : null; // Password input (not hashed yet)

    // Check if the values are set
    if ($username && $password) {
        // Prepare and bind
        $stmt = $conn->prepare("SELECT password FROM sign WHERE username = ?");
        $stmt->bind_param("s", $username);

        // Execute the statement
        $stmt->execute();
        $stmt->store_result();
        
        // Check if the username exists
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($hashed_password);
            $stmt->fetch();

            // Verify the password
            if (password_verify($password, $hashed_password)) {
                $_SESSION['success_message'] = "Login successful!"; // Store message in session
                header("Location: welcome.php"); // Redirect to a welcome page
                exit();
            } else {
                $_SESSION['error_message'] = "Invalid password."; // Store error message in session
            }
        } else {
            $_SESSION['error_message'] = "Username not found."; // Store error message in session
        }

        $stmt->close();
    } else {
        $_SESSION['error_message'] = "All fields are required."; // Store error message in session
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

        .singup {
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
            margin-bottom: 10px; /* Adjust space to login hyperlink */
        }

        .enter:hover {
            background-color: rgb(0, 0, 0);
            color: white;
        }

        .login-link {
            text-align: center; /* Center the link */
            margin-top: 10px; /* Reduce space above the link */
        }

        .notification {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid transparent;
            border-radius: 5px;
            display: none; /* Hidden by default */
        }
        .success {
            color: green;
            border-color: lightgreen;
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
        // Display success message
        if (isset($_SESSION['success_message'])) {
            echo '<div class="notification success">' . $_SESSION['success_message'] . '</div>';
            unset($_SESSION['success_message']); // Clear message after displaying
        }

        // Display error message
        if (isset($_SESSION['error_message'])) {
            echo '<div class="notification error">' . $_SESSION['error_message'] . '</div>';
            unset($_SESSION['error_message']); // Clear message after displaying
        }
        ?>
        
        <form action="index.php" method="POST">
            <a class="singup">Admin</a>
            <div class="inputBox">
                <input type="text" name="username" required="required" placeholder="Username">
            </div>

            <div class="inputBox">
                <input type="password" name="password" required="required" placeholder="Password">
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
