<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PotensiKehutananBuah $model */

$this->title = 'Update Data: ' . $model->nama_hasil_hutan;
$this->params['breadcrumbs'][] = ['label' => 'Kehutanan Buah', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama_hasil_hutan, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="potensi-kehutanan-buah-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>