$(document).ready(function(){
    adjustImageSizes();

    $(window).resize(function(){
        adjustImageSizes();
    });
});

function adjustImageSizes() {
    var maxHeight = $('.carousel').height();

    $('.carousel img').each(function(){
        $(this).css('max-height', maxHeight);
    });
}
