<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PotensiKehutananKepemilikan $model */

$this->title = 'Create Potensi Kehutanan Kepemilikan';
$this->params['breadcrumbs'][] = ['label' => 'Potensi Kehutanan Kepemilikans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="potensi-kehutanan-kepemilikan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
