<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PollSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Polls';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="poll-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Poll', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget(['dataProvider' => $dataProvider, 
        'columns' => [
            'result_id',
            'polling_unit_unique_id',
            'party_abbreviation',
            'party_score',
            'entered_by_user',
            'date_entered',
            'user_ip_address',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
</div>
