<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PotensiPerkebunan $model */

$this->title = 'Update Potensi Perkebunan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Potensi Perkebunans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="potensi-perkebunan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
