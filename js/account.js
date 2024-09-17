document.addEventListener("DOMContentLoaded", function() {
    // Funcția care se va apela la încărcarea paginii
    loadFavoritePhotos();
});

function loadFavoritePhotos() {
    // Verificăm dacă există fotografii favorite în localStorage
    if (localStorage.getItem('favoritePhotos')) {
        // Parsăm lista de ID-uri din localStorage
        const favoritePhotos = JSON.parse(localStorage.getItem('favoritePhotos'));
        
        // Obținem lista HTML în care vom afișa fotografiile
        const favoriteList = document.getElementById('favorite-list');

        // Curățăm lista pentru a o reîncărca
        favoriteList.innerHTML = '';

        // Parcurgem lista de ID-uri și le afișăm pe pagină
        favoritePhotos.forEach(photoId => {
            // Pentru fiecare ID, putem afișa imaginea corespunzătoare sau informații despre fotograf
            // Am presupus că ai imagini asociate ID-urilor, altfel poți adăuga alte informații în lista de favorite
            const listItem = document.createElement('li');
            listItem.textContent = `Photo ID: ${photoId}`;
            favoriteList.appendChild(listItem);
        });
    }
}

// Adăugăm un eveniment pentru a salva fotografiile favorite în localStorage atunci când butonul este apăsat
const heartButtons = document.querySelectorAll('.heart-button');
heartButtons.forEach(button => {
    button.addEventListener('click', function() {
        const photoId = this.closest('.photo-box').id; // ID-ul fotografiei
        addToFavorites(photoId);
    });
});

function addToFavorites(photoId) {
    // Verificăm dacă există deja fotografii favorite în localStorage
    if (localStorage.getItem('favoritePhotos')) {
        // Parsăm lista de ID-uri din localStorage
        let favoritePhotos = JSON.parse(localStorage.getItem('favoritePhotos'));
        // Verificăm dacă fotografia este deja în lista de favorite
        if (!favoritePhotos.includes(photoId)) {
            // Adăugăm ID-ul fotografiei în lista de favorite
            favoritePhotos.push(photoId);
            // Actualizăm lista în localStorage
            localStorage.setItem('favoritePhotos', JSON.stringify(favoritePhotos));
            // Reîncărcăm lista de favorite pe pagină
            loadFavoritePhotos();
        }
    } else {
        // Dacă nu există nicio fotografie favorită, creăm o nouă listă cu ID-ul fotografiei curente
        const favoritePhotos = [photoId];
        // Salvăm lista în localStorage
        localStorage.setItem('favoritePhotos', JSON.stringify(favoritePhotos));
        // Reîncărcăm lista de favorite pe pagină
        loadFavoritePhotos();
    }
}
