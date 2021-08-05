

<?php if (isset($service)):?>
    <section class="services-section" id="services">
        <div class="container">
            <div class="services-elements">
                <div class="row">
                    <?php foreach ($service as $item):?>
                        <div class="col-sm-6 col-lg-4">
                            <div class="element relative">
                                <a class="absolute" href="<?=\yii\helpers\Url::base(true).'/services/'.$item->alias?>"></a>
                                <div class="img-wrapper">
                                    <div class="table">
                                        <div class="table-cell">
                                            <img src="<?=$item->image_mini?>" width="60" height="60">
                                        </div>
                                    </div>
                                </div>
                                <div class="element-content">
                                    <div class="element-title">
                                        <div class="table">
                                            <div class="table-cell">
                                                <h3><?=$item->name?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
            <div class="push30"></div>
        </div>
        <div class="push60"></div>
    </section>
<?php endif;?>