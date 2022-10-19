<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Wisata $model */

$this->title = 'Create Wisata';
$this->params['breadcrumbs'][] = ['label' => 'Wisatas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wisata-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
