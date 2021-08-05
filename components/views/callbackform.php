<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>
<div class="modal" id="callback">
    <div class="title">Закажите звонок</div>
    <p>И наш менеджер свяжется с вами в течение 10 минут</p>
    <div class="rf">
        <?php if (isset($form_model)):?>
            <?php $form = ActiveForm::begin([
                'action' => 'main/mail',
                'id' => 'callbackform'
            ]) ?>
            <?= $form->field($form_model, 'callbackfio') ?>
            <?= $form->field($form_model, 'callbacktel') ?>
            <?= $form->field($form_model, 'callbackantispam') ?>
            <?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
            <?php ActiveForm::end() ?>
        <?php endif;?>
    </div>
</div>






<!--<div class="modal" id="callback">-->
<!--    <div class="title">Закажите звонок</div>-->
<!--    <p>И наш менеджер свяжется с вами в течение 10 минут</p>-->
<!--    <div class="rf">-->
<!--        <!--        <form method="post" id="callbackform">-->-->
<!--        --><?//= \yii\helpers\Html::beginForm('main/mail', 'post',['id' => 'callbackform','enctype' => 'multipart/form-data']); ?>
<!--        <div class="form-group">-->
<!--            <label class="label">Ваше имя *</label>-->
<!--            <input name="callbackfio" value="" type="text" class="form-control required" placeholder="Ваше имя *" />-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--            <label class="label">Ваш  телефон *</label>-->
<!--            <input name="callbacktel" value="" type="text" class="form-control required tel" placeholder="Ваш  телефон *" />-->
<!--        </div>-->
<!--        <input type="hidden" name="callbackantispam" value="">-->
<!--        <br />-->
<!--        <div class="agreement form-group">-->
<!--            <input type="checkbox" name="agreement" id="agreement1" class="required">-->
<!--            <label for="agreement1">-->
<!--                <i class="material-icons checked">check_box</i>-->
<!--                <i class="material-icons no-checked">check_box_outline_blank</i>-->
<!--                Согласен на обработку персональных данных *-->
<!--            </label>-->
<!--        </div>-->
<!--        <input name="callbackbtn" type="submit" class="button btn" value="Отправить" />-->
<!--        --><?//= \yii\helpers\Html::endForm(); ?>
<!--        <!--        </form>-->-->
<!--    </div>-->
<!--</div>-->
