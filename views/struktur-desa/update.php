<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\StrukturDesa $model */

$this->title = 'Update Data : ' . $model->nama_lengkap;
$this->params['breadcrumbs'][] = ['label' => 'Struktur Desa', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="struktur-desa-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>