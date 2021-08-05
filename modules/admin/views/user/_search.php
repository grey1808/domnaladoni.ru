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
            <?= $form->field($model, 'username')->label(false)->textInput(['placeholder'=>'Логин']) ?>

            <?= $form->field($model, 'status')->label(false)->dropDownList([0=>'Активна',1=>'Не активна'],['prompt' =>'-Выбор состояния-'])?>

            <?// получаем всех
            $category = \app\modules\admin\models\User::find()->all();
            // формируем массив, с ключем равным полю 'id' и значением равным полю 'name'
            $items = ArrayHelper::map($category,'role','role');
            $params = [
                'prompt' => '-Выбор группы-'
            ];
            echo $form->field($model, 'role')->label(false)->dropDownList($items,$params);?>
        </div>
    <?= Html::submitButton('Найти', ['class' => 'btn btn-default']) ?>

    <?= Html::a('Сбросить',['index'],['class' => 'btn btn-default']) ?>

    <?php ActiveForm::end(); ?>

</div>
