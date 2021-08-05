<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\ItAppAsset;
use yii\helpers\Url;

//DubleAppAsset::register($this);
AppAsset::register($this);
ItAppAsset::register($this);


$address = \app\modules\admin\models\Config::find()->where(['parameter'=>'address'])->one();
$telefone1 = \app\modules\admin\models\Config::find()->where(['parameter'=>'telefone1'])->one();
$telefone2 = \app\modules\admin\models\Config::find()->where(['parameter'=>'telefone2'])->one();
$timework = \app\modules\admin\models\Config::find()->where(['parameter'=>'timework'])->one();
$yandex = \app\modules\admin\models\Config::find()->where(['parameter'=>'yandex'])->one();
$google = \app\modules\admin\models\Config::find()->where(['parameter'=>'google'])->one();
$favicon = \app\modules\admin\models\Config::find()->where(['parameter'=>'favicon'])->one();
$bigname = \app\modules\admin\models\Config::find()->where(['parameter'=>'bigname'])->one();
$logo = \app\modules\admin\models\Config::find()->where(['parameter'=>'logo'])->one();
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <link rel="icon" type="image/png" href="<?=$favicon->images?>" />
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?=$yandex->content?>
    <?=$google->content?>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<body class="<?= Yii::$app->request->url == Yii::$app->homeUrl ?  'index-template' :  'base-template services-template'?>">
<div class="main-wrapper">
    <div class="header">
        <div class="top-bar-push"></div>
        <div class="header-bottom">
            <div class="container">
                <div class="inner relative">
                    <div class="logo">
                        <div class="table">
                            <div class="table-cell">
                                <a href="/">
                                    <img src="<?=$logo->images?>" alt="<?=$bigname->content?>" data-retinasrc="<?=$logo->images?>">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-tel">
                        <div class="table">
                            <div class="table-cell">
                                <div class="header-tel-1">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="phone-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512" class="svg-inline--fa fa-phone-alt fa-w-16 fa-2x">
                                        <path fill="currentColor" d="M493.09 351.3L384.7 304.8a31.36 31.36 0 0 0-36.5 8.9l-44.1 53.9A350 350 0 0 1 144.5 208l53.9-44.1a31.35 31.35 0 0 0 8.9-36.49l-46.5-108.5A31.33 31.33 0 0 0 125 .81L24.2 24.11A31.05 31.05 0 0 0 0 54.51C0 307.8 205.3 512 457.49 512A31.23 31.23 0 0 0 488 487.7L511.19 387a31.21 31.21 0 0 0-18.1-35.7zM456.89 480C222.4 479.7 32.3 289.7 32.1 55.21l99.6-23 46 107.39-72.8 59.5C153.3 302.3 209.4 358.6 313 407.2l59.5-72.8 107.39 46z" class=""></path>
                                    </svg>
                                    <a href="tel:+71234445566"><?=$telefone1->content?></a>
                                </div>


                                <div class="header-tel-2">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="phone-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512" class="svg-inline--fa fa-phone-alt fa-w-16 fa-2x">
                                        <path fill="currentColor" d="M493.09 351.3L384.7 304.8a31.36 31.36 0 0 0-36.5 8.9l-44.1 53.9A350 350 0 0 1 144.5 208l53.9-44.1a31.35 31.35 0 0 0 8.9-36.49l-46.5-108.5A31.33 31.33 0 0 0 125 .81L24.2 24.11A31.05 31.05 0 0 0 0 54.51C0 307.8 205.3 512 457.49 512A31.23 31.23 0 0 0 488 487.7L511.19 387a31.21 31.21 0 0 0-18.1-35.7zM456.89 480C222.4 479.7 32.3 289.7 32.1 55.21l99.6-23 46 107.39-72.8 59.5C153.3 302.3 209.4 358.6 313 407.2l59.5-72.8 107.39 46z" class=""></path>
                                    </svg>
                                    <a href="tel:+73217778899"><?=$telefone2->content?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-info">
                        <div class="header-address">
                            <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="map-marker-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 384 512" class="svg-inline--fa fa-map-marker-alt fa-w-12 fa-2x">
                                <path fill="currentColor" d="M192 96c-52.935 0-96 43.065-96 96s43.065 96 96 96 96-43.065 96-96-43.065-96-96-96zm0 160c-35.29 0-64-28.71-64-64s28.71-64 64-64 64 28.71 64 64-28.71 64-64 64zm0-256C85.961 0 0 85.961 0 192c0 77.413 26.97 99.031 172.268 309.67 9.534 13.772 29.929 13.774 39.465 0C357.03 291.031 384 269.413 384 192 384 85.961 298.039 0 192 0zm0 473.931C52.705 272.488 32 256.494 32 192c0-42.738 16.643-82.917 46.863-113.137S149.262 32 192 32s82.917 16.643 113.137 46.863S352 149.262 352 192c0 64.49-20.692 80.47-160 281.931z" class=""></path>
                            </svg>
                            <?=$address->content?>
                        </div>
                        <div class="visible-xs"></div>
                        <div class="shedule">
                            <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512" class="svg-inline--fa fa-clock fa-w-16 fa-2x">
                                <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm216 248c0 118.7-96.1 216-216 216-118.7 0-216-96.1-216-216 0-118.7 96.1-216 216-216 118.7 0 216 96.1 216 216zm-148.9 88.3l-81.2-59c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h14c6.6 0 12 5.4 12 12v146.3l70.5 51.3c5.4 3.9 6.5 11.4 2.6 16.8l-8.2 11.3c-3.9 5.3-11.4 6.5-16.8 2.6z" class=""></path>
                            </svg>
                            <?=$timework->content?>
                        </div>
                        <div class="visible-xs"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-bar fix-true">
            <div class="top-bar-container">
                <div class="inner relative">
                    <div class="mob-menu-btn hidden-lg hidden-md">
                                <span class="icon-menu-burger">
                                <span class="icon-menu-burger__line"></span>
                                </span>
                    </div>
                    <a href="#callback" class="button fancyboxModal"><span class="blink_on">Заказать звонок</span></a>
                    <nav class="mobile-menu">
                        <ul class="">
                            <li class="first active"><a href="/" ><span>Главная</span></a></li>
                            <li><a href="<?=Url::base(true).'/company'?>" ><span>О компании</span></a></li>
                            <li class="down">
                                <a href="<?=Url::base(true).'/services'?>" ><span>Услуги</span></a><span class="dropdown-button"></span>
                                <ul class="">
                                    <?= \app\components\MenuWidget::widget(['tpl' => 'menu']);?>
                                </ul>
                            </li>
                            <!--
                            <li class="down">
                                <a href="#" ><span>Магазин</span></a><span class="dropdown-button"></span>
                                <ul class="">
                                    <li class="first down">
                                        <a href="#" ><span>Автоматика</span></a><span class="dropdown-button"></span>
                                        <ul class="">
                                            <li class="first"><a href="#" ><span>Автоматические выключатели</span></a></li>
                                            <li><a href="#" ><span>Дифференциальные автоматы</span></a></li>
                                            <li class="last"><a href="#" ><span>УЗО</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="down">
                                        <a href="#" ><span>Кабель</span></a><span class="dropdown-button"></span>
                                        <ul class="">
                                            <li class="first"><a href="#" ><span>Греющий кабель</span></a></li>
                                            <li><a href="#" ><span>Электрический теплый пол</span></a></li>
                                            <li class="last"><a href="#" ><span>Провода, кабели</span></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" ><span>Щиты и шкафы</span></a></li>
                                    <li><a href="#" ><span>Стабилизаторы напряжения</span></a></li>
                                    <li><a href="#" ><span>Розетки, выключатели и рамки</span></a></li>
                                    <li><a href="#" ><span>Сварочное оборудование</span></a></li>
                                    <li class="down">
                                        <a href="#" ><span>Удлинители, сетевые фильтры</span></a><span class="dropdown-button"></span>
                                        <ul class="">
                                            <li class="first"><a href="#" ><span>Переходники, вилки и колодки</span></a></li>
                                            <li><a href="#" ><span>Удлинители и сетевые фильтры</span></a></li>
                                            <li class="last"><a href="#" ><span>Удлинители на катушках</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="down">
                                        <a href="#" ><span>Электромонтажные работы</span></a><span class="dropdown-button"></span>
                                        <ul class="">
                                            <li class="first"><a href="#" ><span>Гофрированные трубы</span></a></li>
                                            <li><a href="#" ><span>Изолента</span></a></li>
                                            <li><a href="#" ><span>Наконечники, гильзы, СИЗы, ЗПО</span></a></li>
                                            <li class="last"><a href="#" ><span>Распределительные коробки</span></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" ><span>Электрогенераторы</span></a></li>
                                    <li><a href="#" ><span>Звонки</span></a></li>
                                    <li><a href="#" ><span>Счетчики электроэнергии</span></a></li>
                                    <li class="last down">
                                        <a href="#" ><span>Умный Дом</span></a><span class="dropdown-button"></span>
                                        <ul class="">
                                            <li class="first"><a href="#" ><span>Домашние помощники</span></a></li>
                                            <li class="last"><a href="#" ><span>Системы защиты от протечек воды</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            -->
                            <li><a href="<?=Url::base(true).'/news'?>" ><span>Новости</span></a></li>
                            <li><a href="<?=Url::base(true).'/reviews'?>" ><span>Отзывы</span></a></li>
                            <li class="last"><a href="<?=Url::base(true).'/contacts'?>" ><span>Контакты</span></a></li>
                        </ul>
                    </nav>
                    <div class="top-menu">
                        <ul class="">
                            <li class=" "><a href="/" ><span>Главная</span></a></li>
                            <li><a href="<?=Url::base(true).'/company'?>" ><span>О компании</span></a></li>
                            <li class="down">
                                <a href="<?=Url::base(true).'/services'?>" ><span>Услуги</span></a><span class="dropdown-button"></span>
                                <ul class="">
                                    <?= \app\components\MenuWidget::widget(['tpl' => 'menu']);?>

                                    <!--
                                    <li class="first"><a href="#" ><span>Монтаж котельной</span></a></li>
                                    <li><a href="#" ><span>Монтаж радиаторов</span></a></li>
                                    <li><a href="#" ><span>Монтаж водоснабжения</span></a></li>
                                    <li><a href="#" ><span>Монтаж канализации</span></a></li>
                                    <li><a href="#" ><span>Монтаж тёплого пола</span></a></li>
                                    <li class="down">
                                        <a href="#" ><span>Монтаж электрики</span></a><span class="dropdown-button"></span>
                                        <ul class="">
                                            <li class="first"><a href="#" ><span>В квартире</span></a></li>
                                            <li><a href="#" ><span>В загородном доме</span></a></li>
                                            <li class="last"><a href="#" ><span>В офисных помещениях</span></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" ><span>Монтаж систем охлаждения</span></a></li>
                                    <li><a href="#" ><span>Проектирование</span></a></li>
                                    <li class="last"><a href="#" ><span>Сервисное обслуживание</span></a></li>
                                    -->

                                </ul>
                            </li>

                            <!--
                            <li class="down">
                                <a href="#" ><span>Магазин</span></a><span class="dropdown-button"></span>
                                <ul class="">
                                    <li class="first down">
                                        <a href="#" ><span>Автоматика</span></a><span class="dropdown-button"></span>
                                        <ul class="">
                                            <li class="first"><a href="#" ><span>Автоматические выключатели</span></a></li>
                                            <li><a href="#" ><span>Дифференциальные автоматы</span></a></li>
                                            <li class="last"><a href="#" ><span>УЗО</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="down">
                                        <a href="#" ><span>Кабель</span></a><span class="dropdown-button"></span>
                                        <ul class="">
                                            <li class="first"><a href="#" ><span>Греющий кабель</span></a></li>
                                            <li><a href="#" ><span>Электрический теплый пол</span></a></li>
                                            <li class="last"><a href="#" ><span>Провода, кабели</span></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" ><span>Щиты и шкафы</span></a></li>
                                    <li><a href="#" ><span>Стабилизаторы напряжения</span></a></li>
                                    <li><a href="#" ><span>Розетки, выключатели и рамки</span></a></li>
                                    <li><a href="#" ><span>Сварочное оборудование</span></a></li>
                                    <li class="down">
                                        <a href="#" ><span>Удлинители, сетевые фильтры</span></a><span class="dropdown-button"></span>
                                        <ul class="">
                                            <li class="first"><a href="#" ><span>Переходники, вилки и колодки</span></a></li>
                                            <li><a href="#" ><span>Удлинители и сетевые фильтры</span></a></li>
                                            <li class="last"><a href="#" ><span>Удлинители на катушках</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="down">
                                        <a href="#" ><span>Электромонтажные работы</span></a><span class="dropdown-button"></span>
                                        <ul class="">
                                            <li class="first"><a href="#" ><span>Гофрированные трубы</span></a></li>
                                            <li><a href="#" ><span>Изолента</span></a></li>
                                            <li><a href="#" ><span>Наконечники, гильзы, СИЗы, ЗПО</span></a></li>
                                            <li class="last"><a href="#" ><span>Распределительные коробки</span></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" ><span>Электрогенераторы</span></a></li>
                                    <li><a href="#" ><span>Звонки</span></a></li>
                                    <li><a href="#" ><span>Счетчики электроэнергии</span></a></li>
                                    <li class="last down">
                                        <a href="#" ><span>Умный Дом</span></a><span class="dropdown-button"></span>
                                        <ul class="">
                                            <li class="first"><a href="#" ><span>Домашние помощники</span></a></li>
                                            <li class="last"><a href="#" ><span>Системы защиты от протечек воды</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            -->

                            <li><a href="<?=Url::base(true).'/news'?>" ><span>Новости</span></a></li>
                            <li><a href="<?=Url::base(true).'/reviews'?>" ><span>Отзывы</span></a></li>
                            <li class="last"><a href="<?=Url::base(true).'/contacts'?>" ><span>Контакты</span></a></li>
                        </ul>
                        <div class="cleaner"></div>
                    </div>

                    <!--
                    <div class="header-cart text-center relative">
                        <div id="msMiniCart" class="">
                            <div class="empty">
                                <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="shopping-cart" role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" class="svg-inline--fa fa-shopping-cart fa-w-18 fa-2x">
                                    <path fill="currentColor" d="M551.991 64H129.28l-8.329-44.423C118.822 8.226 108.911 0 97.362 0H12C5.373 0 0 5.373 0 12v8c0 6.627 5.373 12 12 12h78.72l69.927 372.946C150.305 416.314 144 431.42 144 448c0 35.346 28.654 64 64 64s64-28.654 64-64a63.681 63.681 0 0 0-8.583-32h145.167a63.681 63.681 0 0 0-8.583 32c0 35.346 28.654 64 64 64 35.346 0 64-28.654 64-64 0-17.993-7.435-34.24-19.388-45.868C506.022 391.891 496.76 384 485.328 384H189.28l-12-64h331.381c11.368 0 21.177-7.976 23.496-19.105l43.331-208C578.592 77.991 567.215 64 551.991 64zM240 448c0 17.645-14.355 32-32 32s-32-14.355-32-32 14.355-32 32-32 32 14.355 32 32zm224 32c-17.645 0-32-14.355-32-32s14.355-32 32-32 32 14.355 32 32-14.355 32-32 32zm38.156-192H171.28l-36-192h406.876l-40 192z" class=""></path>
                                </svg>
                                <span>0</span>
                            </div>
                            <div class="not_empty">
                                <a href="sluzhebnyie-straniczyi/korzina.html" class="absolute"></a>
                                <div>
                                    <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="shopping-cart" role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512" class="svg-inline--fa fa-shopping-cart fa-w-18 fa-2x">
                                        <path fill="currentColor" d="M551.991 64H129.28l-8.329-44.423C118.822 8.226 108.911 0 97.362 0H12C5.373 0 0 5.373 0 12v8c0 6.627 5.373 12 12 12h78.72l69.927 372.946C150.305 416.314 144 431.42 144 448c0 35.346 28.654 64 64 64s64-28.654 64-64a63.681 63.681 0 0 0-8.583-32h145.167a63.681 63.681 0 0 0-8.583 32c0 35.346 28.654 64 64 64 35.346 0 64-28.654 64-64 0-17.993-7.435-34.24-19.388-45.868C506.022 391.891 496.76 384 485.328 384H189.28l-12-64h331.381c11.368 0 21.177-7.976 23.496-19.105l43.331-208C578.592 77.991 567.215 64 551.991 64zM240 448c0 17.645-14.355 32-32 32s-32-14.355-32-32 14.355-32 32-32 32 14.355 32 32zm224 32c-17.645 0-32-14.355-32-32s14.355-32 32-32 32 14.355 32 32-14.355 32-32 32zm38.156-192H171.28l-36-192h406.876l-40 192z" class=""></path>
                                    </svg>
                                    <span class="ms2_total_count">0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    --> <!--Закоментил корзину-->

                </div>
            </div>
        </div>
        <div class="top-bar-push-md cleaner visible-md"></div>
    </div>


    <?=$content?>
</div>
<div class="footer-wrapper">
    <div class="footer-bottom">
        <div class="container white">
            <div class="row">
                <div class="col-sm-6">
                    © <?=date('Y')?> «<?=$bigname->content?>»
                </div>
                <div class="col-sm-6 text-right-sm">
                    <!--                    Разработано в <a href="/" target="_blank"></a>-->
                </div>
            </div>
        </div>
    </div>
</div>

<?//=\app\components\CallbackFormWidget::widget()?>

<div class="modal" id="callback">
    <div class="title">Закажите звонок</div>
    <p>И наш менеджер свяжется с вами в течение 10 минут</p>
    <div class="rf">
        <!--        <form method="post" id="callbackform">-->
        <?= \yii\helpers\Html::beginForm('main/mail', 'post',['id' => 'callbackform','enctype' => 'multipart/form-data']); ?>
        <div class="form-group">
            <label class="label">Ваше имя *</label>
            <input name="callbackfio" value="" type="text" class="form-control required" placeholder="Ваше имя *" />
        </div>
        <div class="form-group">
            <label class="label">Ваш  телефон *</label>
            <input name="callbacktel" value="" type="text" class="form-control required tel" placeholder="Ваш  телефон *" />
        </div>
        <input type="hidden" name="callbackantispam" value="">
        <br />
        <div class="agreement form-group">
            <input type="checkbox" name="agreement" id="agreement1" class="required">
            <label for="agreement1">
                <i class="material-icons checked">check_box</i>
                <i class="material-icons no-checked">check_box_outline_blank</i>
                Согласен на обработку персональных данных *
            </label>
        </div>
        <input name="callbackbtn" type="submit" class="button btn" value="Отправить" />
        <?= \yii\helpers\Html::endForm(); ?>
        <!--        </form>-->
    </div>
</div>

<div class="modal" id="application">
    <div class="title-h2">Оформление заявки</div>
    <div class="rf">
        <?= \yii\helpers\Html::beginForm('main/mailtarif', 'post',['id' => 'mailtarif','enctype' => 'multipart/form-data']); ?>
        <div class="form-group">
            <input type="text" name="service_name" id="pricingInput" class="form-control" placeholder="Тип ремонта" value="Капитальный" readonly="readonly" />
        </div>
        <div class="form-group">
            <input type="text" name="fio" class="form-control" placeholder="Ваше имя" value="" />
        </div>
        <div class="form-group">
            <input type="text" name="tel" class="form-control tel required" placeholder="Телефон*" value=""  />
        </div>
        <p><span class="red">*</span> <span class="f12">- поля, обязательные для заполнения</span></p>
        <br>
        <div>
            <input type="submit" class="button btn" value="Отправить" name="applicationbtn" />
        </div>
        <?= \yii\helpers\Html::endForm(); ?>
    </div>
</div>

<div class="modal" id="requestPriceModal">
    <div class="title">Запрос цены и наличия товара</div>
    <div class="rf">
            <?= \yii\helpers\Html::beginForm('main/mailprice', 'post',['id' => 'requestPriceForm']); ?>
            <input type="hidden" name="requestpricelink">
            <div class="form-group">
                <label class="label">Наименование позиции</label>
                <input name="productname" value="" type="text" class="form-control" id="requestPriceInput" readonly />
            </div>
            <div class="form-group">
                <label class="label">Ваше имя *</label>
                <input name="fio" value="" type="text" class="form-control required" placeholder="Ваше имя *" />
            </div>
            <div class="form-group">
                <label class="label">Ваш  телефон *</label>
                <input name="tel" value="" type="text" class="form-control required tel" placeholder="Ваш  телефон *" />
            </div>
            <br />
            <div class="agreement form-group">
                <input type="checkbox" name="agreement" id="agreementRequestPrice" class="required">
                <label for="agreementRequestPrice">
                    <i class="material-icons checked">check_box</i>
                    <i class="material-icons no-checked">check_box_outline_blank</i>
                    Согласен на обработку персональных данных *
                </label>
            </div>
            <input name="requestpricebtn" type="submit" class="button btn" value="Отправить" />
            <?= \yii\helpers\Html::endForm(); ?>
    </div>
</div>

<span id="up"><i class="fa fa-angle-up"></i></span>

<div class="modal" id="responseMessage">
    <div class="title-h2">Сообщение успешно отправлено!</div>
    <hr />
    <div class="modal-body">Мы свяжемся с Вами в ближайшее время</div>
    <div class="push25"></div>
    <div class="row">
        <div class="col-xs-7 col-sm-5">
            <a href="#" class="button block fancyClose">Закрыть</a>
        </div>
    </div>
</div>
<script>
    $(function(){
        $('#pricing .button').click(function(){
            var priceValue = $(this).data('price');
            $('#pricingInput').val(priceValue);
        });
    });
</script>
</body>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
