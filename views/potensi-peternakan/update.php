<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PotensiPeternakan $model */

$this->title = 'Update Data : ' . $model->jenis_ternak;
$this->params['breadcrumbs'][] = ['label' => 'Potensi Peternakan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->jenis_ternak, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="potensi-peternakan-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>