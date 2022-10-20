<?php

use app\models\PotensiPeternakan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\PotensiPeternakanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Potensi Peternakan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="potensi-peternakan-index">


    <p>
        <?= Html::a('Tambah Data Potensi Peternakan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'jenis_ternak',
            'jumlah_pemilik',
            'jumlah_populasi_ternak',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PotensiPeternakan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>