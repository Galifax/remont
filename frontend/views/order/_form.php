<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\base\Model;


/* @var $this yii\web\View */
/* @var $model backend\models\Order */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-form">
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
    <?= $form->field($model, 'user_id')->hiddenInput(['value'=> Yii::$app->user->id])->label(false); ?>
    <div class="col-md-6">
    <?= $form->field($model, 'type')->dropDownList([
    '0' => Yii::t('main', 'Платный'),
    '1' => Yii::t('main', 'По гарантии'),
    ]); ?>
    </div>
    </div>
    <h2 class="text-center"><?= Yii::t('main', 'Клиент')?></h2>
    <div class="row">
    <div class="col-md-12">
    <?= $form->field($model, 'client_name')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'where_find')->textInput(['maxlength' => true]) ?>
    </div>
    </div>

    <h2 class="text-center"><?= Yii::t('main', 'Устройство и неисправности')?></h2>

    <div class="row">
     <div class="col-md-6">
    <?= $form->field($model, 'device_type')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'serial_number')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'brand')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'model')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'malfunction')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'appearance')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-12">
    <?= $form->field($model, 'equipment')->textArea(['maxlength' => true, 'rows' => 5]) ?>
    </div>
    </div>

    <h2 class="text-center"><?= Yii::t('main', 'Дополнительная информация')?></h2>
    <div class="row">
    <div class="col-md-12">
    <?= $form->field($model, 'notes')->textArea(['maxlength' => true, 'rows' => 5]) ?>
    </div>
    <div class="col-md-3">
    <?= $form->field($model, 'indicative_price')->textInput() ?>
    </div>
    <div class="col-md-3">
    <?= $form->field($model, 'avans')->textInput() ?>
    </div>
     <div class="col-md-3">
    <?= $form->field($model, 'date')->textInput() ?>
    </div>
    <div class="col-md-3">
    <?= $form->field($model, 'urgently')->checkbox(['style'=>'margin-top: 40px']) ?>
    </div>
     <div class="col-md-6">
    <?= $form->field($model, 'manager')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
    <?= $form->field($model, 'executor')->textInput(['maxlength' => true]) ?>
    </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('main', 'Создать') : Yii::t('main', 'Обновить'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
