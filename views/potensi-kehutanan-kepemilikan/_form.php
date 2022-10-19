<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PotensiKehutananKepemilikan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="potensi-kehutanan-kepemilikan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_kepemilikan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'luas')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
