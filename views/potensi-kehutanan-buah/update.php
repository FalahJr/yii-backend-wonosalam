<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PotensiKehutananBuah $model */

$this->title = 'Update Potensi Kehutanan Buah: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Potensi Kehutanan Buahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="potensi-kehutanan-buah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
