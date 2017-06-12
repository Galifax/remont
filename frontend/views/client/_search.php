<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\SearchClient */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="client-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'mob_phone') ?>

    <?= $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'adress') ?>

    <?php // echo $form->field($model, 'sale_card') ?>

    <?php // echo $form->field($model, 'sale_service') ?>

    <?php // echo $form->field($model, 'sale_product') ?>

    <?php // echo $form->field($model, 'note') ?>

    <?php // echo $form->field($model, 'from') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
