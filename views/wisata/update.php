<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Wisata $model */

$this->title = 'Update Wisata: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Wisatas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wisata-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
