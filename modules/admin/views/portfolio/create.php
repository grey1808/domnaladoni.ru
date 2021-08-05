<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Portfolio */

$this->title = 'Добавить работу';
$this->params['breadcrumbs'][] = ['label' => 'Portfolios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="portfolio-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
