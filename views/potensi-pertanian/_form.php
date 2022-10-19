<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PotensiPertanian $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="potensi-pertanian-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'potensi_pertanian_kategori_id')->textInput() ?>

    <?= $form->field($model, 'luas')->textInput() ?>

    <?= $form->field($model, 'hasil_panen')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
