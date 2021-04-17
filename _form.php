<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LgaWsw */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lga-wsw-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'PDP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DPP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ACN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PPA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CDC')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'JP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ANPP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LABO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'summed_total_polling_unit_results')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
