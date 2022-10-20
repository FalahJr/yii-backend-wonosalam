<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\MataPencaharian $model */

$this->title = 'Tambah Data Mata Pencaharia';
$this->params['breadcrumbs'][] = ['label' => 'Mata Pencaharian', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mata-pencaharian-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>