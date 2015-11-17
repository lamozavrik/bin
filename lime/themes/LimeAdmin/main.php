<?php
use \app\lime\themes\LimeAdmin\theme\ThemeManager;
use yii\helpers\Html;

ThemeManager::register($this);
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
    <body>
    <?php $this->beginBody() ?>
    <?=$this->render('header')?>
    <main>
        <div class="container-fluid">
            <ol class="breadcrumb">
                <li><a href="#">Главная</a></li>
                <li><a href="#">Библиотека</a></li>
                <li class="active">Данные</li>
            </ol>
            <?=$content?>
        </div>
    </main>
    <?=$this->render('footer')?>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>