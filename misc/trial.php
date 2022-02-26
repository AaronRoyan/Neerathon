<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./trial.css">
    <script type="text/javascript" href="./trial.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <title>Document</title>
</head>

<body>
    
    <section class="main-content">
        <div class="content-wrapper">
            <p class="desc">Sliding menu</p>
        </div>
    </section>
</body>
<script>
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
</script>
</body>

</html>