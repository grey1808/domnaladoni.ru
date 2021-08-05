<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\CategoryPortfolio */

$this->title = 'Обновить потрфолио: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Category Portfolios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="category-portfolio-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
