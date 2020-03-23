<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\MyListSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Админка';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="my-list-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить товар', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute'=>'title',
                'label'=>'Наименование',
            ],
            [
                'attribute'=>'price',
                'label'=>'Цена',
            ],
            [
                'attribute'=>'old_price',
                'label'=>'Старая цена',
            ],
            [
                'attribute'=>'description',
                'label'=>'Описание',
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
