<?php
use yii\helpers\Html;
?>
<div id="lang">
        <a href="" class="btn btn-success disabled"><?= $current->name;?></a>
        <?php foreach ($langs as $lang):?>
                <?= Html::a($lang->name, '/'.$lang->url.Yii::$app->getRequest()->getLangUrl(), ['class' => 'btn btn-default']) ?>
        <?php endforeach;?>
</div>