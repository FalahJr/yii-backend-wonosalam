<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PotensiPerkebunanKomoditi $model */

$this->title = 'Tambah Data';
$this->params['breadcrumbs'][] = ['label' => 'Potensi Perkebunan Komoditas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="potensi-perkebunan-komoditi-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>