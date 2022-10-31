<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Wisata $model */

$this->title = 'Update Wisata: ' . $model->judul;
$this->params['breadcrumbs'][] = ['label' => 'Wisata', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->judul, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wisata-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>