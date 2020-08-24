<?php
require 'db.php';
$title = "Отзывы о компании Consulting Group";
$meta = "Профессиональная поддержка и консультации в сфере финансов и бизнеса
- Consulting Group, московский пр-т. 111";

$otzyv = R::find('otzyv', 'WHERE `status` = ? ORDER BY `id` DESC', array('active'));
?>
<?php require 'template/header.php' ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <br><br>
            <h2>Отзывы о компании Consulting Group</h2>
            <br>
        </div>
        <div class="col-sm-12">
            <div class="col-sm-12 bl-info">
                <h2 class="text-center">Написать отзыв</h2>
                <br>
                <div class="result-form2 text-center"></div>
                <form id="formOtyzyv" method="post" class="text-center contact-form-style-01">
                    <input type="text" id="nameOt" required name="firstname"
                           placeholder="Имя"
                           class="form-control">
                    <br>
                    <textarea type="text" name="description" required name="phone" id="description"
                              class="form-control" placeholder="Содержание отзыва"></textarea>
                    <br>
                    <button type="submit" value="Отправить" class="btn btn-form">
                        Отправить отзыв
                    </button>
                </form>
            </div>
        </div>
        <div class="col-sm-12">
            <?php if ($otzyv): ?>
                <?php foreach ($otzyv as $item): ?>
                    <br>
                    <div class="col-sm-12 bl-info">
                        <h3><?php echo $item->name ?> </h3><small><?php echo $item->date ?></small>
                        <hr>
                        <p><?php echo $item->description ?></p>
                    </div>
                    <br>
                <?php endforeach; ?>
            <?php endif; ?>
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
                        <br>
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