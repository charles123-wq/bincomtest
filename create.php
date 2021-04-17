<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LgaWsw */

$this->title = 'Create Lga Wsw';
$this->params['breadcrumbs'][] = ['label' => 'Lga Wsws', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lga-wsw-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
