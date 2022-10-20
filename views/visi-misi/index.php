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


    <!-- <p>
        <?php

        // echo Html::a('Create Visi Misi', ['create'], ['class' => 'btn btn-success'])
        ?>
    </p> -->

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'visi:ntext',
            'misi:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, VisiMisi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>