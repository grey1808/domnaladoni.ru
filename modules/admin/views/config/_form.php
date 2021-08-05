<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
use mihaildev\elfinder\InputFile;
use yii\helpers\Url;
use yii\web\JsExpression;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Config */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="config-form">
<h4><b class="text-warning">Рекомендация</b> </h4>
    <p  class="text-danger">Для редактирования параметров, вам потребуется <b>минимальное</b> знание основ <b> html</b>.</p>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'parameter')->textInput(['maxlength' => true,'readonly'=>'readonly']) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows'=>5]) ?>

<!--    --><?//= $form->field($model, 'content')->widget(CKEditor::className(), [
//        'editorOptions' => ElFinder::ckeditorOptions('elfinder',[/* Some CKEditor Options */]),
//    ]);?>

    <?= $form->field($model, 'images')->widget(InputFile::className(), [
        'language'      => 'ru',
        'controller'    => 'elfinder', // вставляем название контроллера, по умолчанию равен elfinder
        'template'      => '<div class="input-group">{input}<span class="input-group-btn">{button}</span></div>',
        'options'       => ['class' => 'form-control'],
        'buttonOptions' => ['class' => 'btn btn-default'],
        'multiple'      => true       // возможность выбора нескольких файлов
    ]);?>

    <?= $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
