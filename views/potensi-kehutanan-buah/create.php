<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PotensiKehutananBuah $model */

$this->title = 'Create Potensi Kehutanan Buah';
$this->params['breadcrumbs'][] = ['label' => 'Potensi Kehutanan Buahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="potensi-kehutanan-buah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
