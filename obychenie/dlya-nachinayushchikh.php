<?php
$title ="Курсы торговли на бирже для новичков";
$meta ="Обучение мастерству трейдинга для начинающих. Профессиональная поддержка, 
консультация, практика на демо и настоящих счетах.";
?>
<?php require '../template/header.php' ?>
<div class="container cards">
    <div class="row">
        <div class="col-sm-auto">
            <br>
            <h1>Для начинающих</h1>
            <br>
               <p> Профессиональные курсы обучения мастреству трейдинга и управлению финансами
                под управлением группы специалистов (трейдеров, департаминта аналитики).
               </p>
        </div>
    </div>
</div>
<div class="container " id="upspec">
    <div class="row">
        <div class="col-sm-auto">
            <br><br>
            <h2>Для новичков:</h2>
            <br>
        </div>
    </div>
    <div class="row ">
        <div class="col-sm-12">
            <div class="col-sm-12 sp-main">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="../img/572.jpg" class="img-thumbnail" alt="">
                        </div>
                        <div class="col-md-6">
                            <p>Эффективный алгоритм по обучению с первых шагов и консультированию начинающих,
                                но перспективных специалистов не имеющих опыта торговли на финансовом рынке.
                                Готовый практический курс по введению в сферу финансов - “Построение торговой системы”.
                            </p>
                            <br>
                            <h3>Мы предлагаем: </h3>
                            <ul>
                                <li>Личный наставник</li>
                                <li>Профессиональный курс базового обучения</li>
                                <li>Доступы к информационным каналам</li>
                                <li>Посещение мастер классов</li>
                                <li>Доступ к кейсам</li>
                            </ul>
                            <br>
                            <div class="text-center">
                                <a href="/obychenie/dlya-nachinayushchikh.php">
                                    <button class="btn">Выбрать</button>
                                </a>
                            </div>
                        </div>
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
            <h2 class="text-center">Записаться на бесплатные курсы</h2>
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

</body>
</html>