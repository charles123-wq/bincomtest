<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LgaWswSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lga-wsw-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'PDP') ?>

    <?= $form->field($model, 'DPP') ?>

    <?= $form->field($model, 'ACN') ?>

    <?= $form->field($model, 'PPA') ?>

    <?php // echo $form->field($model, 'CDC') ?>

    <?php // echo $form->field($model, 'JP') ?>

    <?php // echo $form->field($model, 'ANPP') ?>

    <?php // echo $form->field($model, 'LABO') ?>

    <?php // echo $form->field($model, 'summed_total_polling_unit_results') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
