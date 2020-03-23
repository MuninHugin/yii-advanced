<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MyList */

$this->title = 'Добавить новый товар';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="my-list-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
