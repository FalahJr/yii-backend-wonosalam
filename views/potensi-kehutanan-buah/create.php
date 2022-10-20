<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PotensiKehutananBuah $model */

$this->title = 'Tambah Data';
$this->params['breadcrumbs'][] = ['label' => 'Potensi Kehutanan Buah', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="potensi-kehutanan-buah-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>