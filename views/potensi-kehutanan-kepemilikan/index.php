<?php

use app\models\PotensiKehutananKepemilikan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\PotensiKehutananKepemilikanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Potensi Kehutanan Kepemilikan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="potensi-kehutanan-kepemilikan-index">


    <p>
        <?= Html::a('Tambah Data ', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nama_kepemilikan',
            'luas',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PotensiKehutananKepemilikan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>