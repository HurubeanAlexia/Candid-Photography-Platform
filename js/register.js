document.addEventListener('DOMContentLoaded', function() {
    const registerLink = document.querySelector('.registered-link a');

    registerLink.addEventListener('click', function(event) {
        event.preventDefault(); 

        window.location.href = 'signup.php';
    });
});
