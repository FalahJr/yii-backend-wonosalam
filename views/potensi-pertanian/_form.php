<?php

use app\models\PotensiPertanianKategori;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PotensiPertanian $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="potensi-pertanian-form">

    <?php
    $form = ActiveForm::begin();
    $kategori = ArrayHelper::map(PotensiPertanianKategori::find()->all(), "id", "nama_kategori");
    ?>

    <?= $form->field($model, 'potensi_pertanian_kategori_id')->dropDownList($kategori, ['prompt' => 'Pilih Kategori']) ?>

    <?= $form->field($model, 'jenis')->textInput() ?>

    <?= $form->field($model, 'luas')->textInput(['type' => 'number', 'step' => 0.01, 'min' => 0]) ?>

    <?= $form->field($model, 'hasil_panen')->textInput(['type' => 'number', 'step' => 0.01, 'min' => 0]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>