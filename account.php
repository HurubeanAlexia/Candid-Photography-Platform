<?php
session_start();
include("php/connect.php");
?>
<script src="js/login.js"></script>

<html lang="en">
<head>
<style>
    .delete-button {
        background-color: #ff4d4d; 
        color: white; 
        border: none; 
        padding: 13px 20px; 
        text-align: center; 
        text-decoration: none; 
        display: inline-block; 
        font-size: 14px; 
        margin: 5px 2px; 
        cursor: pointer; 
        border-radius: 5px; 
        transition-duration: 0.4s; 
    }

    .delete-button:hover {
        background-color: white; 
        color: #ff4d4d; 
        border: 1px solid #ff4d4d; 
    }

    .favorites h2{
        margin-bottom: 70px;
        font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-weight: 100;
        margin-left: 8px;
    }
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" href="css/firstPage.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <header class="header">
        <img src="photos/candidLogo2.png" id="logo">
        <nav class="navbar">
            <a href="php/firstPage.php">Home</a>
            <a href="account.php">Account</a>
        </nav>
    </header>
    <div style="text-align:left; padding:15%;" class="info">
        <?php
        if(isset($_SESSION['email'])){
            $email = $_SESSION['email'];
            $query = mysqli_query($conn, "SELECT username, email FROM `users` WHERE email='$email'");
            if($row = mysqli_fetch_assoc($query)){
                echo "<p style='font-size: 40px; font-weight:thin; margin-left: -105px;'>Your Username: " . htmlspecialchars($row['username']) . "</p>";
            }
        }
        ?>
    </div>
    <div class="favorites">
    <h2>Your Favorite Photographers</h2>
    <div id="favorite-photographers"></div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', (event) => {
    let favorites = JSON.parse(localStorage.getItem('favorites')) || [];
    const favoritesContainer = document.getElementById('favorite-photographers');

    function renderFavorites() {
        favoritesContainer.innerHTML = ''; // Clear container before refilling
        favorites.forEach(favorite => {
            const photographerBox = document.createElement('div');
            photographerBox.className = 'photo-box';
            photographerBox.id = favorite.id;

            photographerBox.innerHTML = `
                <div class="photo-image-container">
                    <img src="${favorite.imgSrc}" alt="${favorite.name}" class="photo-image" />
                </div>
                <div class="info">
                    <p class="photo-name"><b>${favorite.name}</b></p>
                    <a href="${favorite.profileLink}"><button class="site-button" id="site-button">Read more</button></a>
                    <button class="delete-button" data-id="${favorite.id}">Delete</button>
                </div>
            `;
            favoritesContainer.appendChild(photographerBox);
        });

        // Add event listeners for delete buttons
        document.querySelectorAll('.delete-button').forEach(button => {
            button.addEventListener('click', deletePhotographer);
        });
    }

    function deletePhotographer(event) {
        const photographerId = event.target.getAttribute('data-id');
        favorites = favorites.filter(favorite => favorite.id !== photographerId);
        localStorage.setItem('favorites', JSON.stringify(favorites));
        renderFavorites();
    }

    renderFavorites();
});

    </script>


    <div class="line3"></div>

    <span class="text3">Contact us</span>

    <div class="icons-container">
    <div class="icons">
        <i class='bx bxl-facebook-circle'></i>
        <i class='bx bxl-instagram-alt' ></i>
        <i class='bx bxl-gmail' ></i>
    </div>
    </div>
</body>
</html>
