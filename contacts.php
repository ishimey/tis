<?php
session_start();

// Database connection
$connection = new mysqli("localhost", "root", "", "tourism");

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$success = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $subject = trim($_POST["subject"]);
    $message = trim($_POST["message"]);

    if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {

        $stmt = $connection->prepare("INSERT INTO contact_messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $subject, $message);

        if ($stmt->execute()) {
            $success = "Message sent successfully!";
        } else {
            $error = "Something went wrong. Try again.";
        }

        $stmt->close();
    } else {
        $error = "All fields are required.";
    }
}

$connection->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us - Tourism Information System</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            padding: 20px;
        }
        .container {
            width: 500px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px gray;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
        }
        button {
            padding: 10px;
            width: 100%;
            background: green;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background: darkgreen;
        }
        .success { color: green; }
        .error { color: red; }
        a {
            text-decoration: none;
            color: blue;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>Contact Us</h2>

    <?php if ($success) echo "<p class='success'>$success</p>"; ?>
    <?php if ($error) echo "<p class='error'>$error</p>"; ?>

    <form method="POST" action="">
        <label>Name:</label>
        <input type="text" name="name" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Subject:</label>
        <input type="text" name="subject" required>

        <label>Message:</label>
        <textarea name="message" rows="5" required></textarea>

        <button type="submit">Send Message</button>
    </form>

    <br>
    <a href="index.php">⬅ Back to Home</a>
</div>

</body>
</html>
