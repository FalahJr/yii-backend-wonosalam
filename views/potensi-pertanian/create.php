<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PotensiPertanian $model */

$this->title = 'Tambah Data Potensi Pertanian';
$this->params['breadcrumbs'][] = ['label' => 'Potensi Pertanian', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="potensi-pertanian-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>