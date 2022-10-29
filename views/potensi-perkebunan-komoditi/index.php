<?php

use app\models\PotensiPerkebunanKomoditi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\PotensiPerkebunanKomoditiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Potensi Perkebunan Komoditas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="potensi-perkebunan-komoditi-index">


    <p>
        <?= Html::a('Create Potensi Perkebunan Komoditi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nama',
            'swasta_negara_luas',
            'swasta_negara_hasil',
            'rakyat_luas',
            //'rakyat_hasil',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PotensiPerkebunanKomoditi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>