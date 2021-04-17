<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PollSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="poll-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'result_id') ?>

    <?= $form->field($model, 'polling_unit_unique_id') ?>

    <?= $form->field($model, 'party_abbreviation') ?>

    <?= $form->field($model, 'party_score') ?>

    <?= $form->field($model, 'entered_by_user') ?>

    <?php // echo $form->field($model, 'date_entered') ?>

    <?php // echo $form->field($model, 'user_ip_address') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
