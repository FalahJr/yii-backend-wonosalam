<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PotensiPerkebunan $model */

$this->title = 'Tambah Data';
$this->params['breadcrumbs'][] = ['label' => 'Potensi Perkebunan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="potensi-perkebunan-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>