// '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
$(window).on("load resize ", function() {
    var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
    $('.tbl-header').css({ 'padding-right': scrollWidth });
}).resize();
$(function() {
    $('.hamburger-menu').click(function() {
        $('.sliding-navbar').toggleClass('sliding-navbar--open');
        $('.mask').toggleClass('show')
        $('.hamburger').toggleClass('menu-opened');
    });

    $('.mask').click(function() {
        $('.sliding-navbar').toggleClass('sliding-navbar--open');
        $('.mask').removeClass('show');
        $('.hamburger').toggleClass('menu-opened');
    })
});