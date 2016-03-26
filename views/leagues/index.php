<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LeaguesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Leagues';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="leagues-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Leagues', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'leaguename',
            'division',
            'countryname',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
