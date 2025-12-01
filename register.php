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
            <form>
                <label for="">
                Username
                <input id="username" type="text" placeholder="Username" required />
                </label>
                <label for="">
                    email
                <input type="email" placeholder="Email" required />
                </label>
                <label for="">
                    password
                <input type="password" placeholder="Password" required />
                </label>
                <label for="">
                  confirm  password
                <input type="password" placeholder="Password" required />
                </label>
                <button type="submit">Sign Up</button>
            </form>
        </div>
<script src="./public/register.js"></script>
    </body>
</html>
