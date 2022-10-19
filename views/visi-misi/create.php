<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\VisiMisi $model */

$this->title = 'Create Visi Misi';
$this->params['breadcrumbs'][] = ['label' => 'Visi Misi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="visi-misi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
