<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\BlogKategori $model */

$this->title = 'Create Blog Kategori';
$this->params['breadcrumbs'][] = ['label' => 'Blog Kategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-kategori-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
