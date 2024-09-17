<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Page</title>
    <link rel="stylesheet" href="../css/firstPage.css">
    <script src="../js/account.js"></script>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    

</head>

<style>
    
.search-container {
    text-align: center;
    margin-top: 50px;
}

#search-bar {
    padding: 10px;
    border-radius: 10px;
    border: 1px solid #ccc;
    width: 320px;
}

#search-bar:focus {
    outline: none;
}

.search-container button {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    background-color: #30c8d0;
    color: white;
    cursor: pointer;
}

.search-container button:hover {
    background-color: #00a7b3;
}

</style>

<body>
    <header class="header" >
       
        <img src="../photos/candidLogo2.png" id="logo"> 
        <nav class="navbar">
            <a href="#">Home</a>
            <a href="../account.php">Account</a>
            
        </nav>
        <a href="../html/index.html" class="loginButton">
            <span>Logout</span>
            <svg width="13px" height="10px" viewBox="0 0 13 10">
              <path d="M1,5 L11,5"></path>
              <polyline points="8 1 12 5 8 9"></polyline>
            </svg>
        </a>
    
        
        
    
    </header>

    <div class="first-photo">
        <img src="../photos/firstPage.png" id="firstPhoto">
    </div>

    <div class="line"></div>

    <span class="text1">Look for the perfect photographer for your photo session</span>

    <div class="search-container">
        <input type="text" id="search-bar" placeholder="Search by photographer name">
        <button onclick="searchPhotographer()">Search</button>
    </div>

    
    


    <div class="all-photo">
        <div class="photo-box" id="aria">
            <div class="photo-image-container">
                <img src="../photographers/photos/fotograf1.jpg" title="Carter" class="photo-image">
            </div>
            <div class="info">
                <p class="photo-name"><b>Carter Aria</b></p>
                <a href="../photographers/photographer2.html"><button class="site-button" id="site-button">Read more</button></a>            
            </div>
            <button class="heart-button" onclick="toggleFavorite('aria', 'Carter Aria', 'photographers/photos/fotograf1.jpg', 'photographers/photographer2.html')">
                <svg class="heart-icon" viewBox="0 0 24 24">
                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                </svg>
            </button>
        </div>
        

        <div class="photo-box" id="louis">
            <div class="photo-image-container">
                <img src="../photographers/photos/fotograf5.jpg"Louis" class="photo-image">
            </div>
            <div class="info">
                <p class="photo-name"><b>Louis Marcus</b></p>
                <a href="../photographers/photographer.html"><button class="site-button" id="site-button">Read more</button></a>            
            </div>
            <button class="heart-button" onclick="toggleFavorite('louis', 'Louis Marcus', 'photographers/photos/fotograf5.jpg', 'photographers/photographer.html')">
                <svg class="heart-icon" viewBox="0 0 24 24">
                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                </svg>
            </button>
        </div>

        <div class="photo-box" id="anna">
            <div class="photo-image-container">
                <img src="../photographers/photos/fotograf4.jpg" title="Louis" class="photo-image">
            </div>
            <div class="info">
                <p class="photo-name"><b>Anna Russo</b></p>
                <a href="../photographers/photographer3.html"><button class="site-button" id="site-button">Read more</button></a>            
            </div>
            <button class="heart-button" onclick="toggleFavorite('anna', 'Anna Russo', 'photographers/photos/fotograf4.jpg', 'photographers/photographer3.html')">
                <svg class="heart-icon" viewBox="0 0 24 24">
                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                </svg>
            </button>
        </div>

        <div class="photo-box" id="gabriel">
            <div class="photo-image-container">
                <img src="../photographers/photos/fotograf6.jpg" title="Louis" class="photo-image">
            </div>
            <div class="info">
                <p class="photo-name"><b>Gabriel Alton</b></p>
                <a href="../photographers/photographer4.html"><button class="site-button" id="site-button">Read more</button></a>            
            </div>
            <button class="heart-button" onclick="toggleFavorite('gabriel', 'Gabriel Alton', 'photographers/photos/fotograf6.jpg', 'photographers/photographer4.html')">
                <svg class="heart-icon" viewBox="0 0 24 24">
                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                </svg>
            </button>
        </div>

        <div class="photo-box" id="jacob">
            <div class="photo-image-container">
                <img src="../photographers/photos/fotograf7.jpg" title="Louis" class="photo-image">
            </div>
            <div class="info">
                <p class="photo-name"><b>Jacob Ethan</b></p>
                <a href="../photographers/photographer5.html"><button class="site-button" id="site-button">Read more</button></a>            
            </div>
            <button class="heart-button" onclick="toggleFavorite('jacob', 'Jacob Ethan', 'photographers/photos/fotograf7.jpg', 'photographers/photographer5.html')">
                <svg class="heart-icon" viewBox="0 0 24 24">
                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                </svg>
            </button>
        </div>

        <div class="photo-box" id="emma">
            <div class="photo-image-container">
                <img src="../photographers/photos/fotograf8.jpg" title="Louis" class="photo-image">
            </div>
            <div class="info">
                <p class="photo-name"><b>Emma William</b></p>
                <a href="../photographers/photographer6.html"><button class="site-button" id="site-button">Read more</button></a>            
            </div>
            <button class="heart-button" onclick="toggleFavorite('emma', 'Emma William', 'photographers/photos/fotograf8.jpg', 'photographers/photographer6.html')">
                <svg class="heart-icon" viewBox="0 0 24 24">
                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                </svg>
            </button>
        </div>

        <div class="photo-box" id="jayden">
            <div class="photo-image-container">
                <img src="../photographers/photos/fotograf9.jpg" title="Louis" class="photo-image">
            </div>
            <div class="info">
                <p class="photo-name"><b>Jayden Alexander</b></p>
                <a href="../photographers/photographer7.html"><button class="site-button" id="site-button">Read more</button></a>            
            </div>
            <button class="heart-button" onclick="toggleFavorite('jayden', 'Jayden Alexander', 'photographers/photos/fotograf9.jpg', 'photographers/photographer7.html')">
                <svg class="heart-icon" viewBox="0 0 24 24">
                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                </svg>
            </button>
        </div>

        <div class="photo-box">
            <div class="photo-image-container" id="logan">
                <img src="../photographers/photos/fotograf10.jpg" title="Louis" class="photo-image">
            </div>
            <div class="info">
                <p class="photo-name"><b>Logan Jackson</b></p>
                <a href="../photographers/photographer8.html"><button class="site-button" id="site-button">Read more</button></a>            
            </div>
            <button class="heart-button" onclick="toggleFavorite('logan', 'Logan Jackson', 'photographers/photos/fotograf10.jpg', 'photographers/photographer8.html')">
                <svg class="heart-icon" viewBox="0 0 24 24">
                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                </svg>
            </button>
        </div>

        <div class="photo-box" id="joseph">
            <div class="photo-image-container">
                <img src="../photographers/photos/fotograf11.jpg" title="Louis" class="photo-image">
            </div>
            <div class="info">
                <p class="photo-name"><b>Joseph Michael</b></p>
                <a href="../photographers/photographer9.html"><button class="site-button" id="site-button">Read more</button></a>            
            </div>
            <button class="heart-button" onclick="toggleFavorite('joseph', 'Joseph Michael', 'photographers/photos/fotograf11.jpg', 'photographers/photographer9.html')">
                <svg class="heart-icon" viewBox="0 0 24 24">
                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                </svg>
            </button>
        </div>

        <div class="photo-box" id="olivia">
            <div class="photo-image-container">
                <img src="../photographers/photos/fotograf12.jpg" title="Louis" class="photo-image">
            </div>
            <div class="info">
                <p class="photo-name"><b>Olivia James</b></p>
                <a href="../photographers/photographer10.html"><button class="site-button" id="site-button">Read more</button></a>            
            </div>
            <button class="heart-button" onclick="toggleFavorite('olivia', 'Olivia James', 'photographers/photos/fotograf12.jpg', 'photographers/photographer10.html')">
                <svg class="heart-icon" viewBox="0 0 24 24">
                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                </svg>
            </button>
        </div>

        <div class="photo-box" id="ava">
            <div class="photo-image-container">
                <img src="../photographers/photos/fotograf13.jpg" title="Louis" class="photo-image">
            </div>
            <div class="info">
                <p class="photo-name"><b>Ava Owen</b></p>
                <a href="../photographers/photographer11.html"><button class="site-button" id="site-button">Read more</button></a>            
            </div>
            <button class="heart-button" onclick="toggleFavorite('ava', 'Ava Owen', 'photographers/photos/fotograf13.jpg', 'photographers/photographer11.html')">
                <svg class="heart-icon" viewBox="0 0 24 24">
                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                </svg>
            </button>
        </div>
    </div>

    <div class="line3"></div>

      <span class="text3">Contact us</span>

      <div class="icons-container">
        <div class="icons">
          <i class='bx bxl-facebook-circle'></i>
          <i class='bx bxl-instagram-alt' ></i>
          <i class='bx bxl-gmail' ></i>
        </div>
      </div>

      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>  
      <script>
        function searchPhotographer() {
        var filter = $('#search-bar').val().toUpperCase();
        $('.photo-box').each(function() {
            var photoName = $(this).find('.photo-name').text().toUpperCase();
            if (photoName.indexOf(filter) > -1) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
        }

        $(document).ready(function() {
            $('#search-bar').on('keyup', searchPhotographer);
        });

        function toggleFavorite(id, name, imgSrc, profileLink) {
            let favorites = JSON.parse(localStorage.getItem('favorites')) || [];
            const index = favorites.findIndex(fav => fav.id === id);

            if (index > -1) {
                favorites.splice(index, 1);
            } else {
                favorites.push({ id, name, imgSrc, profileLink });
            }

            localStorage.setItem('favorites', JSON.stringify(favorites));
        }
    </script>
      
</body>
</html>