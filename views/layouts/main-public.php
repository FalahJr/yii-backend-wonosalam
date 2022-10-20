<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => '@web/favicon.ico']);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>
    <input type="checkbox" id="check"></input>
    <nav class="navbar navbar-expand-lg navbar-light">
        <!-- <a class="navbar-brand" href="index">
            <h4>WONOSALAM<br>BERDIKARI</h4>
        </a> -->
        <?= Html::a('<h4>WONOSALAM<br>BERDIKARI</h4>', ['index'], ['class' => 'navbar-brand']) ?>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class=" navbar-nav ml-auto">
                <li class="nav-item">
                    <!-- <a class="nav-link nunitoSemiBold" href="sejarah">Sejarah</a> -->
                    <?= Html::a('Sejarah', ['sejarah'], ['class' => 'nav-link nunitoSemiBold']) ?>

                </li>
                <li class="nav-item">
                    <!-- <a class="nav-link nunitoSemiBold" href="pemerintahan">Pemerintahan</a> -->
                    <?= Html::a('Pemerintahan', ['pemerintahan'], ['class' => 'nav-link nunitoSemiBold']) ?>
                </li>
                <li class="nav-item">
                    <!-- <a class="nav-link nunitoSemiBold" href="perkembangan-desa">
                        Perkembangan Desa
                    </a> -->
                    <?= Html::a('Perkembangan Desa', ['perkembangan-desa'], ['class' => 'nav-link nunitoSemiBold']) ?>

                </li>
                <li class="nav-item">
                    <!-- <a class="nav-link nunitoSemiBold" href="potensi">Potensi</a> -->
                    <?= Html::a('Potensi', ['potensi'], ['class' => 'nav-link nunitoSemiBold']) ?>

                </li>
                <li class="nav-item">
                    <!-- <a class="nav-link nunitoSemiBold" href="wisata">Wisata</a> -->
                    <?= Html::a('Wisata', ['wisata'], ['class' => 'nav-link nunitoSemiBold']) ?>

                </li>
                <li class="nav-item">
                    <!-- <a class="nav-link nunitoSemiBold" href="blog">Blog</a> -->
                    <?= Html::a('Blog', ['blog'], ['class' => 'nav-link nunitoSemiBold']) ?>

                </li>

            </ul>
        </div>
    </nav>

    <main id="main" class="" role="">
        <div class="">
            <?php if (!empty($this->params['breadcrumbs'])) : ?>
                <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
            <?php endif ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>

    <footer class="page-footer font-small unique-color-dark bottom">
        <!-- Contact -->
        <div id="footerQ" style="padding: 10px; color: white;">
            <div class="container text-md-left mt-5">
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h6 class="text-uppercase font-weight-bold">Contact Us</h6>
                        <hr class="accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: white;">
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <p class="footer-text">e-mail : ds.wonoslam@gmail.com</p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
        </div>
        <!-- End Contact -->

        <!-- Copyright -->
        <div class="footer-copyright text-center">
            <p class="nunitoRegular">KKNT Unesa Kota Jombang 12 Copyright 2022 - All Right Reserved</p>
        </div>
        <!-- End Copyright -->

    </footer>
    <!-- End Footer -->

    <!-- Back to top -->
    <!-- <button id="btnTop" class="btnTop" title="Go to top"><i class="up"></i>TOP</button> -->
    <!-- End of Back to top -->

    <!-- Including JavaScript File Start -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="assets/lib/select2/js/select2.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script>
        // select 2
        $(document).ready(function() {
            let aman = localStorage.getItem('authLogin');
            if (aman) {
                $('.nonAuth').addClass('d-none');
                $('.auth').removeClass('d-none');
            } else {
                $('.nonAuth').removeClass('d-none');
                $('.auth').addClass('d-none');
            }

            $('.logout').click(function() {
                localStorage.removeItem('authLogin');
                window.location.href = 'Login.html';
            })

            $('.js-example-basic-multiple').select2();
            $('.js-example-basic-single').select2();
            $('#categoryCard .card').each(function(i) {
                setTimeout(function() {
                    $('#categoryCard .card').eq(i).addClass('bottomToTop');
                }, 300 * i);
            });
        });

        // end select 2

        // filter
        $('.filterAction').click(function() {
            $('.filterContent').toggleClass('filterAnimation');
        })
        // end filter
    </script>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>