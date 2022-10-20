<?php

use app\models\PotensiPertanian;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\PotensiPertanianSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Potensi Pertanian';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="potensi-pertanian-index">


    <p>
        <?= Html::a('Tambah Data Potensi Pertanian', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'potensi_pertanian_kategori_id',
                'value' => function ($model) {
                    return $model->potensiPertanianKategori->nama_kategori;
                },
            ],
            'jenis',
            [
                'attribute' => 'luas',
                'value' => function ($model) {
                    return $model->luas . " Ha";
                },
            ],
            [
                'attribute' => 'hasil_panen',
                'value' => function ($model) {
                    return $model->luas . " Ton/ha";
                },
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PotensiPertanian $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>