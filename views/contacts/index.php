<?php
$address = \app\modules\admin\models\Config::find()->where(['parameter'=>'address'])->one();
$telefone1 = \app\modules\admin\models\Config::find()->where(['parameter'=>'telefone1'])->one();
$telefone2 = \app\modules\admin\models\Config::find()->where(['parameter'=>'telefone2'])->one();
$email = \app\modules\admin\models\Config::find()->where(['parameter'=>'email'])->one();
$timework = \app\modules\admin\models\Config::find()->where(['parameter'=>'timework'])->one();
$coordYandex = \app\modules\admin\models\Config::find()->where(['parameter'=>'coordinates'])->one();
?>
<div class="middle contacts-template">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-home"></i></a></li>
            <li class="breadcrumb-item active">Контакты</li>
        </ol>
        <h1 class="pagetitle">Контакты</h1>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <?php if( Yii::$app->session->hasFlash('success') ): ?>
                <div class="alert alert-success alert-dismissible" role="alert"">
                <!--                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                <h2  style="color: #0db334 !important;"><?= Yii::$app->session->getFlash('success'); ?></h2>
            </div>
            <?php endif;?>

            <?php if( Yii::$app->session->hasFlash('error') ): ?>
                <div class="alert alert-danger alert-dismissible" role="alert" >
                    <!--                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                    <h2  style="color: red !important;"><?= Yii::$app->session->getFlash('error'); ?></h2>
                </div>
            <?php endif;?>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="contacts-block">
                    <div class="element bold f18 address-element">
                        <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="map-marker-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 384 512" class="svg-inline--fa fa-map-marker-alt fa-w-12 fa-2x">
                            <path fill="currentColor" d="M192 96c-52.935 0-96 43.065-96 96s43.065 96 96 96 96-43.065 96-96-43.065-96-96-96zm0 160c-35.29 0-64-28.71-64-64s28.71-64 64-64 64 28.71 64 64-28.71 64-64 64zm0-256C85.961 0 0 85.961 0 192c0 77.413 26.97 99.031 172.268 309.67 9.534 13.772 29.929 13.774 39.465 0C357.03 291.031 384 269.413 384 192 384 85.961 298.039 0 192 0zm0 473.931C52.705 272.488 32 256.494 32 192c0-42.738 16.643-82.917 46.863-113.137S149.262 32 192 32s82.917 16.643 113.137 46.863S352 149.262 352 192c0 64.49-20.692 80.47-160 281.931z" class=""></path>
                        </svg>
                        Адрес:
                    </div>
                    <div class="push10"></div>
                    <div><?=$address->content?></div>
                    <hr class="hidden-xs hidden-sm" />
                    <div class="push20 visible-xs visible-sm"></div>
                    <div class="element bold f18 phone-element">
                        <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="phone-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512" class="svg-inline--fa fa-phone-alt fa-w-16 fa-2x">
                            <path fill="currentColor" d="M493.09 351.3L384.7 304.8a31.36 31.36 0 0 0-36.5 8.9l-44.1 53.9A350 350 0 0 1 144.5 208l53.9-44.1a31.35 31.35 0 0 0 8.9-36.49l-46.5-108.5A31.33 31.33 0 0 0 125 .81L24.2 24.11A31.05 31.05 0 0 0 0 54.51C0 307.8 205.3 512 457.49 512A31.23 31.23 0 0 0 488 487.7L511.19 387a31.21 31.21 0 0 0-18.1-35.7zM456.89 480C222.4 479.7 32.3 289.7 32.1 55.21l99.6-23 46 107.39-72.8 59.5C153.3 302.3 209.4 358.6 313 407.2l59.5-72.8 107.39 46z" class=""></path>
                        </svg>
                        Телефоны:
                    </div>
                    <div class="push10"></div>
                    <div><?=$telefone1->content?></div>
                    <div class="push5"></div>
                    <div><?=$telefone2->content?></div>
                    <hr class="hidden-xs hidden-sm" />
                    <div class="push20 visible-xs visible-sm"></div>
                    <div class="element bold f18 email-element">
                        <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512" class="svg-inline--fa fa-envelope fa-w-16 fa-2x">
                            <path fill="currentColor" d="M464 64H48C21.5 64 0 85.5 0 112v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM48 96h416c8.8 0 16 7.2 16 16v41.4c-21.9 18.5-53.2 44-150.6 121.3-16.9 13.4-50.2 45.7-73.4 45.3-23.2.4-56.6-31.9-73.4-45.3C85.2 197.4 53.9 171.9 32 153.4V112c0-8.8 7.2-16 16-16zm416 320H48c-8.8 0-16-7.2-16-16V195c22.8 18.7 58.8 47.6 130.7 104.7 20.5 16.4 56.7 52.5 93.3 52.3 36.4.3 72.3-35.5 93.3-52.3 71.9-57.1 107.9-86 130.7-104.7v205c0 8.8-7.2 16-16 16z" class=""></path>
                        </svg>
                        E-mail:
                    </div>
                    <div class="push10"></div>
                    <div><?=$email->content?></div>
                    <hr class="hidden-xs hidden-sm" />
                    <div class="push20 visible-xs visible-sm"></div>
                    <div class="element bold f18 schedule-element">
                        <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512" class="svg-inline--fa fa-clock fa-w-16 fa-2x">
                            <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm216 248c0 118.7-96.1 216-216 216-118.7 0-216-96.1-216-216 0-118.7 96.1-216 216-216 118.7 0 216 96.1 216 216zm-148.9 88.3l-81.2-59c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h14c6.6 0 12 5.4 12 12v146.3l70.5 51.3c5.4 3.9 6.5 11.4 2.6 16.8l-8.2 11.3c-3.9 5.3-11.4 6.5-16.8 2.6z" class=""></path>
                        </svg>
                        Режим работы:
                    </div>
                    <div class="push10"></div>
                    <div><?=$timework   ->content?></div>
                    <hr class="hidden-xs hidden-sm" />
                    <div class="push20 visible-xs visible-sm"></div>
                </div>
                <div class="push40 visible-xs visible-sm"></div>
            </div>
            <div class="col-md-8">
                <div class="map-wrapper">
                    <script src="https://api-maps.yandex.ru/2.1/?load=package.full&lang=ru-RU" type="text/javascript"></script>
                    <div id="mapexMap" style="width:100%;height:100%;"></div>
                    <script type="text/javascript">
                        ymaps.ready(function () {
                            var mapexMap = new ymaps.Map('mapexMap', {
                                    center: [<?=$coordYandex->content?>],
                                    zoom: 16,
                                    controls: ['zoomControl']
                                }),


                                myPlacemark = new ymaps.Placemark(
                                    [<?=$coordYandex->content?>],
                                    {"iconContent":"","balloonContentBody":"\u041c\u043e\u0441\u043a\u0432\u0430 \u0443\u043b. \u041a\u0430\u043b\u0443\u0436\u0441\u043a\u0430\u044f, 80","balloonContentHeader":""}, {
                                        // Опции.
                                        // Необходимо указать данный тип макета.
                                        iconLayout: 'default#image',
                                        // Своё изображение иконки метки.
                                        iconImageHref: '/web/images/assets/template/images/map-marker.png',
                                        // Размеры метки.
                                        iconImageSize: [35, 47],
                                        // Смещение левого верхнего угла иконки относительно
                                        // её "ножки" (точки привязки).
                                        iconImageOffset: [-17, -47]
                                    });
                            mapexMap.behaviors.disable('scrollZoom');
                            mapexMap.geoObjects.add(myPlacemark);


                        });
                    </script>
                </div>
                <div class="push40"></div>
            </div>
        </div>
        <hr>
        <div class="contacts-form">
            <div class="push20"></div>
            <h4>
                Если у вас возникли вопросы или предложения, мы будем рады их рассмотреть.
                Для этого заполните форму ниже.
            </h4>
            <div class="rf">
<!--                <form method="post" id="contact_form">-->
                    <?php \yii\helpers\Html::beginForm('main/mailmess', 'post',['id' => 'contact_form']); ?>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control required" name="cf_name" type="text" value="" placeholder="Ваше имя *">
                            </div>
                            <div class="form-group">
                                <input class="form-control required" name="cf_email" type="email" value="" placeholder="Email *">
                            </div>
                            <div class="form-group">
                                <input class="form-control tel" name="cf_phone" type="text" value="" placeholder="Ваш телефон">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <textarea class="form-control required" name="cf_message" placeholder="Сообщение *" style="min-height: 155px;"></textarea>
                            </div>
                            <input type="hidden" name="cf_antispam" value="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="push20"></div>
                            <div class="agreement form-group">
                                <input type="checkbox" name="agreement" id="agreement5" class="required">
                                <label for="agreement5">
                                    <i class="material-icons checked">check_box</i>
                                    <i class="material-icons no-checked">check_box_outline_blank</i>
                                    Согласен на обработку персональных данных *
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="push10"></div>
                            <div class="text-right-sm">
                                <input type="submit" class="button btn" name="cf_btn" value="Отправить">
                            </div>
                        </div>
                    </div>
                    <?php \yii\helpers\Html::endForm(); ?>
<!--                </form>-->
            </div>
            <div class="push50"></div>
        </div>
    </div>
</div>
<div class="footer-push"></div>