<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Pendidikan $model */

$this->title = 'Tambah Data Pendidikan';
$this->params['breadcrumbs'][] = ['label' => 'Pendidikan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pendidikan-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>