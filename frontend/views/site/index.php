<?php

/* @var $this yii\web\View */

$this->title = 'Магазин';
?>
<div class="site-index">

<table class="table table-striped">
    <tr>
        <th>Название</th>
        <th>Цена</th>
        <th>Старая цена</th>
        <th>Описание</th>
    </tr>
    <?php foreach ($model as $item):?>
        <tr>
            <td><?=\yii\helpers\Html::a($item->title, \yii\helpers\Url::to(['product/index', 'alias' => $item->alias]))?></td>
            <td><?=$item->price;?></td>
            <td><?=$item->old_price;?></td>
            <td><?=$item->description;?></td>
        </tr>
    <?php endforeach;?>
</table>
</div>
