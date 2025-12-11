<?php
session_start();

// Database connection
$connection = new mysqli("localhost", "root", "", "tourism");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$success = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $hotel_name = trim($_POST["hotel_name"]);
    $location = trim($_POST["location"]);
    $price = trim($_POST["price"]);
    $features = trim($_POST["features"]);

    // Validate
    if (empty($hotel_name) || empty($location) || empty($price) || empty($features)) {
        $error = "All fields are required!";
    } elseif (!is_numeric($price) || $price <= 0) {
        $error = "Price must be a positive number!";
    } else {
        // IMAGE UPLOAD
        $imageName = "";
        if (!empty($_FILES["image"]["name"])) {
            $targetDir = "uploads/";
            if (!is_dir($targetDir)) {
                mkdir($targetDir, 0777, true);
            }

            $imageName = time() . "_" . basename($_FILES["image"]["name"]);
            $targetFile = $targetDir . $imageName;

            $allowedTypes = ["jpg", "jpeg", "png"];
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            if (in_array($imageFileType, $allowedTypes)) {
                move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);
            } else {
                $error = "Only JPG, JPEG and PNG images allowed!";
            }
        }

        if (empty($error)) {
            $stmt = $connection->prepare("INSERT INTO hotels (hotel_name, location, price_per_night, features, image) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("ssiss", $hotel_name, $location, $price, $features, $imageName);

            if ($stmt->execute()) {
                $success = "Hotel added successfully!";
            } else {
                $error = "Something went wrong!";
            }
            $stmt->close();
        }
    }
}

$connection->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Hotel - Tourism Information System</title>

    <style>
        body {
            background: #f7f7f7;
            font-family: Arial;
            padding: 20px;
        }
        .container {
            width: 550px;
            margin: auto;
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px gray;
        }
        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
        }
        button {
            width: 100%;
            padding: 12px;
            background: green;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
        }
        button:hover {
            background: darkgreen;
        }
        .success { color: green; }
        .error { color: red; }
    </style>
</head>
<body>

<div class="container">
    <h2>Add Hotel Details</h2>

    <?php if ($success) echo "<p class='success'>$success</p>"; ?>
    <?php if ($error) echo "<p class='error'>$error</p>"; ?>

    <form method="POST" enctype="multipart/form-data">

        <label>Hotel Name:</label>
        <input type="text" name="hotel_name" required>

        <label>Location:</label>
        <input type="text" name="location" required>

        <label>Price Per Night (Rs):</label>
        <input type="number" name="price" min="1" required>

        <label>Features: (Comma separated)</label>
        <textarea name="features" placeholder="Wifi, AC, Breakfast, Swimming Pool" required></textarea>

        <label>Hotel Image:</label>
        <input type="file" name="image" accept="image/*">

        <button type="submit">Add Hotel</button>
    </form>

    <br>
    <a href="index.php">⬅ Back to Home</a>
</div>

</body>
</html>
