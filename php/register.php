<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <link rel="stylesheet" href="../css/register.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="../js/register.js"></script>

</head>
<body>
    

    <div class="wrapper" id="logIn">
        <form action="registerLogIn.php" method="post">
            <h1>Login</h1>
            <div class="input-box">
                <div class="entryares">
                    <input class="input" type="text" name="email" id="email" placeholder="Email" required>
                    <i class='bx bx-envelope'></i>
                </div>
            </div>
            <div class="input-box">
                <input type="password" name="password" id="password" placeholder="Password" required>
                <i class='bx bx-lock-alt' ></i>
            </div>

            <button type="submit" class="btn" name="login">Login</button>
            <div class="registered-link">
                <p>Don't have an account? <a href="signup.php">Register</a></p>
            </div>
        </form>

    </div>


</body>
</html>