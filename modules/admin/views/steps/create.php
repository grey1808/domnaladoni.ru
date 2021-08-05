<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Steps */

$this->title = 'Добавить шаг';
$this->params['breadcrumbs'][] = ['label' => 'Steps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="steps-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
