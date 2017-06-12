<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Order */

$this->title = 'Создание заказа';
?>
<div class="order-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
