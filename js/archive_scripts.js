$(document).ready(function() {
    $('.header_burger').click(function (event) { 
        $('.header-menu').append((document).getElementsByClassName('banner-feedback-link'));

        $('.header_burger, .header-menu').toggleClass('active');        
    });

    if ($(document).width() <= 1250) {
        $('#second_title').css('display', 'flex');
    }
    else{
        $('#second_title').css('display', 'none');
    } 
    
    /* Функция resize запускает функцию при изменении масшатаба*/
    $(window).resize(function() {
        if ($(document).width() <= 1250) {
            $('#second_title').css('display', 'flex');
        }
        else{
            $('#second_title').css('display', 'none');
        } 
    });
});