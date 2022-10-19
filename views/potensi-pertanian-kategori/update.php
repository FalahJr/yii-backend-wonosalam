<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PotensiPertanianKategori $model */

$this->title = 'Update Potensi Pertanian Kategori: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Potensi Pertanian Kategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="potensi-pertanian-kategori-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
