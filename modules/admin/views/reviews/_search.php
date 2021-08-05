<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;

?>
<div class="navbar-form navbar-left" role="search">
    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
        <div class="form-group">
            <?= $form->field($model, 'message')->label(false)->textInput(['placeholder'=>'Поиск']) ?>

            <?= $form->field($model, 'date')->widget(DatePicker::class, [
                'options' => [
                    'placeholder' => 'Дата',
                ],
                'pluginOptions' => [
                    'autoclose'=>true,
                    'format' => 'yyyy-mm-dd'
                ]
            ])->label(false) ?>
            <?= $form->field($model, 'email')->label(false)->textInput(['placeholder'=>'Email']) ?>

            <?= $form->field($model, 'publish')->label(false)->dropDownList([1=>'Опубликовано',0=>'Не опубликовано'],['prompt' =>'-Выбор состояния-'])?>
        </div>
    <?= Html::submitButton('Найти', ['class' => 'btn btn-default']) ?>

    <?= Html::a('Сбросить',['index'],['class' => 'btn btn-default']) ?>

    <?php ActiveForm::end(); ?>

</div>
