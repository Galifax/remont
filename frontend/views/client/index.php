<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\SearchClient */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Clients');
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="client-index">
    <p>

        <?= Html::button(Yii::t('main', 'Добавить клиента'), ['value' => Url::to(['create']) , 'class' => 'btn btn-success' , 'id' => 'modalButton']) ?>
        <?= Html::button('', ['class' => 'btn btn-info fa fa-filter btn-search', 'id' => 'search-show']) ?>
        <?= Html::button('', ['class' => 'btn btn-info fa fa-filter btn-search', 'id' => 'search-hide']) ?>

    </p>

    <?=$this->render('_search', ['model' => $searchModel]); ?>


    <?php

    Modal::begin([
        'header' => '<h2 class="text-center">'.Yii::t('main', 'Новый заказ').'</h2>',

        'id' => 'modal',
        'size' => 'modal-lg',

    ]);

    echo "<div id='modalContent'></div>";



    Modal::end();

    ?>

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<!--    <p>-->
<!--        --><?//= Html::a(Yii::t('app', 'Create Client'), ['create'], ['class' => 'btn btn-success']) ?>
<!--    </p>-->
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'name',
            'mob_phone',
            'email:email',
            // 'adress',
            // 'sale_card',
            // 'sale_service',
            // 'sale_product',
            // 'note:ntext',
            // 'from',

            ['class' => 'yii\grid\ActionColumn', 'template' => '{update} {delete}'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
