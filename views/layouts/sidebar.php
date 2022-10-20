<?php

use app\components\NodeLogger;
use yii\helpers\Html;
use yii\web\Controller;


NodeLogger::sendLog(Yii::$app->user->identity);
if (Yii::$app->user->isGuest) {
    Yii::$app->response->redirect(['public/login']);
}
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4 ">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link text-center">
        <!-- <img src="<?php echo $assetDir ?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
        <span class="brand-text font-weight-light ">Desa Wonosalam</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">

                <?= Html::img('@web/img/user-admin.png', ['class' => 'img-circle elevation-2', 'width' => '100%',]) ?>

            </div>
            <div class="info">
                <a href="#" class="d-block"><?= Yii::$app->user->isGuest == null ? Yii::$app->user->identity->username : null ?></a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <!-- href be escaped -->
        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            echo \hail812\adminlte\widgets\Menu::widget([
                'items' => [
                    [
                        'label' => 'Pemerintahan',
                        'icon' => 'home',
                        'items' => [
                            ['label' => 'Perangkat Desa', 'url' => ['struktur-desa/index'], 'iconStyle' => 'far'],
                            ['label' => 'Visi Misi',  'url' => ['visi-misi/index'], 'iconStyle' => 'far'],
                        ]
                    ],
                    [
                        'label' => 'Perkembangan Desa',
                        'icon' => 'database',
                        'items' => [
                            ['label' => 'Penduduk', 'url' => ['penduduk/index'], 'iconStyle' => 'far'],
                            ['label' => 'Pendidikan', 'url' => ['pendidikan/index'], 'iconStyle' => 'far'],
                            ['label' => 'Mata Pencaharian Pokok', 'url' => ['mata-pencaharian/index'], 'iconStyle' => 'far'],
                        ]
                    ],
                    [
                        'label' => 'Potensi Pertanian',
                        'icon' => 'tractor',
                        'items' => [
                            ['label' => 'Kategori', 'url' => ['potensi-pertanian-kategori/index'], 'iconStyle' => 'far'],
                            ['label' => 'Hasil Potensi Pertanian', 'url' => ['potensi-pertanian/index'], 'iconStyle' => 'far'],
                        ]
                    ],
                    [
                        'label' => 'Potensi Peternakan',
                        'icon' => 'paw',
                        'items' => [
                            ['label' => 'Data Populasi Ternak', 'url' => ['potensi-peternakan/index'], 'iconStyle' => 'far'],
                        ]
                    ],
                    [
                        'label' => 'Potensi Perkebunan',
                        'icon' => 'leaf',
                        'items' => [
                            ['label' => 'Luas Tanah Perkebunan', 'url' => ['potensi-perkebunan/index'], 'iconStyle' => 'far'],
                            ['label' => 'Hasil Perkebunan menurut jenis komoditas', 'url' => ['site/s'], 'iconStyle' => 'far'],

                        ]
                    ],
                    [
                        'label' => 'Potensi Kehutanan',
                        'icon' => 'tree',
                        'items' => [
                            ['label' => 'Luas Lahan', 'url' => ['potensi-kehutanan-kepemilikan/index'], 'iconStyle' => 'far'],
                            ['label' => 'Hasil Tanaman Dan Luas Tanaman Buah-buahan', 'url' => ['potensi-kehutanan-buah/index'], 'iconStyle' => 'far'],

                        ]
                    ],
                    [
                        'label' => 'Wisata',
                        'icon' => 'umbrella-beach',
                        'items' => [
                            ['label' => 'Daftar Wisata', 'url' => ['wisata/index'], 'iconStyle' => 'far'],
                            ['label' => 'Kategori', 'url' => ['wisata-kategori/index'], 'iconStyle' => 'far'],


                        ]
                    ],
                    [
                        'label' => 'Blog',
                        'icon' => 'newspaper',
                        'items' => [
                            ['label' => 'Daftar Berita / Blog', 'url' => ['blog/index'], 'iconStyle' => 'far'],
                            ['label' => 'Kategori', 'url' => ['blog-kategori/index'], 'iconStyle' => 'far'],

                        ]
                    ],
                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>