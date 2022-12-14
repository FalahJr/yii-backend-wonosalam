<?php

use app\models\MataPencaharian;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\MataPencaharianSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Mata Pencaharian';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mata-pencaharian-index">


    <p>
        <?= Html::a('Tambah Data Mata Pencaharian', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'jenis_pekerjaan',
            'lelaki',
            'perempuan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, MataPencaharian $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>