<?php

use app\models\PotensiPertanianKategori;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\PotensiPertanianKategoriSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Kategori Potensi Pertanian ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="potensi-pertanian-kategori-index">


    <p>
        <?= Html::a('Tambah Kategori Potensi Pertanian ', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nama_kategori',
            [
                'header' => 'Aksi',
                'template' => '{update} {delete}',
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PotensiPertanianKategori $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>