<?php

use app\models\StrukturDesa;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\StrukturSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Struktur Desa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="struktur-desa-index">


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

            'id',
            'nama_lengkap',
            'jabatan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, StrukturDesa $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>