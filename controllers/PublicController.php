<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\MataPencaharian;
use app\models\Pendidikan;
use app\models\Penduduk;
use app\models\PotensiKehutananBuah;
use app\models\PotensiKehutananKepemilikan;
use app\models\PotensiPerkebunan;
use app\models\PotensiPerkebunanKomoditi;
use app\models\PotensiPertanian;
use app\models\PotensiPeternakan;
use app\models\StrukturDesa;
use app\models\VisiMisi;

class PublicController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        $this->layout = 'main-public.php';
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],

        ];
    }
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {

        return $this->render('index');
    }

    public function actionBlog()
    {
        return $this->render('blog');
    }

    public function actionDetailBlog()
    {
        return $this->render('detail-blog');
    }

    public function actionWisata()
    {
        return $this->render('wisata');
    }

    public function actionDetailWisata()
    {
        return $this->render('detail-wisata');
    }
    public function actionPemerintahan()
    {
        $struktur_desa = StrukturDesa::find()->where(['not', ['jabatan' => 'Kepala Desa']])->all();
        $kepala_desa = StrukturDesa::find()->where(['jabatan' => 'Kepala Desa'])->one();
        $visi_misi = VisiMisi::find()->one();
        return $this->render('pemerintahan', [
            'struktur_desa' => $struktur_desa,
            'kepala_desa' => $kepala_desa,
            'visi_misi' => $visi_misi,
        ]);
    }
    public function actionPerkembanganDesa()
    {

        $penduduk = Penduduk::find()->one();
        $pendidikan = Pendidikan::find()->all();
        $pekerjaan = MataPencaharian::find()->all();
        return $this->render('perkembangan-desa', [
            'penduduk' => $penduduk,
            'pendidikan' => $pendidikan,
            'pekerjaan' => $pekerjaan,
        ]);
    }
    public function actionPotensi()
    {
        $pertanian = PotensiPertanian::find()->all();
        $peternakan = PotensiPeternakan::find()->all();
        $kehutanan_buah = PotensiKehutananBuah::find()->all();
        $kehutanan_kepemilikan = PotensiKehutananKepemilikan::find()->all();
        $perkebunan = PotensiPerkebunan::find()->all();
        $perkebunan_komoditi = PotensiPerkebunanKomoditi::find()->all();
        return $this->render('potensi', [
            'pertanian' => $pertanian,
            'peternakan' => $peternakan,
            'kehutanan_buah' => $kehutanan_buah,
            'kehutanan_kepemilikan' => $kehutanan_kepemilikan,
            'perkebunan' => $perkebunan,
            'perkebunan_komoditi' => $perkebunan_komoditi,

        ]);
    }
    public function actionSejarah()
    {
        return $this->render('sejarah');
    }




    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            // return $this->goBack();
            return $this->redirect(['admin/']);
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    // public function actionContact()
    // {
    //     $model = new ContactForm();
    //     if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->paraPublicEmail'])) {
    //         Yii::$app->session->setFlash('contactFormSubmitted');

    //         return $this->refresh();
    //     }
    //     return $this->render('contact', [
    //         'model' => $model,
    //     ]);
    // }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
