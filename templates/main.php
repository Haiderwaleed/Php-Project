<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Haider Site</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Superfish -->
    <link rel="stylesheet" href="css/superfish.css">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="css/flexslider.css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/nav.css">


    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body style="background-image: url('images/12.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;">

<header id="fh5co-header" role="banner">
    <div class="container text-center">
      <div id="fh5co-logo">
            <a href="./"><img src="images/logo1.png" ></a>
        </div>
    </div>

    <div class="container lightGreen pullDown">

        <nav>
            <ul>
                <?= pages() ?>
            </ul>

        </nav>
    </div>
</header>
<!-- END #fh5co-header -->


<?= $content;  ?>



<footer id="fh5co-footer" role="contentinfo">
    <div class="container-fluid">
        <div class="footer-content">
            <div class="copyright"><small>&copy; <?= date('Y'); ?> Sandibel. All Rights Reserved. <br>Designed by Haider Waleed</small></div>
        </div>
    </div>
</footer>
<!-- END #fh5co-footer -->

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- masonry -->
<script src="js/jquery.masonry.min.js"></script>
<!-- MAIN JS -->
<script src="js/main.js"></script>

</body>
</html>

