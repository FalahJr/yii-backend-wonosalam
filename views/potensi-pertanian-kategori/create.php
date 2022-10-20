<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PotensiPertanianKategori $model */

$this->title = 'Tambah Data Kategori Potensi Pertanian ';
$this->params['breadcrumbs'][] = ['label' => 'Kategori Potensi Pertanian ', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="potensi-pertanian-kategori-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>