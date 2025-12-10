<?php 
$conn = mysqli_connect("localhost", "root", "", "tourism");
session_start();

if (isset($_POST['submit'])) {

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $encrypt = md5($password);

    $sql = "INSERT INTO users (name, email, password) 
            VALUES ('$username', '$email', '$encrypt')";

  if(mysqli_query($conn, $sql)){
    $_SESSION['username']=$username;
    header("location: index.php");
  }
  else{
    $_SESSION['username']= $username;
    http_response_code(500);
  }
}

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Register Page</title>
        <link rel="stylesheet" type="text/css" href="./public/register.css" />
    </head>
    <body>
        <div class="register-box">
            <h2>Register</h2>
            <form action="" method="post" >
                <label for="">
                Username
                <input name="username" type="text" placeholder="Username"  required />
                </label>
                <label for="">
                    email
                <input name="email" type="email" placeholder="Email" required />
                </label>
                <label for="">
                    password
                <input name="password" type="password" placeholder="Password" required />
                </label>
                <label for="">
                  confirm  password
                <input name="repassword" type="password" placeholder="Password" required />
                </label>
                <button name="submit" type="submit">Sign Up</button>
            </form>
        </div>
<script src="./public/register.js"></script>
    </body>
</html>