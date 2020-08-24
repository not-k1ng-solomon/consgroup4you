<?php
$title ="Компания Consulting Group";
$meta ="Профессиональная консультация и анализ в сфере финансов и бизнеса";
?>
<?php require 'template/header.php' ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <br><br>
            <h2>О компании Consulting Group</h2>
            <br>
        </div>
        <div class="col-sm-12">
            <div class="col-sm-12 bl-info">
                <p>Компания Consulting Group - это профессиональная поддержка торгующих клиетов, консультация и обучение новичков в сфере финансов.</p>
                <h3>Что такое торговля на финансовом рынке?</h3>
                <p></p>Удаленный заработок из любой точки мира 24/5 при помощи спекуляции на различных финансовых инструментах.</p>
                <h3>Варианты сотрудничества с нами: </h3/>
                <ol>
                    <li>Бесплатное обучение основам торголи на финансовом рынке;</li>
                    <li>Профессиональное обучение с реальной практикой;</li>
                    <li>Квалифицированные специалисты, оказывающие сервисную поддержку;</li>
                    <li>Инвестирование с целью получения прибыли.</li>
                </ol>
                <p>Вы научитесь - использовать правильные площадки, инструменты и финансовые стратегии.
                    Курсы позволят видеть и анализировать глобально. Мировые политические и экономические события станут для вас
                    возможностью для приумножения собственного капитала.
                </p>

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
<br>
<?php require 'template/footer.php' ?>

</body>
</html>