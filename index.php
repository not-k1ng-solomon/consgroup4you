<?php
require "db.php";
$all = R::exportAll(R::find('news', 'ORDER BY `id` DESC'));
//dump($all);
$title = "Конcультации и анализ в сфере финансов и бизнеса";
$meta = "Профессиональная поддержка и консультация торговли 
на бирже и предоставление инструментов для торговли.";
?>
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
    <link rel="stylesheet" href="css/animate.css">
    <script src="https://kit.fontawesome.com/d3779e6cc5.js" crossorigin="anonymous"></script>
    <link rel="icon" href="/img/logocgd12.png" type="image/x-icon"/>
    <script src="/js/wow.js"></script>
</head>
<body>
<div id="bg-head">
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
                        <a class="dropdown-toggle" id="dropdownMenuTorgovlya" data-toggle="dropdown"
                           aria-haspopup="true"
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
    <div class="container " id="main__header">
        <div class="row">
            <div class="col-md-7 main__text-block">
                <h1 class="header-title wow rotateFadeInDown" >CONSULTING<br> GROUP
                </h1>
                <br>
                <p class="header-cnt">Готовые финансовые стратегии <br> и обучение грамотному подходу <br> к безопасным инвестициям.</p>
                <div>
                    <a href="#">
                        <button class="btn btn-hdr" data-toggle="modal" data-target="#exampleModal">Получить
                            консультацию
                        </button>
                    </a>
                </div>
            </div>

            <div class="col-md-5">
                <br><br>
<!--                <img src="img/finance.png" class="img-main" alt="">-->
            </div>
        </div>
    </div>
</div>
<div class="container" id="school">
    <div class="row">
        <div class="col">
            <br><br>
            <h2>Варианты сотрудничества </h2>
            <br><br>
        </div>
    </div>
    <div class="row text-center">
        <div class="col">
            <div class="bl-main2">
                <div class="bl-main-tel img-mar-to"><img src="img/новичекt-768x994.png" alt=""></div>
                <br>
                <h3>Для новичка</h3>
                <br>
                <ul class="text-left">
                    <li>Личный наставник</li>
                    <li>Профессиональный курс базового обучения</li>
                    <li>Информационный канал</li>
                    <li>Посещение мастер классов</li>
                    <li>Доступ к кейсам</li>
                </ul>
                <br>
                <br>
                <a href="/obychenie/dlya-nachinayushchikh.php">
                    <button class="btn">Подробнее</button>
                </a>
            </div>
        </div>
        <div class="col">
            <div class="bl-main2">
                <div class="bl-main-tel img-mar-to"><img src="img/2t-768x994.png" alt=""></div>
                <br>
                <h3>Для профессионала</h3>
                <br>
                <ul class="text-left">
                    <li>Работа на VIP счетах</li>
                    <li>Профессиональные счета</li>
                    <li>Доступ к департаменту аналитики</li>
                    <li>Управление 5-ю и более счетами одновременно</li>
                </ul>
                <br>
                <br>
                <a href="/obychenie/dlya-professionala.php">
                    <button class="btn">Подробнее</button>
                </a>
            </div>
        </div>
        <div class="col">
            <div class="bl-main2">
                <div class="bl-main-tel img-mar-to"><img src="img/3t-768x994.png"></div>
                <br>
                <h3>Для инвестора</h3>
                <br>
                <ul class="text-left">
                    <li>Группа специалистов (управляющий — трейдер, аналитик)</li>
                    <li>Канал связи с управляющим группы для инвесторов</li>
                    <li>Получение статуса VIP</li>
                    <li>Инвестиционные портфели</li>
                </ul>
                <br>
                <a href="/obychenie/dlya-investora.php">
                    <button class="btn">Подробнее</button>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="container cards">
    <div class="row">
        <div class="col">
            <br><br>
            <h2>Что ожидать от сотрудничества с нами?
            </h2>
            <br>
        </div>
    </div>
</div>
<div class="container " id="ojid">
    <div class="row ">
        <div class="col-sm-12 ">
            <div class="col-sm-12 text-center bl-info">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 block-mar">
                        <p><i class="fas fa-book fa-2x"></i></p>
                        <p>Финансовая грамотность</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 block-mar">
                        <p><i class="fas fa-money-check-alt fa-2x"></i></p>
                        <p>Понимание в управлении финансами</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 block-mar">
                        <p><i class="fas fa-chart-line fa-2x"></i></p>
                        <p>Стратегия приумножения капитала</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 block-mar">
                        <p><i class="far fa-id-badge fa-2x"></i></p>
                        <p>Личный специалист</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 block-mar">
                        <p><i class="fas fa-box-open fa-2x"></i></p>
                        <p>Готовые инвестиционные решения</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 block-mar">
                        <p><i class="far fa-chart-bar fa-2x"></i></p>
                        <p>Доступ к департаменту аналитики</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container " id="torg">
    <div class="row">
        <div class="col">
            <br><br>
            <h2>Информационные каналы Consulting group в Telegram
            </h2>
            <br>
            <p>Закрытый Telegram-канал, в котором поступают рекомендации с конкретными параметрами
                каждой сделки. Сигналы поступают от профессиональной группы действующих трейдеров-аналитиков,
                с опытом торговли на рынке Forex более 10 лет.

            </p>
            <br>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-auto col-md-4">
            <div class="bl-main">
                <div class="bl-main-tel"><i class="fab fa-telegram-plane fa-3x" aria-hidden="true"></i></div>
                <br>
                <h3>Light</h3>
                <br>
                <p>В основе краткосрочные сделки на валютном и фондовом рынке</p>
                <br><br><br><br>
                <a href="#">
                    <button class="btn" data-toggle="modal" data-target="#exampleModal">получить доступ
                    </button>
                </a>
            </div>
        </div>
        <div class="col-sm-auto col-md-4">
            <div class="bl-main">
                <div class="bl-main-tel"><i class="fab fa-telegram-plane fa-3x" aria-hidden="true"></i></div>
                <br>
                <h3>Ultra</h3>
                <br>
                <p>Краткосрочные, среднесрочные, долгосрочные сделки с индивидуальными объемами
                    на валютных парах, сырьевых активах и основных индексах</p>
                <br>
                <a href="#">
                    <button class="btn" data-toggle="modal" data-target="#exampleModal">получить доступ
                    </button>
                </a>
            </div>
        </div>
        <div class="col-sm-auto col-md-4">
            <div class="bl-main">
                <div class="bl-main-tel"><i class="fab fa-telegram-plane fa-3x" aria-hidden="true"></i></div>
                <br>
                <h4>Royal</h4>
                <br>
                <p>Среднесрочные и долгосрочные сделки на всех доступных активах.
                    Торговля для извлечения максимальной прибыли </p>
                <br><br>
                <a href="#">
                    <button class="btn" data-toggle="modal" data-target="#exampleModal">получить доступ
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <br><br>
            <h2>Результаты наших партнеров</h2>
            <br>
        </div>
        <div class="col-sm-12">
            <div class="col-sm-12 bl-info">
                <div class="row">
                    <div class="col">
                        <h3>Инвестор:</h3><br><br>
                        <p>Компания: ООО «БалтикСигнал»</p>
                        <p>Руководитель: Дмитрий</p>
                    </div>
                    <div class="col">
                        <h3>Инвестиции:</h3><br><br>
                        <p>Начальные вложения: 5000$</p>
                    </div>
                    <div class="col">
                        <h3>Инструменты компании:</h3><br>
                        <ul>
                            <li>Личный счет</li>
                            <li>Личный специалист</li>
                            <li>Доступ к аналитике</li>
                        </ul>
                    </div>
                    <div class="col">
                        <h3>Результаты:</h3><br><br>
                        <p>Счет: 15000$</p>
                        <p>Ежемесячный вывод: 1500$</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <br><br>
            <h2>Новости</h2>
            <br>
        </div>
        <div class="col-sm-12">
            <div class="col-sm-12 bl-info">
                <div class="row">
                    <?php
                    $i_r = 0;
                    for ($i = 0; $i < 3; $i++) {
                        if (!$all[$i_r]) {
                            break;
                        }
                        echo "<div class='col'>
                                <ul>";
                        for ($i_all = 0; $i_all < 4; $i_all++) {
                            if (!$all[$i_r]) {
                                break;
                            }
                            echo '<li><a href="/info/notes.php?id=' . $all[$i_r]['id'] . '">' . $all[$i_r]['title'] . '</a></li>';
                            $i_r++;
                        }
                        echo "</ul></div>";
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center">
            <br><br>
            <br><br>
            <br>
            <h2>Записаться на консультацию</h2>
            <br>
            <br>
        </div>
        <div class="col-sm-12">
            <div class="col-sm-12 text-center">
                <form id="form" method="post" class="contact-form-style-01">
                    <div class="form-inline">
                        <input type="text" id="firstname" required name="firstname"
                               placeholder="Имя"
                               class="md-input">
                        <br c>
                        <input type="text" id="phone" required name="phone"
                               placeholder="Телефон"
                               class="md-input" id="phone">
                        <button type="submit" value="Отправить"
                                class="btn btn-form">
                            Отправить
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<br><br><br><br>
<?php require 'template/footer.php' ?>
