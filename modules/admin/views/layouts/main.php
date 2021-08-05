<?php
use yii\helpers\Url;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use app\assets\AdminAsset;

AdminAsset::register($this);
//mihaildev\elfinder\Assets::noConflict($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<html lang="en">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Отключение жеста масштабируемости-->
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no, maximum-scale=1" />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>

    <section id="header-admin">
        <div class="container-fluid">
            <nav class="navbar navbar-default " role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#"><img src="/web/images/admin-img.png" ></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <!--<li class="active"><a href="#">Ссылка</a></li>-->
                            <li>
                                <a href="#">Панель управления</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <!--<li><p>Вы зашли под: <span>Admin</span></p></li>-->
                            <!--<li><p>Доступ: <span>root</span></p></li>-->
                            <!--<li></li>-->
                            <li>
                                <a href="<?=Url::home()?>" target="_blank">Прейти на сайт <i class="glyphicon glyphicon-share-alt"></i> </a>
                            </li>
                            <!--<li><a href="#" >Выход <i class="glyphicon glyphicon-log-in"></i></a></li>-->
                            <li class="dropdown">

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?=Yii::$app->user->identity->username?> <i class="glyphicon glyphicon-tower"></i> <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?=Url::to(['/site/logout'])?>">Выход <?=Yii::$app->user->identity->username?> <i class="glyphicon glyphicon-log-in"></i></a></li>
                                    <li><a href="#">Доступ: root</a></li>
                                    <!--<li><a href="#">Что-то еще</a></li>-->
                                    <li class="divider"></li>
                                    <li><a href="http://crbmost.ru/" target="_blank">Прейти на сайт <i class="glyphicon glyphicon-share-alt"></i> </a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>


    </section>
    <section id="content-admin">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-admin-edit container-fluid">
                        <h3><?echo $this->params['title']?></h3>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-3 content-admin-left">
                    <?echo Nav::widget([
                        'options' => ['class' => 'nav nav-pills nav-stacked'],
                        'items' => [
                            ['label' => 'Настройки', 'url' => ['/admin/config/index']],
                            ['label' => 'Услуги', 'url' => ['/admin/service/index']],
                            ['label' => 'Новости', 'url' => ['/admin/news/index']],
                            ['label' => 'Портфолио', 'url' => ['/admin/category-portfolio/index']],
                            ['label' => 'Работы', 'url' => ['/admin/portfolio/index']],
                            ['label' => 'Тарифы', 'url' => ['/admin/tarif/index']],
                            ['label' => 'Слайдер', 'url' => ['/admin/slider/index']],
                            ['label' => 'Пользователи', 'url' => ['/admin/user/index']],
                            ['label' => 'Отзывы', 'url' => ['/admin/reviews/index']],
                            ['label' => 'Этапы выполнения работ', 'url' => ['/admin/steps/index']],

                        ],
                    ]);?>
                </div>

                <div class="col-md-9">
                    <?=$content;?>
                </div>
            </div>
        </div>
    </section>
<?php
$bigname = \app\modules\admin\models\Config::find()->where(['parameter'=>'bigname'])->one();
$logo = \app\modules\admin\models\Config::find()->where(['parameter'=>'logo'])->one();
?>
    <section id="footer-bottom">
        <div class="container">
            <div class="col-md-12">
                <div>
                    <img src="<?=$logo->images?>" alt="">
                    <p>© <?=date('Y')?> «<?=$bigname->content?>» </p>

                </div>
            </div>
        </div>
    </section>

    <?php $this->endBody() ?>
    </body>
    </html>
    <?php $this->endPage() ?>