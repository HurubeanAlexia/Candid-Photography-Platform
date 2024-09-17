document.addEventListener("DOMContentLoaded", function() {
    var modals = document.querySelectorAll('.modal');
    var buttons = document.querySelectorAll('.portofolio');
    var spans = document.querySelectorAll('.close');

    buttons.forEach(function(button, index) {
        button.onclick = function() {
            modals[index].style.display = "block";
        };
    });

    spans.forEach(function(span) {
        span.onclick = function() {
            modals.forEach(function(modal) {
                modal.style.display = "none";
            });
        };
    });

    window.onclick = function(event) {
        modals.forEach(function(modal) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        });
    };
});
