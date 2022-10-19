<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\BlogKategori $model */

$this->title = 'Update Blog Kategori: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Blog Kategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="blog-kategori-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
