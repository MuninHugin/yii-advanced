<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MyList */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="my-list-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->label('Название')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->label('Цена')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'old_price')->label('Старая цена')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->label('Описание')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
