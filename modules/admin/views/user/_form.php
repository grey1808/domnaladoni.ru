<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use kartik\date\DatePicker;
?>
<div class="col-md-9">
    <div class="row">
        <div class="col-sm-8 col-xs-12">

<div class="form-admin-edit">

    <?php $form = ActiveForm::begin(); ?>

    <div class="col-md-6 form-group-edit-left">
        <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6 form-group-edit-left">
        <?= $form->field($model, 'secondname')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'birthday')->widget(DatePicker::class, [
            'options' => [
                'value' => Yii::$app->formatter->asDate($model->birthday,'php:d.m.Y'),
            ],
        ]) ?>
    </div>
    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'role')->dropDownList([
        'root' =>'Администратор',
        'attorney'=>'Редактор',
        'user'=>'Пользователь',
    ]) ?>

    <?= $form->field($model, 'status')->checkbox()?>


    <div class="form-group">
        <?= Html::submitButton(Html::tag('i', '', ['class' => 'glyphicon glyphicon-edit']) .' Сохранить',['class' => 'btn btn-success']) ?>
        <?if(empty($model->id)):?>
            <?= Html::submitButton(Html::tag('i', '', ['class' => 'glyphicon glyphicon-share text-success']) .' Сохранить и создать', ['class' => 'btn btn-default', 'formaction' => Url::to(['user/savecreate'])]);?>
        <?else:?>
            <?= Html::submitButton(Html::tag('i', '', ['class' => 'glyphicon glyphicon-share text-success']) .' Сохранить и создать', ['class' => 'btn btn-default', 'formaction' => Url::to(['user/updatecreate','id'=>$model->id])]);?>
        <?endif;?>
        <?= Html::a(Html::tag('i', '', ['class' => 'glyphicon glyphicon-remove text-danger']) . ' Отменить',['index'], ['class' => 'btn btn-default', 'title' => 'Отменить']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
    </div>
</div>
