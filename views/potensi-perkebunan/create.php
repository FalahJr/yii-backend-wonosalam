<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PotensiPerkebunan $model */

$this->title = 'Create Potensi Perkebunan';
$this->params['breadcrumbs'][] = ['label' => 'Potensi Perkebunans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="potensi-perkebunan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
