<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchOrder */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Заказы';
?>
<div class="order-index">


    <p>

        <?= Html::button(Yii::t('main', 'Создать заказ'), ['value' => Url::to(['create']), 'class' => 'btn btn-success', 'id' => 'modalButton']) ?>
<!--        --><?//= Html::button('', ['class' => 'btn btn-info fa fa-filter btn-search', 'id' => 'search-show']) ?>
        <?= Html::button('', ['class' => 'btn btn-info fa fa-filter btn-search', 'id' => '#search-hide','data-toggle'=>'collapse','data-target'=>'#search-hide']) ?>

    </p>
    <div id="search-hide" class="collapse">
        <?= $this->render('_search', ['model' => $searchModel]); ?>
    </div>


<!--    <span class="b-filter__arrow" style="left: 148.125px;"></span>-->
    
    <?php

    Modal::begin([
        'header' => '<h2 class="text-center">' . Yii::t('main', 'Новый заказ') . '</h2>',

        'id' => 'modal',

        'size' => 'modal-lg',

    ]);

    echo "<div id='modalContent'></div>";


    Modal::end();

    ?>
</div>

    <?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'type',
            // 'client_name',
            // 'phone',
            // 'email:email',
            // 'address',
            // 'where_find',
            'device_type',
            'serial_number',
            'brand',
            // 'model',
            // 'malfunction',
            // 'appearance',
            // 'equipment',
            // 'notes',
            'date',
            // 'indicative_price',
            // 'avans',
            // 'urgently',
            'manager',
            'executor',

            ['class' => 'yii\grid\ActionColumn',
                'template' => '{update} {delete}'],
        ],
    ]); ?>
    <?php Pjax::end(); ?></div>


