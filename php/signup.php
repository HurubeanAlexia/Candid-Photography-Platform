<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <link rel="stylesheet" href="../css/register.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    

    <div class="wrapper" id="signUp">
        <form action="registerSignUp.php" method="post">
            <h1>Create account</h1>
            <div class="input-box">
                <div class="entryares">
                    <input class="input" type="text" name="name" id="name" placeholder="Name" required>
                    <i class='bx bx-user' ></i>
                </div>
            </div>
            <div class="input-box">
                <div class="entryares">
                    <input class="input" type="text" name="username" id="username" placeholder="Username" required>
                    <i class='bx bx-user' ></i>
                </div>
            </div>
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
            <div class="input-box">
                <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm password" required>
                <i class='bx bx-lock-alt' ></i>
            </div>

            <button type="submit" class="btn" name="signUp">Sign Up</button>
            <div class="registered-link">
            </div>
        </form>

    <?php
    // Afiseaza mesajul de eroare daca exista
    if (!empty($error)) {
        echo "<script>alert('$error');</script>";
    }
    ?>

    </div>


</body>
</html>