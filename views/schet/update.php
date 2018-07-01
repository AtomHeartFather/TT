<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Schet */

$this->title = 'Update Schet: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Schets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="schet-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
