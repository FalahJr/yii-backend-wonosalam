<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\BlogKategori $model */

$this->title = 'Update Data: ' . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Kategori Blog', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="blog-kategori-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>