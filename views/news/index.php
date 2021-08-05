<?php
use yii\helpers\Url;
?>

<div class="middle">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-home"></i></a></li>
            <li class="breadcrumb-item active">Новости</li>
        </ol>
        <h1 class="pagetitle">Новости</h1>
        <div class="news">
            <div class="row">
                <?php if (isset($newpag)):?>
                <?php foreach ($newpag as $item):?>
                <div class="col-md-6">
                    <div class="element">
                        <div class="row min">
                            <div class="col-xs-4 col-sm-3 col-md-4">
                                <div class="img-wrapper">
                                    <a href="<?=Url::to(['news/view', 'id'=>$item->alias]) ?>"><img src="<?=$item->images?>"></a>
                                </div>
                            </div>
                            <div class="col-xs-8 col-sm-9 col-md-8">
                                <div class="element-content">
                                    <div class="date"><?=Yii::$app->formatter->asDate($item->create_datetime, 'php:d.m.Y');?></div>
                                    <div class="push5"></div>
                                    <div class="title-h5">
                                        <a href="<?=Url::to(['news/view', 'id'=>$item->alias])?>" class="invert decoration-none"><?=$item->name?></a>
                                    </div>
                                    <div class="text weight100">
                                        <?=$item->content?>&#8230;
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
        <div class="push50"></div>
    </div>
</div>

<section id="pagination">
    <div class="container">
        <div class="row">
            <div class="pagination-div">
                <?php echo \yii\widgets\LinkPager::widget([
                    'pagination' => $pages,
                ]);
                ?>
            </div>
        </div>
    </div>
</section>

<div class="footer-push"></div>

            