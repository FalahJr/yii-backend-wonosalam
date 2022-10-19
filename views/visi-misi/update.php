<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\VisiMisi $model */

$this->title = 'Update Visi Misi: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Visi Misi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="visi-misi-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>