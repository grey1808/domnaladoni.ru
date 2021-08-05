<li>
    <?php if( !isset($category['childs']) ): ?>
        <a href="<?=yii\helpers\Url::to(['services/view','id' => $category['alias']])?>">
            <span><?= $category['name'];?></span>
        </a>
    <?php endif;?>

    <?php if( isset($category['childs']) ): ?>
        <li class="down">
            <a href="<?=yii\helpers\Url::to(['services/view','id' => $category['alias']])?>" >
                <span><?=$category['name'];?></span>
            </a><!--<span class="dropdown-button"></span>-->
            <ul class="">
                <?= $this->getMenuHtml($category['childs'])?>
            </ul>
        </li>
    <?php endif;?>
</li>

