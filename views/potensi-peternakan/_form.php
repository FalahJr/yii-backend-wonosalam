<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PotensiPeternakan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="potensi-peternakan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'jenis_ternak')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_pemilik')->textInput() ?>

    <?= $form->field($model, 'jumlah_populasi_ternak')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
