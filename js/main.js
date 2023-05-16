$(document).ready(function() {
    $('.header_burger').click(function (event) { 
        $('.header-menu').append((document).getElementsByClassName('banner-feedback-link'));

        $('.header_burger, .header-menu').toggleClass('active');        
    });

    if ($(document).width() <= 768) {
        $('.header-banner').append((document).getElementsByClassName('brand-textbox-top'));
    }
});
