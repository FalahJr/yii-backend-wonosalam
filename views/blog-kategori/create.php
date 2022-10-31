<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\BlogKategori $model */

$this->title = 'Tambah Data';
$this->params['breadcrumbs'][] = ['label' => 'Blog Kategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-kategori-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>