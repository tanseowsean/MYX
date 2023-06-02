// Begin JS

$('.hamburger').click(function () {
    $('.mobile-menu').addClass('active');
});

$('.mobile-menu .close').click(function () {
    $('.mobile-menu').removeClass('active');
});