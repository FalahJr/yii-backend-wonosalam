<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\MataPencaharian $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="mata-pencaharian-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'jenis_pekerjaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lelaki')->textInput() ?>

    <?= $form->field($model, 'perempuan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
