<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\CategoryPortfolio */

$this->title = 'Добавить портфолио';
$this->params['breadcrumbs'][] = ['label' => 'Category Portfolios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-portfolio-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
