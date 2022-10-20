<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PotensiPertanianKategori $model */

$this->title = 'Update Kategori : ' . $model->nama_kategori;
$this->params['breadcrumbs'][] = ['label' => 'Kategori Potensi Pertanian ', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="potensi-pertanian-kategori-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>