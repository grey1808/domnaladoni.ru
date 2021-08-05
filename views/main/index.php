<?php
$confidence1 = \app\modules\admin\models\Config::find()->where(['parameter'=>'confidence1'])->one();
$confidence2 = \app\modules\admin\models\Config::find()->where(['parameter'=>'confidence2'])->one();
$confidence3 = \app\modules\admin\models\Config::find()->where(['parameter'=>'confidence3'])->one();
$tarif1 = \app\modules\admin\models\Tarif::find()->where(['id'=>'1'])->one();
$tarif2 = \app\modules\admin\models\Tarif::find()->where(['id'=>'2'])->one();
$tarif3 = \app\modules\admin\models\Tarif::find()->where(['id'=>'3'])->one();
$company = \app\modules\admin\models\Config::find()->where(['parameter'=>'o-company'])->one();
$coordYandex = \app\modules\admin\models\Config::find()->where(['parameter'=>'coordinates'])->one();
$title_project = \app\modules\admin\models\Config::find()->where(['parameter'=>'title_project'])->one();
$tarif_title = \app\modules\admin\models\Config::find()->where(['parameter'=>'tarif_title'])->one();



use yii\helpers\Html;


?>



<div class="top-slider-wrapper">
    <div class="top-slider">
        <?php if (isset($slider)):?>
            <?php $count = 0?>
            <?php foreach ($slider as $item): $count++?>
                <div class="item item-<?=$count?>>">
                    <div class="inner relative">
                        <div class="img-wrapper">
                            <img src="<?=$item->images?>"  />
                        </div>
                        <div class="element-content text-center">
                            <div class="container">
                                <div class="element-content-inner">
                                    <div>
                                        <div class="title">
                                            <?=$item->name?>
                                        </div>
                                        <div class="subtitle">
                                            <p><?=$item->coment?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        <?php endif;?>
    </div>
</div>
<?php if (isset($service)):?>
    <section class="services-section" id="services">
        <div class="container">
            <div class="services-elements">
                <div class="row">
                    <?php foreach ($service as $item):?>
                        <div class="col-sm-6 col-lg-4">
                            <div class="element relative">
                                <a class="absolute" href="<?=\yii\helpers\Url::base(true).'/services/'.$item->alias?>"></a>
                                <div class="img-wrapper">
                                    <div class="table">
                                        <div class="table-cell">
                                            <img src="<?=$item->image_mini?>" width="60" height="60">
                                        </div>
                                    </div>
                                </div>
                                <div class="element-content">
                                    <div class="element-title">
                                        <div class="table">
                                            <div class="table-cell">
                                                <h3><?=$item->name?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
            <div class="push30"></div>
            <div class="text-center">
                <a href="<?=\yii\helpers\Url::base(true).'/services'?>" class="button">Смотреть все услуги</a>
            </div>
        </div>
        <div class="push60"></div>
    </section>
<?php endif;?>

<section class="vantages-section" id="vantages">
    <div class="container">
        <div class="title-h2 text-center upper">Почему нам доверяют сотни клиентов</div>
        <div class="push20 hidden-xs hidden-sm"></div>
        <div class="vantages">
            <div class="row">
                <div class="col-md-4">
                    <div class="element">
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="img-wrapper">
                                    <img src="<?=$confidence1->images?>" width="50" alt="<?=$confidence1->name?>">
                                </div>
                            </div>
                            <div class="col-xs-9">
                                <div class="title-h4"><?=$confidence1->name?></div>
                                <div class="text f14">
                                    <?=$confidence1->content?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="clear-hr">
                <div class="col-md-4">
                    <div class="element">
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="img-wrapper">
                                    <img src="<?=$confidence2->images?>" width="50" alt="<?=$confidence1->name?>">
                                </div>
                            </div>
                            <div class="col-xs-9">
                                <div class="title-h4"><?=$confidence2->name?></div>
                                <div class="text f14">
                                    <?=$confidence2->content?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="clear-hr">
                <div class="col-md-4">
                    <div class="element">
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="img-wrapper">
                                    <img src="<?=$confidence3->images?>" width="50" alt="<?=$confidence3->name?>">
                                </div>
                            </div>
                            <div class="col-xs-9">
                                <div class="title-h4"><?=$confidence3->name?></div>
                                <div class="text f14">
                                    <?=$confidence3->content?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="clear-hr">
            </div>
        </div>
    </div>
</section>

<?php if (isset($steps)):?>
<div class="steps-section">
    <div class="push70"></div>
    <div class="container">
        <div class="title-h2 text-center upper">Этапы выполнения работ</div>
        <hr class="hr-min">
        <div class="text f16 text-center">
            Всего <?=count($steps)?> простых шага
        </div>
        <div class="push60"></div>
        <div class="steps relative">
            <?php $count = 0?>
            <?php foreach ($steps as $item):?>
                <?php $count ++?>
                <div class="element relative <?= $count % 2 === 0 ?  'element-even' : 'element-odd'?>">
                    <span class="element-num"><?=$count?></span>
                    <div class="row">
                        <div class="col-sm-6 <?= $count % 2 === 0 ?  'col-sm-push-6' : ''?>">
                            <div class="img-wrapper">
                                <img src="<?=$item->images?>" alt="<?=$item->name?>">
                            </div>
                        </div>
                        <div class="col-sm-6 <?= $count % 2 === 0 ?  'col-sm-pull-6' : ''?>">
                            <div class="element-content">
                                <div class="element-title">
                                    <?=$item->name?>
                                </div>
                                <div class="element-text">
                                    <?=$item->content?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
    <div class="push70"></div>
</div>
<?php endif;?>
<section class="portfolio" id="portfolio">
    <div class="push70"></div>
    <div class="container">
        <div class="text-center">
            <h2 class="upper"><?=$title_project->name?></h2>
            <hr class="hr-min" />
            <div class="text weight300 f14">
                <?=$title_project->content?>
            </div>
            <div class="push60"></div>
        </div>
        <?php if (isset($categoryport)):?>
            <div class="row">
                <?php foreach ($categoryport as $value):?>

                    <div class="col-sm-6 col-md-4">
                        <figure class="item item-10">
                            <a href="<?=$value->images?>" data-sub-html="<?=$value->name?>">
                                <span class="img-wrapper"><img src="<?=$value->images?>" /></span>
                                <div class="text-center relative">
                                    <div class="title-h4">
                                        <div class="table">
                                            <div class="table-cell"><?=$value->name?></div>
                                        </div>
                                    </div>
                                    <p><?=$value->comment?></p>
                                </div>
                            </a>
                            <?php $portfolio = \app\modules\admin\models\Portfolio::find()->where(['portfolio_id'=>$value->id])->all()?>
                            <?php if (isset($portfolio)):?>
                                <?php foreach ($portfolio as $item):?>
                                    <div style="display:none;">
                                        <div>
                                            <a href="<?=$item->images?>" data-sub-html="<?=$item->comment?>">
                                                <img src="<?=$item->images?>">
                                                <div class="text-center relative">
                                                    <div class="title-h3"><?=$item->comment?></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                <?php endforeach;?>
                            <?php endif;?>
                            <script>
                                $(function(){
                                    $(".item-10").lightGallery({
                                        selector: 'a',
                                        thumbnail: true
                                    });
                                });
                            </script>
                        </figure>
                    </div>
                    <hr class="clear-hr">

                <?php endforeach;?>
            </div>
        <?php endif;?>
    </div>
    <div class="push60"></div>
</section>
<section class="b-pricing b-section b-section__expanding relative b-section__show" id="pricing">
    <div class="push60"></div>
    <div class="b-pricing_container container">
        <h2 class="text-center"><?=$tarif_title->content?></h2>
        <div class="push20"></div>
        <div class="b-pricing_list">
            <div class="b-pricing_plan">
                <div class="b-pricing_plan_inner">
                    <div class="b-pricing_plan_caption">«<?=$tarif1->name?>»</div>
                    <ul class="b-pricing_plan_include">
                        <?=$tarif1->content?>
                    </ul>
                    <div class="b-pricing_plan_sum">≈ <?=$tarif1->price?> руб.</div>
                    <div class="b-pricing_plan_checkout">
                        <a href="#application" class="button fancyboxModal invert" data-price="«<?=$tarif1->name?>»">Отправить заявку</a>
                    </div>
                </div>
            </div>
            <div class="b-pricing_plan b-pricing_plan__scale">
                <div class="b-pricing_plan_inner">
                    <div class="b-pricing_plan_caption">«<?=$tarif2->name?>»</div>
                    <ul class="b-pricing_plan_include">
                        <?=$tarif2->content?>
                    </ul>
                    <div class="b-pricing_plan_sum">≈ <?=$tarif2->price?> руб.</div>
                    <div class="b-pricing_plan_checkout">
                        <a href="#application" class="button fancyboxModal invert" data-price="«<?=$tarif2->name?>»">Отправить заявку</a>
                    </div>
                </div>
            </div>
            <div class="b-pricing_plan">
                <div class="b-pricing_plan_inner">
                    <div class="b-pricing_plan_caption">«<?=$tarif3->name?>»</div>
                    <ul class="b-pricing_plan_include">
                        <?=$tarif3->content?>
                    </ul>
                    <div class="b-pricing_plan_sum">≈ <?=$tarif3->price?> руб.</div>
                    <div class="b-pricing_plan_checkout">
                        <a href="#application" class="button fancyboxModal invert" data-price="«<?=$tarif3->name?>»">Отправить заявку</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="push60"></div>
    <div class="push10 hidden-xs"></div>
</section>
<?php if (isset($news)):?>
    <section class="news-section">
        <div class="push70 push70-top"></div>
        <div class="container">
            <div class="news">
                <div class="title-h4"><a href="<?=\yii\helpers\Url::base(true).'/news'?>">Новости компании</a></div>
                <?php $count = 0?>
                <?php foreach ($news as $item):?>
                    <?php $count ++?>
                    <?php if ($count % 2 === 0 ) echo '<div class="row">'?>

                    <div class="col-md-6">
                        <div class="element">
                            <div class="row min">
                                <div class="col-xs-4 col-sm-3 col-md-4">
                                    <div class="img-wrapper">
                                        <a href="<?=\yii\helpers\Url::to(['news/view', 'id'=>$item->alias])?>"><img src="<?=$item->images?>"></a>
                                    </div>
                                </div>
                                <div class="col-xs-8 col-sm-9 col-md-8">
                                    <div class="element-content">
                                        <div class="date"><?=Yii::$app->formatter->asDate($item->create_datetime, 'php:d.m.Y');?></div>
                                        <div class="push5"></div>
                                        <div class="title-h5">
                                            <a href="<?=\yii\helpers\Url::to(['news/view', 'id'=>$item->alias])?>" class="invert decoration-none"><?=$item->name?></a>
                                        </div>
                                        <div class="text weight100">
                                            <?=strip_tags($item->content)?>&#8230;
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if ($count % 2 === 0 ) echo '</div>'?>

                <?php endforeach;?>
            </div>
        </div>
        <div class="push70"></div>
    </section>
<?php endif;?>
<div class="about-section">
    <div class="push70"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-5 col-sm-push-6 col-lg-push-7">
                <div class="index-about-img">
                    <img src="<?=$company->images?>">
                </div>
                <div class="push50 visible-xs"></div>
            </div>
            <div class="col-sm-6 col-lg-7 col-sm-pull-6 col-lg-pull-5">
                <div class="content">
                    <h1><?=$company->name?></h1>
                    <?=$company->content?>
                    <p> </p>
                    <p><a class="button" href="<?=\yii\helpers\Url::base(true).'/company'?>">Подробнее</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="push40"></div>
    <div class="push10 hidden-xs"></div>
</div>

<section class="map-section relative" id="contacts">
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
</section>
<div class="footer-push"></div>




<!--<div class="modal" id="callback1">-->
<!--    <div class="title">Закажите звонок</div>-->
<!--    <p>И наш менеджер свяжется с вами в течение 10 минут</p>-->
<!--    <div class="rf">-->
<!--        --><?php //if (isset($form_model)):?>
<!--            --><?php //$form = \yii\widgets\ActiveForm::begin([
//                'action' => 'main/mail',
//                'id' => 'callbackform'
//            ]) ?>
<!--            --><?//= $form->field($form_model, 'callbackfio') ?>
<!--            --><?//= $form->field($form_model, 'callbacktel') ?>
<!--            --><?//= $form->field($form_model, 'callbackantispam') ?>
<!--            --><?//= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
<!--            --><?php //\yii\widgets\ActiveForm::end() ?>
<!--        --><?php //endif;?>
<!--    </div>-->
<!--</div>-->

