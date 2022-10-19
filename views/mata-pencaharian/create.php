<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\MataPencaharian $model */

$this->title = 'Create Mata Pencaharian';
$this->params['breadcrumbs'][] = ['label' => 'Mata Pencaharians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mata-pencaharian-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
