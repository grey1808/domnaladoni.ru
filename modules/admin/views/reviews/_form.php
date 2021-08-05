<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use mihaildev\elfinder\ElFinder;
use yii\helpers\Url;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\InputFile;
use yii\web\JsExpression;
?>

<div class="reviews-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'secondname')->textInput() ?>
    <?= $form->field($model, 'message')->widget(CKEditor::className(), [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder',[/* Some CKEditor Options */]),
    ]);?>
<!--    --><?//= $form->field($model, 'message')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'publish')->checkbox()?>

    <div class="form-group">
        <?= Html::submitButton(Html::tag('i', '', ['class' => 'glyphicon glyphicon-edit']) .' Сохранить',['class' => 'btn btn-success']) ?>
        <?if(empty($model->id)):?>
            <?= Html::submitButton(Html::tag('i', '', ['class' => 'glyphicon glyphicon-check text-success']) .' Сохранить и выйти', ['class' => 'btn btn-default', 'formaction' => Url::to(['reviews/saveout'])]);?>
        <?else:?>
            <?= Html::submitButton(Html::tag('i', '', ['class' => 'glyphicon glyphicon-check text-success']) .' Сохранить и выйти', ['class' => 'btn btn-default', 'formaction' => Url::to(['reviews/updateout','id'=>$model->id])]);?>
        <?endif;?>
        <?= Html::a(Html::tag('i', '', ['class' => 'glyphicon glyphicon-remove text-danger']) . ' Отменить',['index'], ['class' => 'btn btn-default', 'title' => 'Отменить']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
