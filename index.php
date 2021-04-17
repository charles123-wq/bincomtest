<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LgaWswSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lga Wsws';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lga-wsw-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Lga Wsw', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget(['dataProvider' => $dataProvider, 
        'columns' => [
            'id',
            'PDP',
            'DPP',
            'ACN',
            'PPA',
            'CDC',
            'JP',
            'ANPP',
            'LABO',
            'summed_total_polling_unit_results',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
</div>
