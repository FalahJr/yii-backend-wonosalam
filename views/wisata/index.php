<?php

use app\models\Wisata;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\WisataSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Wisata';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wisata-index">


    <p>
        <?= Html::a('Tambah Data', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'wisata_kategori_id',
                'value' => function ($model) {
                    return $model->wisataKategori->nama;
                },
            ],
            'judul',
            [
                'attribute' => 'gambar',
                'format' => 'html',
                'value' => function ($data) {
                    return Html::img('../../uploads/image/' . $data['gambar']);
                },

            ],
            //'url_maps:url',
            //'created_at',
            //'update_at',
            //'created_date',
            //'update_date',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Wisata $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>