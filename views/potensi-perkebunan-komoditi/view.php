<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\PotensiPerkebunanKomoditi $model */

$this->title = $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Potensi Perkebunan Komoditas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="potensi-perkebunan-komoditi-view">


    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nama',
            'swasta_negara_luas',
            'swasta_negara_hasil',
            'rakyat_luas',
            'rakyat_hasil',
        ],
    ]) ?>

</div>