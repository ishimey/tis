<?php
// Database connection
$servername = "localhost";
$username = "root";   // change if needed
$password = "";       // change if needed
$dbname = "tourism"; // your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $confirm_pass = $_POST['confirm_password'];

    // Validate password match
    if ($pass !== $confirm_pass) {
        $message = "❌ Passwords do not match.";
    } else {
        // Hash password
        $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

        // Insert into database
        $sql = "INSERT INTO users (fullname, email, username, password) 
                VALUES ('$fullname', '$email', '$user', '$hashed_pass')";

        if ($conn->query($sql) === TRUE) {
            $message = "✅ Registration successful! <a href='login.php'>Login here</a>";
        } else {
            $message = "❌ Error: " . $conn->error;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tourism Information System - Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="register-container">
        <h2>Register</h2>
        <?php if (!empty($message)) { echo "<p class='msg'>$message</p>"; } ?>
        <form action="" method="POST">
            <label for="fullname">Full Name</label>
            <input type="text" id="fullname" name="fullname" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm_password">Confirm Password</label>
            <input type="password" id="confirm_password" name="confirm_password" required>

            <button type="submit">Register</button>
        </form>
        <p>Already have an account? <a href="login.php">Login here</a></p>
    </div>
</body>
</html>
