<?php
if(end(explode('/', $_SERVER['SCRIPT_URL'])) == 'index.php')
    $main_link = 'href="#" data-nav-section="home"';
else
    $main_link = 'href="index.php"';
?>
<div id="fh5co-offcanvass">
    <ul>
        <li class="active"><a <?= $main_link; ?>>Главная</a></li>
        <li><a href="index.php#fh5co-clients" data-nav-section="benefits">Об институте</a></li>
        <li><a href="index.php#fh5co-features" data-nav-section="features">Факультеты</a></li>
        <li><a href="structure.php?page=college#content-start">Колледж</a></li>
        <li><a href="structure.php?page=documents#content-start">Документы</a></li>
        <li><a href="index.php#fh5co-faqs" data-nav-section="faqs">Вопросы и ответы</a></li>
        <li><a href="index.php#fh5co-features-2" data-nav-section="design">Контакты</a></li>
    </ul>
    <!--<h3 class="fh5co-lead">Свяжитесь с нами</h3>
        <p class="fh5co-social-icons">
                        <a href="#"><i class="icon-twitter"></i></a>
                        <a href="#"><i class="icon-facebook"></i></a>
                        <a href="#"><i class="icon-instagram"></i></a>
                        <a href="#"><i class="icon-dribbble"></i></a>
                        <a href="#"><i class="icon-youtube"></i></a>
        </p>     -->
</div>
<div id="fh5co-menu" class="navbar">
    <a  href="#"
    class="js-fh5co-nav-toggle fh5co-nav-toggle"
    data-toggle="collapse"
    data-target="#fh5co-navbar"
    aria-expanded="false"
    aria-controls="fh5co-menu">
    <i></i>
    </a>
    <!--<div class="container">
        <div class="row">
            <div class="col-md-12">
                <a  href="#"
                    class="js-fh5co-nav-toggle fh5co-nav-toggle"
                    data-toggle="collapse"
                    data-target="#fh5co-navbar"
                    aria-expanded="false"
                    aria-controls="navbar">
                    <span>Меню</span><i></i>
                    </a>
                <a href="index.php" class="navbar-brand" style="padding: 0">
                    <img
                    src="images/emblems/dongti.png"
                    alt="ДонГТИ"
                    style="height: 0px; vertical-align: middle;"/>
                </a>
            </div>
        </div>
    </div>-->
</div>





