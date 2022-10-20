<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Penduduk $model */

$this->title = 'Update Penduduk: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Penduduk', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penduduk-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>