<?php
use yii\helpers\Html;
?>
<div id="lang">
        <select class="selectpicker" onchange="location = this.value;">
                <option><a href="" class="btn btn-success disabled"><?= $current->name;?></a></option>
                <?php foreach ($langs as $lang):?>
                        <option value="<?='/'.$lang->url.Yii::$app->getRequest()->getLangUrl() ?>"> <?= Html::a($lang->name, '/'.$lang->url.Yii::$app->getRequest()->getLangUrl(), ['class' => 'btn btn-default']) ?></option>
                <?php endforeach;?>
        </select>

<!--        <a href="" class="btn btn-success disabled">--><?//= $current->name;?><!--</a>-->
<!--        --><?php //foreach ($langs as $lang):?>
<!--                --><?//= Html::a($lang->name, '/'.$lang->url.Yii::$app->getRequest()->getLangUrl(), ['class' => 'btn btn-default']) ?>
<!--        --><?php //endforeach;?>
</div>