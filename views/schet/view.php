<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Schet */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Schets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="schet-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
	<p>
	</br></br></br></br>
	Продавец: ИП Иванов Сергей Петрович </br>
	Адрес: Санкт-Петербург, ул.Садовая, д.2, корп.2, оф.22</br>
	ИНН: 123456789</br>
	Расчетный счет: 113345678987654321</br>
	Кор. счет: 12345678987654321</br>
	БИК: 123456789</br>
	Банк: ОАО БАНК "МОЙ БАНК" г.Санкт-Петербург</br>
	</br>
	</br>
	Покупатель: <?=$model->name?></br>
	Адрес: <?=$model->adres?></br>
	ИНН: <?=$model->inn?></br>
	Расчетный счет: <?=$model->rschet?></br>
	Кор. счет: <?=$model->kschet?></br>
	БИК: <?=$model->bik?></br>
	Банк: <?=$model->bank?></br></br>
	<h2>Счет №<?=$model->number?> от <?=$model->date?></h2>
	<table border="1"  style="width:100%;text-align:center;">
  <tr>
    <td>№</td><td>Наименование</td><td>Ед.изм</td><td>Кол-во</td><td>Цена</td><td>Сумма</td>
  </tr>
    <tr>
    <td>1</td><td>Оказание услуг по обслуживанию компьютерной техники</td><td>шт.</td><td>1</td><td><?=$model->summa?></td><td><?=$model->summa?></td>
  </tr>
    <tr>
    <td colspan="3">Итого:</td><td>1</td><td> </td><td><?=$model->summa?></td>
  </tr>
</table>
</br></br></br></br>
Индивидуальный предприниматель    ______________                              (______________)
	</p>
	<!--
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'number',
            'date',
            'summa',
            'name',
            'adres',
            'inn',
            'kpp',
            'rschet',
            'kschet',
            'bik',
            'bank',
        ],
    ]) ?>
	-->
</div>
