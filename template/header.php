<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $meta ?>">
    <meta name="referrer" content="origin">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="/libs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://kit.fontawesome.com/d3779e6cc5.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/png" href="/img/logocgd12.png"/>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-159945285-1');
</script>

</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark2 d-sm-block d-md-none">
        <a class="navbar-brand" href="/"><img src="/img/logocgd.svg" width="60" height="100%" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <div class="dropdown-divider"></div>
                <li class="nav-item">
                    <a href="/o-kompanii.php">О компании</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownTorg" role="button"
                       data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Услуги
                    </a>
                    <ul class="dropdown-menu">
                        <a class="dropdown-item" href="/trade/trading.php">Трейдинг</a>
                        <a class="dropdown-item" href="/trade/torgovyye-signaly.php">Торговые сигналы</a>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownInvest" role="button"
                       data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Инвестиции
                    </a>
                    <ul class="dropdown-menu">
                        <a class="dropdown-item" href="/investitsii/investitsionnyye-portfeli.php">Инвестиционные
                            портфели</a>
                        <a class="dropdown-item" href="/investitsii/doveritelnoye-upravleniye.php">Доверительное
                            управление</a>                            
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">Обучение <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <a class="dropdown-item" href="/obucheniye.php">Обучающие курсы</a>
                        <a class="dropdown-item" href="/obychenie/dlya-nachinayushchikh.php">Для новичков</a>
                        <a class="dropdown-item" href="/obychenie/dlya-professionala.php">Для профессионалов</a>
                        <a class="dropdown-item" href="/obychenie/dlya-investora.php">Для инвесторов</a>
                    </ul>
                </li>
                <li class="nav-item"><a class="#cont" href="/instryment.php">Инструменты </a>
                </li>
                <li class="nav-item"><a class="#cont" href="/info/news.php">Новости </a>
                </li>
                <div class="dropdown-divider"></div>
                <li class="nav-item text-lg-right">
                    <a href="https://account.forex4you.com/ru/login/?_ga=2.9794045.993502264.1567930818-836367666.1567930818">
                        <button class="btn btn-dark"><i class="fa fa-sign-in"></i> Войти</button>
                    </a>
                </li>
                <div class="dropdown-divider"></div>
                <li class="nav-item text-lg-right">
                    <a href="https://account.forex4you.com/ru/user-registration/#/personal-details?affid=1obbsda">
                        <button class="btn btn-dark"><i class="fa fa-share"></i> Регистрация</button>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <nav class="d-sm-none d-md-block">
        <div class="container text-center">
            <div class="row nav-head">
                <div class="col-sm-8 name text-left">
                    <a href="/"><img src="/img/logocgd.svg" width="140" height="100%" alt=""></a>
                </div>
                <div class="col-sm-2 text-left menu_fo">
                    <a href="tel:+78123321368" class="d-sm-block d-md-none">
                        <p><i class="fas fa-mobile-alt"></i>
                            &nbsp;8 (999) 999-99-99
                        </p>
                    </a>
                    <p class="d-none d-md-block  ">
                        <i class="fas fa-mobile-alt"></i>&nbsp; 8 (999) 999-99-99
                    </p>
                    <a href="#" data-toggle="modal" data-target="#exampleModal"><p><i
                                    class="fas fa-phone fa-phone-volume"></i> Обратный звонок</p></a>
                </div>

                <div class="col-sm-2 text-left menu_fo">
                    <a href="https://account.forex4you.com/ru/login/?_ga=2.9794045.993502264.1567930818-836367666.1567930818">
                        <p>
                            <i class="fa fa-sign-in"></i>&nbsp; Войти
                        </p>
                    </a>
                    <a href="https://account.forex4you.com/ru/user-registration/#/personal-details?affid=1obbsda">
                        <p>
                            <i class="fa fa-share"></i>&nbsp; Регистрация
                        </p>
                    </a>
                </div>
            </div>
            <div class="row menu-uslugi">
                <div class="col ">
                    <a href="/o-kompanii.php">
                        <h5 class="pad">О компании</h5>
                    </a>
                </div>
                <div class="col">
                    <a class="dropdown-toggle" id="dropdownMenuTorgovlya" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        Услуги
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuTorgovlya">
                        <a class="dropdown-item" href="/trade/trading.php">Трейдинг</a>
                        <a class="dropdown-item" href="/trade/torgovyye-signaly.php">Торговые сигналы</a>
                    </div>
                </div>
                <div class="col">
                    <a class="dropdown-toggle" id="dropdownMenuInvest" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        Инвестиции
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuInvest">
                        <a class="dropdown-item" href="/investitsii/investitsionnyye-portfeli.php">Инвестиционные
                            портфели</a>
                        <a class="dropdown-item" href="/investitsii/doveritelnoye-upravleniye.php">Доверительное
                            управление</a>                            

                    </div>
                </div>
                <div class="col">
                    <a class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        Обучение
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="/obucheniye.php">Курсы</a>
                        <a class="dropdown-item" href="/obychenie/dlya-nachinayushchikh.php">Для новичков</a>
                        <a class="dropdown-item" href="/obychenie/dlya-professionala.php">Для профессионалов</a>
                        <a class="dropdown-item" href="/obychenie/dlya-investora.php">Для инвесторов</a>
                    </div>
                </div>
                <div class="col">
                    <a href="/instryment.php">
                        <h5 class="pad">Инструменты</h5>
                    </a>

                </div>
                <div class="col">
                    <a href="/info/news.php">
                        <h5 class="pad">Новости</h5>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>