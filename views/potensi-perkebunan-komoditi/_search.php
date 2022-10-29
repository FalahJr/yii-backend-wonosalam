<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PotensiPerkebunanKomoditiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="potensi-perkebunan-komoditi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'swasta_negara_luas') ?>

    <?= $form->field($model, 'swasta_negara_hasil') ?>

    <?= $form->field($model, 'rakyat_luas') ?>

    <?php // echo $form->field($model, 'rakyat_hasil') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
