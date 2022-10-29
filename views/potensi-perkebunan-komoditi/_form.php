<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PotensiPerkebunanKomoditi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="potensi-perkebunan-komoditi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'swasta_negara_luas')->textInput(['type' => 'number', 'step' => 0.01, 'min' => 0]) ?>

    <?= $form->field($model, 'swasta_negara_hasil')->textInput(['type' => 'number', 'step' => 0.01, 'min' => 0]) ?>

    <?= $form->field($model, 'rakyat_luas')->textInput(['type' => 'number', 'step' => 0.01, 'min' => 0]) ?>

    <?= $form->field($model, 'rakyat_hasil')->textInput(['type' => 'number', 'step' => 0.01, 'min' => 0]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>