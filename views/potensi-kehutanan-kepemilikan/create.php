<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PotensiKehutananKepemilikan $model */

$this->title = 'Tambah Data';
$this->params['breadcrumbs'][] = ['label' => 'Potensi Kehutanan Kepemilikan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="potensi-kehutanan-kepemilikan-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>