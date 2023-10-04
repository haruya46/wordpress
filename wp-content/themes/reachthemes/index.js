$('.nav-menu-mo').click(function () {
    $('.msk').fadeIn();
    $('.msk2').fadeIn();
    $('.nav-menu-mo').fadeOut();
});
$('.nav-menu2 li').click(function () {
    $('.msk').fadeOut();
    $('.msk2').fadeOut();
    $('.nav-menu-mo').fadeIn();
});
$('.msk2').click(function () {
    $('.msk').fadeOut();
    $('.msk2').fadeOut();
    $('.nav-menu-mo').fadeIn();
});
$('.msk').click(function () {
    $('.msk').fadeOut();
    $('.msk2').fadeOut();
    $('.nav-menu-mo').fadeIn();
});