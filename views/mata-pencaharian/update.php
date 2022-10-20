<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\MataPencaharian $model */

$this->title = 'Update Mata Pencaharian: ' . $model->jenis_pekerjaan;
$this->params['breadcrumbs'][] = ['label' => 'Mata Pencaharian', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->jenis_pekerjaan, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mata-pencaharian-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>