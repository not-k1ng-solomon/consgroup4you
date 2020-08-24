<?php
?>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3>CONSULTING GROUP</h3>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h5>Услуги</h5>
                <br class="d-sm-none">
                <ul>
                    <li><a href="/trade/trading.php">Трейдинг</a></li>
                    <li><a href="/obucheniye.php">Обучение</a></li>
                    <li><a href="/trade/torgovyye-signaly.php">Торговые сигналы</a></li>
                    <li><a href="/investitsii/investitsionnyye-portfeli.php">Инвестиционные портфели</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>MetaTrader 4</h5>
                <br class="d-sm-none">
                <ul>
                    <li><a href="https://www.forex4you.com/ru/wp-content/download/metatrader4.exe">Скачать для ПК</a></li>
                    <li><a href="https://play.google.com/store/apps/details?id=net.metaquotes.metatrader4">Скачать для Google play</a></li>
                    <li><a href="https://itunes.apple.com/app/metatrader-4/id496212596?mt=8">Скачать для AppStore</a></li>
                    <li><a href="https://account.forex4you.com/ru/login/?_ga=2.9794045.993502264.1567930818-836367666.1567930818">Открыть счет</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>Контакты</h5>
                <br class="d-sm-none">
                <ul class="no-decor">
                    <li><a href="tel:+78123321368" class="d-sm-block d-md-none"><p><i class="fas fa-mobile-alt" ></i> 8 (999) 999-99-99</p></a>
                        <p class="d-none d-md-block "><i class="fas fa-mobile-alt" ></i> 8 (999) 999-99-99</p></li>
                    <li><i class="far fa-envelope"></i> example@gmail.com</li>
                    <li><i class="fas fa-map-marker-alt"></i> Московский проспект №111 офис 501</li>
                    <li><a href="/otzyvy.php"></i> Отзывы</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>Социальные сети</h5>
                <br class="d-sm-none">
                <ul class="no-decor">
                    <li><a href="https://t-do.ru/"><i class="fab fa-telegram"></i> Telegram</a></li>
                    <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i> INSTAGRAM</a> </li>
                    <li><a href="https://vk.com/"><i class="fab fa-vk"></i> ВКонтакте</a></li>
<!--                    <li><i class="fab fa-telegram"></i>  TELEGRAM</li>-->
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-pr text-center">
        © 2020 Consulting Group, All Rights Reserved. Не является публичной офертой. Разработано
        <a href="https://b-da.ru">B-DA</a>
    </div>
</footer>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Записаться</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="result-form"></div>
                <form action="" class="form-" id="call-back-form">
                    <div class="form-group">
                        <label for="cb_name">Ваше имя</label>
                        <input class="form-control" id="cb_name" required placeholder="Имя" type="text">
                    </div>
                    <div class="form-group">
                        <label for="cb_tel">Номер телефона</label>
                        <input class="form-control" id="cb_tel"  required placeholder="+7(999) 999-99-99" type="text">
                    </div>
                    <button type="submit" class="btn">Отправить</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="/libs/jquery/dist/jquery.min.js"></script>
<script src="/libs/popper.js"></script>
<script src="/libs/bootstrap/dist/js/bootstrap.js"></script>
<!--<script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>-->
<script src="/js/mask.js"></script>
<script src="/js/mail.js"></script>
<script src="/js/form.js"></script>
</body>
</html>