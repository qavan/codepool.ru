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
    <title>Связаться</title>
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
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/about.php">Об опыте и мне</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/projects.php">Проекты</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="/contact.php">Связаться</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link border rounded" href="/emergency.php" style="color: rgb(255,255,255);background-color: #c50101;">Срочная связь</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page hire-me-page">
        <section class="portfolio-block hire-me">
            <div class="container">
                <div class="heading">
                    <h2>выйти на связь</h2>
                </div>
                <form action="/bot/contact.php" method="post">
                    <div class="form-group"><label for="subject">Решение</label>
                        <select name="option" class="form-control" id="subject" required=""><option value="0" selected="">Выберите решение</option><option value="1">Python GUI</option><option value="2">Pyhton Scrapping(Parsing)</option><option value="3">Python 2/Python Legacy</option><option value="4">Other Legacy</option><option value="404">Другое(в сообщении)</option></select></div>
                    <div class="form-group"><label for="email">Email</label>
                        <input name="email" class="form-control" type="email" id="email" placeholder="Ваша электронная почта" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}">
                    </div>
            <div class="form-group">
                <label for="message">Сообщение</label>
                <textarea name="textarea" class="form-control" id="message" placeholder="Вы должны здесь конкретно описать проблему, которую я должен решить" required=""></textarea>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-6"><label for="hire-date">До «какого» дать вам ответ на это?</label><input name="date" class="form-control" id="hire-date" type="date"></div>
                    <div class="col-md-6 button"><button class="btn btn-primary btn-block" type="submit">Отправить</button></div>
                    <?php
                    if (isset($_GET['error'])) {
                        if ($_GET['error'] == '0') {
                            $txtval = 'Ваш запрос отправлен!';
                        }
                        elseif ($_GET['error'] == '1') {
                            $txtval = 'Ошибка! Заполните все правильно!';
                        }
                        else {
                            $txtval = 'Неизвестная ошибка';
                        }
                    echo '<div class="modal-dialog" style="width:502px;max-width:502px">
                        <div class="modal fade" role="dialog" tabindex="-1" id="contactModal">
                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Статус запроса</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                                    <div class="modal-body">
                                        <div class="form-row">
                                            <div class="col-lg-6">
                                                <form data-bss-recipient="67b465af92ed4ffdcc0537eaadc6dd61">
                                                    <div>'.$txtval.'</div></form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
                    }
                    ?>

                </div>
            </div>
            </form>
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
    <?php
    if (isset($_GET['error']) and ($_GET['error'] = '0' or $_GET['error'] = '1')) {
        echo "<script src=\"/assets/js/additional.js\"></script>";
    }
    ?>
</body>

</html>