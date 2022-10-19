<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<!-- Slideshow Start -->
<div class="scroll" id="home"></div>
<section id="banner" class="site-index">
    <div class="container">
        <div class="row pt-5">
            <div class="col-12 col-lg-8 align-self-center">
                <p class="textWhite d-inline animation1">Selamat Datang</p>
                <h1 class="loraBold mt-4 animation2">Di Website Desa Wonosalam</h1>
                <p class="mt-3 desc animation3">Semoga Website ini dapat membantu masyarakat luas untuk lebih
                    mengenal desa Wonosalam</p>
                <p class="desc animation3">
                    Desa Wonosalam merupakan salah satu desa yang berada di Kabupaten Jombang dimana potensi wisata
                    dan potensi alamnya sungguh menarik.
                </p>
                <p class="desc animation3">
                    Jadi, ayo datang ke Wonosalam
                </p>
                <!-- <a href="about.html" class="btn btn-pill-large px-4 mt-2 animation4">Tentang Saya</a> -->
            </div>
            <div class="col-8 col-lg-4 mt-5 mt-lg-0">
                <div class="animationImg ">
                    <!-- <img src="assets/img/home.png" class="rounded" width="100%" height="40%" alt=""> -->
                    <?= Html::img('@web/img/home.png', ['class' => 'rounded', 'width' => '100%', 'height' => '40%']) ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Content Start -->
<!-- Total Post Section -->
<div class="scroll" id="destination"></div>
<section id="profiles">
    <div class="container">
        <div class="row justify-content-center">
            <h3 class="font-weight-bold mb-5">Profil Desa</h3>
            <p>
                Desa Wonosalam terletak di lereng Gunung Anjasmara, Kabupaten Jombang, Provinsi Jawa Timur.
                Wonosalam menyuguhkan pemandangan alamnya yang sangat indah, serta beberapa destinasi
                wisata yang tidak kalah menarik dengan pemandangan yang tersedia. Seperti air terjun, agrowisata,
                dan wisata goa.
            </p>
        </div>
    </div>
</section>
<!-- End Total Post Section -->

<!-- Portofolio Section -->
<div class="scroll" id="portofolio"></div>
<section class="mt-4" id="portofolios">
    <!-- <div class="portofolio-content"> -->
    <div class="container">
        <!-- <center> -->
        <div class="row">
            <div class="col-12 mb-5 d-flex justify-content-center">
                <h2 class="loraSemiBold">Wilayah Wonosalam</h2>
            </div>
        </div>
        <!-- </center> -->

        <!-- <div class="row justify-content-center d-flex"> -->
        <div class="map-responsive row d-flex justify-content-center">
            <iframe class="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.7576683197453!2d112.36822321461274!3d-7.709132378502579!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78659832c64319%3A0x5e11f156223c9413!2sKantor%20Desa%20Wonosalam!5e0!3m2!1sid!2sid!4v1654984269985!5m2!1sid!2sid" width="778" height="441" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <!-- </div> -->
        <div class="row justify-content-center d-flex">
            <div class="text-maps mt-4 ">
                <h5>Alamat Kantor Kepala Desa</h5>
                <p>79RC+85V, Jl. Anjasmoro, Notorejo, Wonosalam, Kec. Wonosalam, Kabupaten Jombang, Jawa Timur 61476
                </p>
                <hr style="border: 1px solid #0B3F68B2;">
                <p>
                    Desa Wonosalam memiliki total luas wilayah yaitu 1.413,26 Ha, yang terdiri dari luas tanah
                    sawah, luas tanah kering, luas tanah basah, luas tanah perkebunan, luas fasilitas umum, dan luas
                    tanah hutan. <br>
                    Desa Wonosalam dibagi menjadi enam dusun yaitu Dusun Wonosalam, Dusun Mangirejo, Dusun
                    Pucangrejo, Dusun Sumber, Dusun Notorejo, dan Dusun Tukum. <br>
                    Desa Wonosalam terletak di Kabupaten Jombang Provinsi Jawa Timur. Desa Wonosalam, berbatasan
                    langsung dengan Desa Wonokerto Kecamatan Dinoyo di sebelah utara, Desa Sambirejo Kecamatan
                    Kandangan di sebelah selatan, Desa Carangwulung di Hutan Gunung Anjasmara di sebelah timur, dan
                    Desa Pulosari Kecamatan Bareng di sebalah barat.


                </p>
            </div>
        </div>
    </div>
    <!-- </div> -->
    <!-- </div> -->
</section>
<!-- end Portofolio Section -->