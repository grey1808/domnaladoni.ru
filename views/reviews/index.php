
<div class="middle">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-home"></i></a></li>
            <li class="breadcrumb-item active">Отзывы</li>
        </ol>
        <h1 class="pagetitle">Отзывы</h1>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <?php if( Yii::$app->session->hasFlash('success') ): ?>
                    <div class="alert alert-success alert-dismissible" role="alert"">
<!--                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                        <h2  style="color: #0db334 !important;"><?= Yii::$app->session->getFlash('success'); ?></h2>
                    </div>
                <?php endif;?>

                <?php if( Yii::$app->session->hasFlash('error') ): ?>
                    <div class="alert alert-danger alert-dismissible" role="alert" >
<!--                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                        <h2  style="color: red !important;"><?= Yii::$app->session->getFlash('error'); ?></h2>
                    </div>
                <?php endif;?>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <div class="comments">
        <div id="comments-wrapper">
            <div class="container">
                <div class="reviews comment-list" id="comments">
                    <div class="rev-grid-sizer"></div>
                    <?php if (!empty($reviews)):?>
                    <?php foreach ($reviews as $item):?>
                    <div class="rev-item ticket-comment">
                        <div class="inner ticket-comment-body1">
                            <div class="rev-header ticket-comment-header">
                                <div class="rev-date"><?=Yii::$app->formatter->asDate($item->date, 'php:d.m.Y');?></div>
                                <div class="title f18 upper"><?=$item->lastname?></div>
                                <div class="push20"></div>
                            </div>
                            <div class="rev-text ticket-comment-text">
                                <?=$item->message?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                    <?php else:;?>
                        <div class="rev-item ticket-comment">
                            <div class="rev-header ticket-comment-header">
                                <h3 >Пока что нет ни одного отызва, но вы можете его оставить.</h3>
                            </div>
                        </div>
                    <?php endif;?>
                    <div class="push60"></div>
                </div>
            </div>
        </div>
        <div class="push30"></div>
        <div id="comments-tpanel">
            <div id="tpanel-new"></div>
        </div>
    </div>
    <div class="comment-form-wrapper">
        <div class="container">
            <div class="inner">
                <div class="title-h2">Написать отзыв</div>
                <div id="comment-form-placeholder">

                    <?php $form = \yii\widgets\ActiveForm::begin(); ?>

                    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true,'placeholder'=>'Ваше имя'])->label(false) ?>

                    <?= $form->field($model, 'email')->textInput(['maxlength' => true,'placeholder'=>'Email'])->label(false)  ?>

                    <?= $form->field($model, 'message')->textarea(['maxlength' => true,'placeholder'=>'Ваш отзыв'])->label(false)  ?>

                    <?= $form->field($model, 'reCaptcha')->widget(\himiklab\yii2\recaptcha\ReCaptcha2::className())->label(false)  ?>

                    <div class="form-group">
                        <?= \yii\helpers\Html::submitButton('Написать', ['class' => 'btn button']) ?>
                    </div>

                    <?php \yii\widgets\ActiveForm::end(); ?>

<!--
                    <?= \yii\helpers\Html::beginForm('', 'post'); ?>
                        <div id="comment-preview-placeholder"></div>
                        <div class="form-group">
                            <input type="text" name="name" value="" id="comment-name" class="form-control" placeholder="Ваше имя" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" value="" id="comment-email" class="form-control" placeholder="Email" />
                        </div>
                        <div class="form-group">
                            <label for="comment-editor"></label>
                            <textarea name="text" id="comment-editor" cols="30" rows="10" class="form-control" placeholder="Ваш отзыв"></textarea>
                        </div>
                        <div class="form-actions">
                            <input type="submit" class="btn button submit" value="Написать"  />
                        </div>
                    <?php \yii\helpers\Html::endForm(); ?>
                    -->
                </div>
            </div>
        </div>
    </div>
</div>




<div class="footer-push"></div>

