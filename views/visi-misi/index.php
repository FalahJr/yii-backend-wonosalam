<?php

use app\models\VisiMisi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\VisiMisiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Visi Misi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="visi-misi-index">




    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'visi:ntext',
            'misi:ntext',
            [
                'header' => 'Aksi',
                'template' => '{update}',
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, VisiMisi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>