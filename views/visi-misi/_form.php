<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\VisiMisi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="visi-misi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'visi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'misi')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
