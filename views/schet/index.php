<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SchetSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Schets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="schet-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Schet', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'number',
            'date',
            'summa',
            'name',
            //'adres',
            //'inn',
            //'kpp',
            //'rschet',
            //'kschet',
            //'bik',
            //'bank',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
