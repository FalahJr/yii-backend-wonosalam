<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PotensiPerkebunanKomoditi $model */

$this->title = 'Update Data: ' . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Potensi Perkebunan Komoditas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="potensi-perkebunan-komoditi-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>