<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SearchOrder */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
    <div class="row">
    <div class="col-md-3 col-sm-4 col-xs-6">
    <?= $form->field($model, 'id') ?>
    </div>

    <div class="col-md-3 col-sm-4 col-xs-6">
    <?= $form->field($model, 'type') ?>
    </div>

    <?php // $form->field($model, 'client_name') ?>

    <?php //$form->field($model, 'phone') ?>

    <?php //$form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'where_find') ?>
    <div class="col-md-3 col-sm-4 col-xs-6">
    <?php  echo $form->field($model, 'device_type') ?>
    </div>

    <div class="col-md-3 col-sm-4 col-xs-6">
    <?php  echo $form->field($model, 'serial_number') ?>
    </div>

    <div class="col-md-3 col-sm-4 col-xs-6">
    <?php  echo $form->field($model, 'brand') ?>
    </div>

    <?php // echo $form->field($model, 'model') ?>

    <?php // echo $form->field($model, 'malfunction') ?>

    <?php // echo $form->field($model, 'appearance') ?>

    <?php // echo $form->field($model, 'equipment') ?>

    <div class="col-md-3 col-sm-4 col-xs-6">
    <?php  echo $form->field($model, 'notes') ?>
    </div>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'indicative_price') ?>

    <?php // echo $form->field($model, 'avans') ?>

    <?php // echo $form->field($model, 'urgently') ?>

    <div class="col-md-3 col-sm-4 col-xs-6">
    <?php  echo $form->field($model, 'manager') ?>
    </div>

    <div class="col-md-3 col-sm-4 col-xs-6">
    <?php  echo $form->field($model, 'executor') ?>
    </div>

    </div>
    <div class="form-group">
        <?= Html::submitButton(Yii::t('main', 'Искать'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('main', 'Сброс'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
