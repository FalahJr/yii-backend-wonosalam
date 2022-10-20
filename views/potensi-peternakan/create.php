<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PotensiPeternakan $model */

$this->title = 'Tambah Data Potensi Peternakan';
$this->params['breadcrumbs'][] = ['label' => 'Potensi Peternakan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="potensi-peternakan-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>