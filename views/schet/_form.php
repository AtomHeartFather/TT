<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Schet */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="schet-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'number')->textInput() ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'summa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adres')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inn')->textInput() ?>

    <?= $form->field($model, 'kpp')->textInput() ?>

    <?= $form->field($model, 'rschet')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kschet')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bik')->textInput() ?>

    <?= $form->field($model, 'bank')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
