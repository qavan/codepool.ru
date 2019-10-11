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
    <title>Обо мне</title>
    <meta property="og:title" content="Сайт-портфолио Николая Александрова">
    <meta property="og:type" content="website">
    <meta property="og:image" content="/assets/img/avatars/avatar.jpg?h=a6dc828db199f191db08f91d9df2b728">
    <link rel="icon" type="image/jpeg" sizes="800x800" href="/assets/img/avatars/avatar.jpg?h=a6dc828db199f191db08f91d9df2b728">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css?h=cdd1c50020433e1e93b8970029ea55a5">
    <link rel="manifest" href="/manifest.json?h=eed4d16da80411bc190c3c04527f71d5">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Asul">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <link rel="stylesheet" href="/assets/fonts/fontawesome-all.min.css?h=cfa788754642173dafbd830bd7969fdb">
    <link rel="stylesheet" href="/assets/fonts/font-awesome.min.css?h=cfa788754642173dafbd830bd7969fdb">
    <link rel="stylesheet" href="/assets/fonts/ionicons.min.css?h=cfa788754642173dafbd830bd7969fdb">
    <link rel="stylesheet" href="/assets/fonts/fontawesome5-overrides.min.css?h=cfa788754642173dafbd830bd7969fdb">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
    <link rel="stylesheet" href="/assets/css/styles.min.css?h=9392210a302cd19ebe21c19f07c6300e">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white d-xl-flex portfolio-navbar gradient" style="height: 70px;padding: 0;padding-bottom: 0;">
        <div class="container"><a class="navbar-brand logo" href="#"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navbarNav"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navbarNav">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/index.php">Главная</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="/about.php">Об опыте и мне</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/projects.php">Проекты</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/contact.php">Связаться</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link border rounded" href="/emergency.php" style="color: rgb(255,255,255);background-color: #c50101;">Срочная связь</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page cv-page">
        <section class="portfolio-block cv">
            <div class="container">
                <div class="work-experience group">
                    <div class="heading">
                        <h2 class="text-center">опыт работы</h2>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>Python разработчик</h3>
                                <a href="http://wiki.apertium.org/wiki/Main_Page">
                                    <h4 class="organization" style="background-color: #333;">Apertium.org</h4>
                                </a>
                            </div>
                            <div class="col-md-6"><span class="period">05/2018 - 08/2018</span></div>
                        </div>
                        <p class="text-muted"><strong>Работа с наполнением и отладкой чувашско&lt;-&gt;татарского переводчика в рамках Google Summer of Code.</strong><br></p>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>Учусь в университете</h3>
                                <h4 class="organization">Chill Inc.</h4>
                            </div>
                            <div class="col-md-6"><span class="period">в настоящее время</span></div>
                        </div>
                        <p class="text-muted">Безработный.</p>
                    </div>
                </div>
                <div class="education group">
                    <div class="heading">
                        <h2 class="text-center" style="margin-bottom: -10px;">Образование</h2>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>ЧГУ им. И.Я.Ульянова<br></h3>
                                <h4 class="text-center organization">Математик-программист</h4>
                            </div>
                            <div class="col-6"><span class="period">09/2016 - настоящее время</span></div>
                        </div>
                        <p class="text-muted">Направление «Математическое обеспечение и администрирование информацонных систем».</p>
                    </div>
                </div>
                <div class="group">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="skills portfolio-info-card" style="padding-top: 40px;">
                                <h2>Основные навыки</h2>
                                <h3>Python</h3>
                                <div class="progress">
                                    <div class="progress-bar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"><span class="sr-only">85%</span></div>
                                </div>
                                <h3>PHP</h3>
                                <div class="progress">
                                    <div class="progress-bar pogress-toyellow" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"><span class="sr-only">70%</span></div>
                                </div>
                                <h3>Другое<i class="fa fa-question-circle-o border-info" style="filter: blur(0px);width: 20px;margin-left: 4px;padding-left: 4px;margin-top: 0;padding-top: 0px;color: rgb(0,128,255);" data-toggle="tooltip" title="Все что тут перечислено - конечно не всё! Подробнее можете узнать в проектах или же по связи."></i></h3>
                                <div
                                    class="progress">
                                    <div class="progress-bar pogress-toorange" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"><span class="sr-only">50%</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-info portfolio-info-card">
                            <h2>Информация и контакты</h2>
                            <div class="row">
                                <div class="col-1"><i class="icon ion-android-calendar icon" style="margin-right: 0px;padding-left: 0;margin-left: -5px;"></i></div>
                                <div class="col-9" style="margin-left: 0;"><span>06/04/1999</span></div>
                            </div>
                            <div class="row">
                                <div class="col-1"><i class="icon ion-person icon" style="margin-left: -5px;"></i></div>
                                <div class="col-9"><span>Nikolay Aleksandrov</span></div>
                            </div>
                            <div class="row">
                                <div class="col-1"><i class="icon ion-ios-telephone icon" style="margin-left: -5px;"></i></div>
                                <div class="col-9"><span>+7-(952)-021-01-08</span></div>
                                <div class="col"><i class="fa fa-question-circle-o" style="margin-left: -60px;color: rgb(255,0,0);" data-toggle="tooltip" title="не рекомендуется"></i></div>
                            </div>
                            <div class="row">
                                <div class="col-1"><i class="icon ion-at icon" style="margin-left: -5px;"></i></div>
                                <div class="col-9"><span>pro100qavan@gmail.com</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hobbies group">
                <div class="heading">
                    <h2 class="text-center" style="margin-top: -29px;">ХОББИ</h2>
                </div>
                <p class="text-center text-muted" style="margin-top: -50px;margin-bottom: -6px;">История военной техники(c XX века); гейминг; просмотр качественного контента на <i class="fa fa-youtube" style="color: rgb(255,0,0);"></i>&nbsp;или другой платформе; написание сомнительного назначения программ/скриптов в свободное время.</p>
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
    <script src="/assets/js/jquery.min.js?h=83e266cb1712b47c265f77a8f9e18451"></script>
    <script src="/assets/bootstrap/js/bootstrap.min.js?h=63715b63ee49d5fe4844c2ecae071373"></script>
    <script src="/assets/js/smart-forms.min.js?h=cfa788754642173dafbd830bd7969fdb"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="/assets/js/script.min.js?h=b8b0a9f504fb148126e5da9d464951c4"></script>
</body>

</html>