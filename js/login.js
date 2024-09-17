document.addEventListener('DOMContentLoaded', function() {
    const loginButton = document.querySelector('.loginButton');

    loginButton.addEventListener('click', function(event) {
        event.preventDefault();

        window.location.href = 'register.php';
    });
});
