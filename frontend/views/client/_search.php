<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\SearchClient */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="client-search form-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <div class="row">
        <div class="col-md-3 col-sm-4 col-xs-6">
            <?= $form->field($model, 'id') ?>
        </div>

        <div class="col-md-3 col-sm-4 col-xs-6">
            <?= $form->field($model, 'user_id') ?>
        </div>

        <div class="col-md-3 col-sm-4 col-xs-6">
            <?= $form->field($model, 'name') ?>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
            <?= $form->field($model, 'mob_phone') ?>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6">
            <?= $form->field($model, 'email') ?>
        </div>
        <?php // echo $form->field($model, 'adress') ?>

        <?php // echo $form->field($model, 'sale_card') ?>

        <?php // echo $form->field($model, 'sale_service') ?>

        <?php // echo $form->field($model, 'sale_product') ?>

        <?php // echo $form->field($model, 'note') ?>

        <?php // echo $form->field($model, 'from') ?>

    </div>
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
            <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
        </div>

    <?php ActiveForm::end(); ?>


</div>
