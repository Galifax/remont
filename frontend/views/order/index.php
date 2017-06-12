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

        <?= Html::button(Yii::t('main', 'Создать заказ'), ['value' => Url::to(['create']) , 'class' => 'btn btn-success' , 'id' => 'modalButton']) ?>
         <?= Html::button('', ['class' => 'btn btn-info fa fa-filter btn-search', 'id' => 'search-show']) ?>
         <?= Html::button('', ['class' => 'btn btn-info fa fa-filter btn-search', 'id' => 'search-hide']) ?>

    </p>

    <?=$this->render('_search', ['model' => $searchModel]); ?>


    <?php

       Modal::begin([
    'header' => '<h2 class="text-center">Создание заказа</h2>',

    'id' => 'modal',

    'size' => 'modal-lg',

    ]);

    echo "<div id='modalContent'></div>";



    Modal::end();

    ?>
<div class="table-responsive">
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
           'tableOptions' => [
            'class' => 'my-table',
        ],
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
</div>


