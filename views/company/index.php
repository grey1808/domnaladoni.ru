<?php
$company = \app\modules\admin\models\Config::find()->where(['parameter'=>'o-company'])->one();
?>
<div class="middle">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-home"></i></a></li>
            <li class="breadcrumb-item active">О компании</li>
        </ol>
        <h1 class="pagetitle"><?=$company->name?></h1>
        <div class="row">
            <div class="col-sm-6 col-lg-5 col-sm-push-6 col-lg-push-7">
                <div class="index-about-img">
                    <img src="<?=$company->images?>">
                </div>
                <div class="push40"></div>
            </div>
            <div class="col-sm-6 col-lg-7 col-sm-pull-6 col-lg-pull-5">
                <div class="content">
                    <?=$company->content?>
                </div>
            </div>
        </div>


        <div class="push30"></div>
        <h2>Основные услуги компании</h2>
    </div>
    <div class="push30"></div>
</div>




<?=\app\components\WidgetService::widget();?>

</div>