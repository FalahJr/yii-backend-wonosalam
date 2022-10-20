<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PotensiKehutananKepemilikan $model */

$this->title = 'Update Data Nama Kepemilikan: ' . $model->nama_kepemilikan;
$this->params['breadcrumbs'][] = ['label' => 'Potensi Kehutanan Kepemilikan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama_kepemilikan, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="potensi-kehutanan-kepemilikan-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>