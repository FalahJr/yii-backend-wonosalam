<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PotensiKehutananKepemilikan $model */

$this->title = 'Update Potensi Kehutanan Kepemilikan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Potensi Kehutanan Kepemilikans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="potensi-kehutanan-kepemilikan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
