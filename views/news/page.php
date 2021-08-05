<?php
use yii\helpers\Url;
?>

<?php if (isset($new)):?>
<div class="middle">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-home"></i></a></li>
            <li class="breadcrumb-item"><a href="<?=Url::base(true).'/news'?>">Новости</a></li>
            <li class="breadcrumb-item active"><?=$new->name?></li>
        </ol>
        <h1 class="pagetitle"><?=$new->name?></h1>
        <div class="row">
            <div class="col-md-8">
                <div class="main-column-left">
                    <div class="article-img relative">
                        <img src="<?=$new->images?>" alt="<?=$new->name?>" />
                        <div class="push30"></div>
                    </div>
                    <div class="date f13 light gray"><?=Yii::$app->formatter->asDate($new->create_datetime, 'php:d M Y');?> года</div>
                    <div class="push20"></div>
                    <div class="content">
                        <?=$new->content?>
                    </div>
                    <div class="push10"></div>
                    <script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
                    <script src="https://yastatic.net/share2/share.js"></script>
                    <div class="ya-share2" data-services="collections,vkontakte,facebook,odnoklassniki,moimir,gplus" data-counter=""></div>
                    <div class="push20"></div>
                    <div class="push30"></div>
                </div>
            </div>
            <div class="col-md-4">
                <?php if (isset($news)):?>
                <div class="aside-news">
                    <div class="title-h3" style="margin-top: -8px;">Последние новости</div>
                    <div class="inner">
                        <div class="row">
                            <?php foreach ($news as $item):?>
                            <div class="col-sm-6 col-md-12">
                                <div class="element relative">
                                    <div class="img-wrapper col-md-4 col-sm-4 col-xs-4">
                                        <a href="<?=Url::to(['news/view', 'id'=>$item->alias])?>"><img class="img-responsive" src="<?=$item->images?>" alt="<?=$item->name?>" /></a>
                                    </div>
                                    <div class="col-md-1  col-sm-2  col-xs-2"></div>
                                    <div class="element-content col-md-7  col-sm-6 col-xs-6">
                                        <div class="date f13"><?=Yii::$app->formatter->asDate($item->create_datetime, 'php:d.m.Y');?></div>
                                        <div class="push2"></div>
                                        <div class="title bold f14">
                                            <?=$item->name?>
                                        </div>
                                        <a href="<?=Url::to(['news/view', 'id'=>$item->alias])?>" class="f13">Читать далее</a>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
                <?php endif;?>
                <div class="push20"></div>
            </div>
        </div>
        <div class="push30"></div>
    </div>
</div>
<?php endif;?>




<div class="footer-push"></div>
