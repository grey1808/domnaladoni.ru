<?php if (isset($service)):?>
<div class="middle">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-home"></i></a></li>
            <li class="breadcrumb-item"><a href="<?=\yii\helpers\Url::base(true).'/services'?>">Услуги</a></li>
            <li class="breadcrumb-item active"><?=$service->name?></li>
        </ol>
        <h1 class="pagetitle"><?=$service->name?></h1>
        <div class="row">
            <div class="col-md-4">
                <div class="aside">
                    <div class="aside-menu">
                        <div class="aside-menu-title visible-xs visible-sm">
                            Услуги
                        </div>
                        <ul class="">
                            <?= \app\components\MenuWidget::widget(['tpl' => 'menu']);?>
                        </ul>
                    </div>
                    <div class="push40 hidden-xs hidden-sm"></div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="main-column">
                    <div class="article-img">
                        <img src="<?=$service->image_header?>" alt="">
                    </div>
                    <div class="push30"></div>
                    <div class="content">
                        <?=$service->content?>
                    </div>
                    <div class="push10"></div>
                    <div class="push60"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif;?>


<div class="footer-push"></div>
