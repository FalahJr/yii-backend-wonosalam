<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\WisataKategori $model */

$this->title = 'Tambah Data Kategori Wisata';
$this->params['breadcrumbs'][] = ['label' => 'Kategori Wisata', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wisata-kategori-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>