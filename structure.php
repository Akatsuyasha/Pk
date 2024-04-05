<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Приёмная комиссия ДонГТИ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Приёмная комиссия ДонГТИ" />
    <meta name="keywords" content="приёмная комиссия, ДонГТИ, прием, абитуриент, институт" />
    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="Приёмная комиссия ДонГТИ" />
    <meta property="og:image" content="http://pk.dstu.education/images/emblems/emblem.png" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="Приёмная комиссия ДонГТИ" />
    <meta name="twitter:image" content="http://pk.dstu.education/images/emblems/emblem.png" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />
    <link rel="shortcut icon" href=/images/favicon.ico" type="image/x-icon">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Google Webfonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Simple Line Icons-->
    <link rel="stylesheet" href="css/simple-line-icons.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- Salvattore 
	<link rel="stylesheet" href="css/salvattore.css">-->
    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>
    <?php require_once("templates/navbar.php");?>
    <div id="fh5co-page">
        <div id="fh5co-wrap">
            <?php require_once("templates/header.php");?>
            <div id="fh5co-main">
                <?php require_once("templates/socialbar.php");?>
                <div id = "content-start">
                    <?php
                    require_once($_GET['page'] . ".php")
                    ?>
                </div>
            </div>
        </div>
        <?php require_once("templates/footer.php");?>
    </div>


    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Magnific Popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- Owl Carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- toCount -->
    <script src="js/jquery.countTo.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>



    <script type="text/javascript">
        $(document).on('click', 'li', function() {
            $('li').removeClass('active');
            $('ul').toggleClass('expanded');
            $(this).addClass('active');
            var tab_id = $(this).attr('data-tab');
            $('.tab-content').removeClass('current');
            $(this).addClass('current');
            $('#' + tab_id).addClass('current');
        });

        $('.question-row').on('click', function() {
            $(this).toggleClass('opened');
            $(this).next().toggle();
        })
    </script>
</body>

</html>