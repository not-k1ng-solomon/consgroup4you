<?php
$title = "Инвестирование средств в инвестиционные портфели";
$meta = "Инвестирование средств в инвестиционные портфели. Готовые высокодоходные финансовые пакеты активов для получения пасивного дохода.";
?>
<?php require '../template/header.php' ?>
<div class="container cards">
    <div class="row">
        <div class="col-sm-auto">
            <br>
            <h1>Инвестиционные портфели</h1>
            <br>
            <p>Инвестиционные портфели - это инвестирование средств,
                собранных в наиболее актуальные и высокодоходные финансовые инструменты всех видов рынка.
                Главная цель инвестиционного портфеля - получение среднемесячной прибыли от изменения курса валют и
                котировок фьючерсов на финансовом рынке за период времени.
            </p>
        </div>
    </div>
</div>
<div class="container " id="upspec">
    <div class="row">
        <div class="col-sm-auto">
            <br><br>
            <h2>Портфели</h2>
            <br>
        </div>
    </div>
    <div class="row ">
        <div class="col-sm-12">
            <div class="col-sm-12 sp-main">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-6">
                            <br class="d-lg-block d-sm-none">
                            <br class="d-lg-block d-sm-none">
                                <img src="../img/anal.jpg" class="img-thumbnail" alt="">
                        </div>
                        <div class="col-md-6">
                            <p>Портфель ориентирован на получение среднесрочной прибыли от изменение
                                курса валют и котировок фьючерсов на финансовом рынке.</p>
                            <br>
                            <h3>Финансовые инструменты</h3>
                            <ul>
                                <li>USD</li>
                                <li>AAPL</li>
                                <li>GOOG</li>
                                <li>TSLA</li>
                                <li>FB</li>
                                <li>И др.</li>
                            </ul>
                            <h4>Минимальный депозит</h4>
                            <h3>30 000$ - 500 000$</h3>

                            <h4>Доходность</h4>
                            <h3>113,66%</h3>
                            <br>
                            <div class="text-center">
                                <a href="#">
                                    <button class="btn" data-toggle="modal" data-target="#exampleModal">Выбрать</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <br><br>
            <h2 class="text-center">Записаться на консультацию</h2>
            <br>
        </div>
        <div class="col-sm-12">
            <div class="col-sm-12  text-center">
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
<br>
<?php require '../template/footer.php' ?>
