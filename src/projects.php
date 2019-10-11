<?php
header('Content-type: text/html; charset=utf-8');
error_reporting(-1);
require_once 'engine/https.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Проекты и скрипты</title>
    <meta property="og:title" content="Сайт-портфолио Николая Александрова">
    <meta property="og:type" content="website">
    <meta property="og:image" content="assets/img/avatars/avatar.jpg?h=a6dc828db199f191db08f91d9df2b728">
    <link rel="icon" type="image/jpeg" sizes="800x800" href="assets/img/avatars/avatar.jpg?h=a6dc828db199f191db08f91d9df2b728">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css?h=cdd1c50020433e1e93b8970029ea55a5">
    <link rel="manifest" href="manifest.json?h=eed4d16da80411bc190c3c04527f71d5">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Asul">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css?h=cfa788754642173dafbd830bd7969fdb">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css?h=cfa788754642173dafbd830bd7969fdb">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css?h=cfa788754642173dafbd830bd7969fdb">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css?h=cfa788754642173dafbd830bd7969fdb">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css?h=9392210a302cd19ebe21c19f07c6300e">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white d-xl-flex portfolio-navbar gradient" style="height: 70px;padding: 0;padding-bottom: 0;">
        <div class="container"><a class="navbar-brand logo" href="#"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navbarNav"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navbarNav">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="https://codepool.ru/">Главная</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="about.php">Об опыте и мне</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="projects.php">Проекты</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="contact.php">Связаться</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link border rounded" href="emergency.php" style="color: rgb(255,255,255);background-color: #c50101;">Срочная связь</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page projets-page">
        <section class="portfolio-block project-no-images">
            <div class="container">
                <div class="heading">
                    <h2 style="margin-bottom: -20px;">Проекты и скрипты&nbsp;<i class="fa fa-question-circle-o" style="color: rgb(0,128,255);" data-toggle="tooltip" title="Зеленые иконки - я непосредственно работал со стэком, синие - легкая/не моя работа/другая технология из стэков проекта."></i></h2>
                </div>
                <div></div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="project-card-no-image" style="background-color: #f2f2f2;">
                            <h3 style="font-size: 16px;">Education Flow Prototype&nbsp;<small class="text-uppercase" style="font-weight: bold;color: rgb(255,100,0);">DROPPED</small>&nbsp;</h3>
                            <h4 style="font-size: 13px;">Платформа для взаимодействия между образовательными учреждениями, работодателями, студентами и государством.</h4><a href="#"><a class="btn btn-outline-primary btn-sm" role="button" href="#" style="background-color: #8000ff;"><i class="far fa-file-powerpoint"></i>&nbsp; &nbsp;Presentation</a></a>
                            <i
                                class="fa fa-database" style="cursor: help;color: rgb(0,220,20);padding-left: 0px;padding-right: 2px;font-size: 19px;margin-left: 25px;" data-toggle="tooltip" data-placement="top" title="PostgreSQL"></i><i class="fab fa-python" style="cursor: help;color: rgb(0,220,20);padding-left: 0;padding-right: 2px;font-size: 19px;margin-left: 0;" data-toggle="tooltip" data-placement="top" title="Python 3"></i><i class="fab fa-css3-alt"
                                    style="cursor: help;color: rgb(0,100,220);padding-left: 0;padding-right: 2px;font-size: 19px;" data-toggle="tooltip" data-placement="top" title="CSS3"></i><i class="fa fa-html5" style="cursor: help;color: rgb(0,100,220);padding-left: 0;padding-right: 2px;font-size: 19px;"
                                    data-toggle="tooltip" data-placement="top" title="HTML5"></i><i class="fab fa-php" style="cursor: help;color: rgb(0,100,220);padding-left: 0;padding-right: 2px;font-size: 19px;" data-toggle="tooltip" data-placement="top"
                                    title="PHP7"></i></div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="project-card-no-image" style="background-color: #f2f2f2;">
                            <h3 style="font-size: 16px;">KNSTRKT&nbsp;<small class="text-uppercase" style="font-weight: bold;color: rgb(75,200,0);">DEV</small></h3>
                            <h4 style="font-size: 13px;">Связка самописных бота и веб-сервиса для легкого менеджмента вашего discord сервера, где бы вы ни были.<br></h4><a href="#"><a class="btn btn-outline-primary btn-sm" role="button" href="#" style="background-color: #000000;"><i class="fab fa-git" style="color: rgb(255,255,255);"></i>&nbsp; &nbsp;GitHub</a></a>
                            <i
                                class="fas fa-database" style="cursor: help;color: rgb(0,220,20);margin-left: 25px;padding-right: 2px;font-size: 19px;" data-toggle="tooltip" title="MySQL" data-placement="bottom"></i><i class="fab fa-python" style="cursor: help;color: rgb(0,220,20);padding-right: 2px;font-size: 19px;" data-toggle="tooltip" title="Python 3" data-placement="bottom"></i><i class="fab fa-css3-alt" style="cursor: help;color: rgb(0,220,20);padding-right: 2px;font-size: 19px;"
                                    data-toggle="tooltip" title="CSS3" data-placement="bottom"></i><i class="fab fa-html5" style="cursor: help;color: rgb(0,220,20);padding-left: 0;padding-right: 2px;font-size: 19px;" data-toggle="tooltip" title="HTML5" data-placement="bottom"></i>
                                <div
                                    class="tags"></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="project-card-no-image" style="background-color: #f2f2f2;">
                        <h3 style="font-size: 16px;">CODEPOOL &nbsp;<small class="text-uppercase" style="font-weight: bold;color: rgb(75,200,0);">DEV</small></h3>
                        <h4 style="font-size: 13px;">Личный сайт-портфолио.<br><br><br></h4><a href="https://codepool.ru/"><a class="btn btn-outline-primary btn-sm" role="button" href="http://codepool.ru/" style="background-color: #4d4bbe;"><i class="fa fa-sitemap" style="color: rgb(255,255,255);"></i>&nbsp; &nbsp;codepool.ru</a></a>
                        <i
                            class="fab fa-css3-alt" style="cursor: help;color: rgb(0,220,20);padding-right: 2px;font-size: 19px;margin-left: 30px;" data-toggle="tooltip" title="CSS3" data-placement="bottom"></i><i class="fab fa-html5" style="cursor: help;color: rgb(0,220,20);padding-left: 0;padding-right: 2px;font-size: 19px;" data-toggle="tooltip" title="HTML5" data-placement="bottom"></i><i class="fab fa-php" style="cursor: help;color: rgb(0,220,20);padding-left: 0;padding-right: 2px;font-size: 19px;"
                                data-toggle="tooltip" title="PHP7" data-placement="bottom"></i><i class="fab fa-buromobelexperte" style="cursor: help;color: rgb(0,220,20);padding-left: 0;padding-right: 2px;font-size: 19px;" data-toggle="tooltip" data-placement="top"
                                title="Bootstrap 4 by Bootstrap Studio"></i>
                            <div class="tags"></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="project-card-no-image" style="background-color: #f2f2f2;">
                        <h3 style="font-size: 16px;">SELFHENTAi&nbsp;<small class="text-uppercase" style="font-weight: bold;color: rgb(75,200,0);">DEV</small></h3>
                        <h4 style="font-size: 13px;">Платформа для <span style="filter: blur(5px);">ХУЙНИ</span>.<br><br><br></h4><a href="#"><a class="btn btn-outline-primary btn-sm" role="button" href="https://selfhentai.ru/" style="background-color: rgb(54,54,54);"><i class="fa fa-sitemap" style="color: rgb(255,255,255);"></i>&nbsp; &nbsp;selfhentai.ru</a></a>
                        <i
                            class="fas fa-database" style="cursor: help;color: rgb(0,220,20);margin-left: 25px;padding-right: 2px;font-size: 19px;" data-toggle="tooltip" title="MySQL" data-placement="bottom"></i><i class="fab fa-python" style="cursor: help;color: rgb(0,220,20);padding-right: 2px;font-size: 19px;" data-toggle="tooltip" title="CSS3" data-placement="bottom"></i><i class="fab fa-css3-alt" style="cursor: help;color: rgb(0,220,20);padding-right: 2px;font-size: 19px;"
                                data-toggle="tooltip" title="CSS3" data-placement="bottom"></i><i class="fab fa-html5" style="cursor: help;color: rgb(0,220,20);padding-left: 0;padding-right: 2px;font-size: 19px;" data-toggle="tooltip" title="HTML5" data-placement="bottom"></i>
                            <i
                                class="fab fa-php" style="cursor: help;color: rgb(0,220,20);padding-left: 0;padding-right: 2px;font-size: 19px;" data-toggle="tooltip" data-placement="top" title="PHP7"></i>
                                <div class="tags"></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="project-card-no-image" style="background-color: #f2f2f2;display:none;">
                        <h3 style="font-size: 16px;">SELFHENTAi&nbsp;<small class="text-uppercase" style="font-weight: bold;color: rgb(75,200,0);">DEV</small></h3>
                        <h4 style="font-size: 13px;">Личный(ое) сайт(-порфтолио).<br><br><br></h4><a href="#"><a class="btn btn-outline-primary btn-sm" role="button" href="https://selfhentai.ru/" style="background-color: rgb(54,54,54);"><i class="fa fa-sitemap" style="color: rgb(255,255,255);"></i>&nbsp; &nbsp;selfhentai.ru</a></a>
                        <i
                            class="fas fa-database" style="cursor: help;color: rgb(0,220,20);margin-left: 25px;padding-right: 2px;font-size: 19px;" data-toggle="tooltip" title="MySQL" data-placement="bottom"></i><i class="fab fa-python" style="cursor: help;color: rgb(0,220,20);padding-right: 2px;font-size: 19px;" data-toggle="tooltip" title="CSS3" data-placement="bottom"></i><i class="fab fa-css3-alt" style="cursor: help;color: rgb(0,220,20);padding-right: 2px;font-size: 19px;"
                                data-toggle="tooltip" title="CSS3" data-placement="bottom"></i><i class="fab fa-html5" style="cursor: help;color: rgb(0,220,20);padding-left: 0;padding-right: 2px;font-size: 19px;" data-toggle="tooltip" title="HTML5" data-placement="bottom"></i>
                            <i
                                class="fab fa-php" style="cursor: help;color: rgb(0,220,20);padding-left: 0;padding-right: 2px;font-size: 19px;" data-toggle="tooltip" data-placement="top" title="PHP7"></i>
                                <div class="tags"></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="project-card-no-image" style="background-color: #f2f2f2;display:none;">
                        <h3 style="font-size: 16px;">SELFHENTAi&nbsp;<small class="text-uppercase" style="font-weight: bold;color: rgb(75,200,0);">DEV</small></h3>
                        <h4 style="font-size: 13px;">Личный(ое) сайт(-порфтолио).<br><br><br></h4><a href="#"><a class="btn btn-outline-primary btn-sm" role="button" href="https://selfhentai.ru/" style="background-color: rgb(54,54,54);"><i class="fa fa-sitemap" style="color: rgb(255,255,255);"></i>&nbsp; &nbsp;selfhentai.ru</a></a>
                        <i
                            class="fas fa-database" style="cursor: help;color: rgb(0,220,20);margin-left: 25px;padding-right: 2px;font-size: 19px;" data-toggle="tooltip" title="MySQL" data-placement="bottom"></i><i class="fab fa-python" style="cursor: help;color: rgb(0,220,20);padding-right: 2px;font-size: 19px;" data-toggle="tooltip" title="CSS3" data-placement="bottom"></i><i class="fab fa-css3-alt" style="cursor: help;color: rgb(0,220,20);padding-right: 2px;font-size: 19px;"
                                data-toggle="tooltip" title="CSS3" data-placement="bottom"></i><i class="fab fa-html5" style="cursor: help;color: rgb(0,220,20);padding-left: 0;padding-right: 2px;font-size: 19px;" data-toggle="tooltip" title="HTML5" data-placement="bottom"></i>
                            <i
                                class="fab fa-php" style="cursor: help;color: rgb(0,220,20);padding-left: 0;padding-right: 2px;font-size: 19px;" data-toggle="tooltip" data-placement="top" title="PHP7"></i>
                                <div class="tags"></div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main><footer class="text-center">
          <div class="credits">
            <span>©️</span>
            <span class="current-year">2019</span> made with 
                <i style="color: red" class="fa fa-heart heart"
              alt="love">
                </i> 
                by 
                <a href="https://codepool.ru" target="_blank"> qavan
                </a> uses Bootstrap 4.3
          </div>
</footer>
    <script src="assets/js/jquery.min.js?h=83e266cb1712b47c265f77a8f9e18451"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js?h=63715b63ee49d5fe4844c2ecae071373"></script>
    <script src="assets/js/smart-forms.min.js?h=cfa788754642173dafbd830bd7969fdb"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="assets/js/script.min.js?h=b8b0a9f504fb148126e5da9d464951c4"></script>
</body>

</html>