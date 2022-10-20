<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PotensiPertanian $model */

$this->title = 'Update Data: ' . $model->hasil_panen;
$this->params['breadcrumbs'][] = ['label' => 'Potensi Pertanians', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="potensi-pertanian-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>