<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Schet */

$this->title = 'Create Schet';
$this->params['breadcrumbs'][] = ['label' => 'Schets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="schet-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
