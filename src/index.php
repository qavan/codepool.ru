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
    <title>Портфолио</title>
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
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="https://codepool.ru/">Главная</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="about.php">Об опыте и мне</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="projects.php">Проекты</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="contact.php">Связаться</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link border rounded" href="emergency.php" style="color: rgb(255,255,255);background-color: #c50101;">Срочная связь</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page lanidng-page">
        <section class="portfolio-block block-intro" style="padding: 20px 0;">
            <div class="avatar" style="background-image:url(&quot;/assets/img/avatars/testava.png?h=e2cdc2ad4afe5505d7ea79ecb0602974&quot;);"></div>
            <p class="text-center text-dark" style="margin-bottom: 20px;">Меня зовут Николай «qavan» Александров.&nbsp;<br>Являюсь Python разработчиком и не только.&nbsp;<br>&nbsp;<a href="about.php">Обо мне</a>&nbsp;и&nbsp;<a href="projects.php.php">проектах</a>&nbsp;где я как-либо связан .</p>
            <div class="container">
                <div class="about-me"></div>
            </div>
        </section>
        <section class="portfolio-block photography" style="background-color: rgba(173,173,173,0.05);padding: 35px 35px;padding-top: 35px;padding-right: 35px;padding-bottom: 35px;padding-left: 35px;">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"><img class="img-fluid image" src="assets/img/it/selfhentailogin_v0.png?h=a39475f19da674dab79e8119b9c841ea"></a></div>
                    <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"><img class="img-fluid image" src="assets/img/it/proxyimporter_v0.png?h=2411a029860d3dbe2c3335fc12a53ad2"></a></div>
                    <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"><img class="img-fluid image" src="assets/img/it/testide_v0.png?h=455702031959bb10c5af8a4819f6198f"></a></div>
                </div>
            </div>
        </section>
        <section class="float-none portfolio-block skills" style="padding: 20px 0;padding-top: 0;">
            <div class="container">
                <div class="heading">
                    <h2 style="margin-bottom: -50px;margin-top: 15px;">что по навыкам ?</h2>
                </div>
                <div class="row">
                    <div class="col-md-4" style="margin-bottom: 0;">
                        <div class="card special-skill-item border-0">
                            <div class="card-header bg-transparent border-0"><i class="icon ion-social-python" style="background-color: #FFE873;color: #4B8BBE;"></i></div>
                            <div class="card-body">
                                <h3 class="card-title"><strong>Python 3</strong><br></h3>
                                <p class="card-text">В основном мной используется только Python 3.x . Есть опыт работы с Python 2 для решения «специфических» задач.<br></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card special-skill-item border-0">
                            <div class="card-header bg-transparent border-0"><i class="icon ion-ios-paper" style="background-color: rgb(72,69,205);color: #ffffff;"></i></div>
                            <div class="card-body">
                                <h3 class="card-title"><strong>English</strong><br></h3>
                                <p class="card-text">Знание английского на уровне технической документации и для поиска решения проблем посредством использования англоязычных ресурсов.<br></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card special-skill-item border-0">
                            <div class="card-header bg-transparent border-0"><i class="icon ion-social-github-outline" style="background-color: rgba(37,37,37,0.81);color: rgb(234,234,234);"></i></div>
                            <div class="card-body">
                                <h3 class="card-title">GitHub</h3>
                                <p class="card-text">Работа с системой контроля контроля версий GitHub. Имеется опыт работы внутри команды.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="portfolio-block call-to-action border-bottom" style="padding: 20px 0;padding-bottom: 30px;">
            <div class="container">
                <div class="d-flex justify-content-center justify-content-xl-center align-items-xl-end content">
                    <h3 class="text-center" style="font-family: Lato, sans-serif;">Я - тот, кого вы ищете?</h3><a class="text-center" href="contact.php"><button class="btn btn-outline-primary btn-lg" type="button">Да! Хочу связаться!</button></a></div>
            </div>
            <div class="container text-center d-flex float-none justify-content-sm-center align-items-sm-center" style="margin-top: 16px;height: -13px;margin-bottom: -16px;width: 387px;"><a class="social-link mail-border" href="mailto:pro100qavan@gmail.com" style="margin: 0px 5px;background-color: #e3e3e3;"><i class="icon ion-android-mail social-link-icon" style="color: rgba(255,0,0,0.5);"></i><div class="none-effect"></div></a>
                <a
                    class="social-link vk-border" href="https://vk.com/qavan" style="margin: 0px 5px;background-color: #2c5f9a;color: rgb(255,255,255);"><i class="fa fa-vk social-link-icon" style="color: rgba(0,0,0,0.8);"></i>
                    <div class="none-effect"></div>
                    </a><a class="social-link" href="https:/t.me/qavan" style="margin: 0px 5px;background-color: rgb(14,160,255);"><i class="fa fa-telegram social-link-icon" style="color: rgba(0,0,0,0.8);"></i><div class="none-effect"></div></a><a class="social-link instagram-border"
                        href="https://www.instagram.com/intoandroiddreams/" style="margin: 0px 5px;background: linear-gradient(60deg,#f77737,#833ab4);"><i class="fa fa-instagram social-link-icon" style="color: rgba(0,0,0,0.8);"></i><div class="none-effect"></div></a>
                    <a
                        class="social-link githib-border" href="https://github.com/qavan" style="margin: 0px 5px;background-color: rgba(0,0,0,0.8);"><i class="fa fa-github social-link-icon" style="color: #e3e3e3;"></i>
                        <div class="none-effect"></div>
                        </a>
            </div>
        </section><footer class="text-center">
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
        <section class="portfolio-block skills" style="height: 0;padding: 0;">
            <div class="container">
                <div class="heading" style="margin: 0;"></div>
            </div>
        </section>
    </main>
    <script src="assets/js/jquery.min.js?h=83e266cb1712b47c265f77a8f9e18451"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js?h=63715b63ee49d5fe4844c2ecae071373"></script>
    <script src="assets/js/smart-forms.min.js?h=cfa788754642173dafbd830bd7969fdb"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="assets/js/script.min.js?h=b8b0a9f504fb148126e5da9d464951c4"></script>
</body>

</html>