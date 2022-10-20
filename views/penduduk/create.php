<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Penduduk $model */

$this->title = 'Create Penduduk';
$this->params['breadcrumbs'][] = ['label' => 'Penduduk', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penduduk-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>