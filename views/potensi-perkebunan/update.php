<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PotensiPerkebunan $model */

$this->title = 'Update Data: ' . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Potensi Perkebunan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="potensi-perkebunan-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>