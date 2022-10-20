<?php

use app\models\Penduduk;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\PendudukSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penduduk';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penduduk-index">


    <p>
        <?= Html::a('Tambah Data Penduduk', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'jumlah_kk',
            'lelaki',
            'perempuan',
            [
                'class' => ActionColumn::className(),
                'header' => 'Aksi',
                'template' => '{update}',
                'urlCreator' => function ($action, Penduduk $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>