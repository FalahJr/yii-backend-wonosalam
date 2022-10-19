<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Penduduk $model */

$this->title = 'Create Penduduk';
$this->params['breadcrumbs'][] = ['label' => 'Penduduks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penduduk-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
