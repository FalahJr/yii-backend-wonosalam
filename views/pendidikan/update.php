<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Pendidikan $model */

$this->title = 'Update Data Pendidikan : ' . $model->tingkat_pendidikan;
$this->params['breadcrumbs'][] = ['label' => 'Pendidikans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pendidikan-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>