<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SchetSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="schet-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'number') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'summa') ?>

    <?= $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'adres') ?>

    <?php // echo $form->field($model, 'inn') ?>

    <?php // echo $form->field($model, 'kpp') ?>

    <?php // echo $form->field($model, 'rschet') ?>

    <?php // echo $form->field($model, 'kschet') ?>

    <?php // echo $form->field($model, 'bik') ?>

    <?php // echo $form->field($model, 'bank') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
