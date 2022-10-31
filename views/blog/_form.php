<?php

use app\models\BlogKategori;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Blog $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="blog-form">

    <?php $form = ActiveForm::begin();
    $kategori = ArrayHelper::map(BlogKategori::find()->all(), "id", "nama");
    ?>

    <?= $form->field($model, 'blog_kategori_id')->dropDownList($kategori, ['prompt' => 'Pilih Kategori']) ?>

    <?= $form->field($model, 'title')->textInput() ?>

    <?= $form->field($model, 'deskripsi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'gambar')->fileInput() ?>

    <?= $form->field($model, 'created_at')->hiddenInput(['value' => 'admin'])->label(false) ?>

    <?= $form->field($model, 'update_at')->hiddenInput(['value' => 'admin'])->label(false) ?>

    <?= $form->field($model, 'created_date')->hiddenInput(['value' => date("Y-m-d H:i:s")])->label(false) ?>

    <?= $form->field($model, 'update_date')->hiddenInput(['value' => date("Y-m-d H:i:s")])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>