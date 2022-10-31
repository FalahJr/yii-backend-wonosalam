<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Blog $model */

$this->title = 'Update Data: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Daftar Blog', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="blog-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>