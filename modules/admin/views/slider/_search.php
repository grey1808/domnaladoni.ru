<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\SliderSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="slider-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'position') ?>

    <?= $form->field($model, 'images') ?>

    <?= $form->field($model, 'url') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'coment') ?>

    <?php // echo $form->field($model, 'publish') ?>

    <?php // echo $form->field($model, 'sort') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
