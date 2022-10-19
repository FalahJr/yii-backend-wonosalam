<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\StrukturDesa $model */

$this->title = 'Tambah Data';
$this->params['breadcrumbs'][] = ['label' => 'Struktur Desa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="struktur-desa-create container">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>