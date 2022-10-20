<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Penduduk $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penduduk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'jumlah_kk')->textInput(['type' => 'number'])->label('Jumlah Kartu Keluarga') ?>

    <?= $form->field($model, 'lelaki')->textInput(['type' => 'number']) ?>

    <?= $form->field($model, 'perempuan')->textInput(['type' => 'number']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>