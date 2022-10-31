<?php

use yii\helpers\Html;

$this->title = $detail_blog['title'] . ' | Wonosalam';
?>
<!-- Start of Content -->
<section id="detail-wisata-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 ">
				<center>
					<h2 class="font-weight-bold mb-3"><?= $detail_blog['title'] ?></h2>
					<div id="demo" class="carousel slide mb-3" data-ride="carousel">

						<!-- Indicators -->
						<ul class="carousel-indicators">
							<li data-target="#demo" data-slide-to="0" class="active"></li>
							<li data-target="#demo" data-slide-to="1"></li>
							<li data-target="#demo" data-slide-to="2"></li>
						</ul>

						<!-- The slideshow -->
						<div class="carousel-inner">
							<div class="carousel-item active">
								<!-- <img src="assets/img/card-blog.png" alt="Los Angeles"> -->
								<?= Html::img('../../uploads/image/' . $detail_blog['gambar'] . '', ['class' => 'card-img-top rounded', 'width' => '100%']) ?>
							</div>
							<div class="carousel-item">
								<?= Html::img('../../uploads/image/' . $detail_blog['gambar'] . '', ['class' => 'card-img-top rounded', 'width' => '100%']) ?>
							</div>
							<div class="carousel-item">
								<?= Html::img('../../uploads/image/' . $detail_blog['gambar'] . '', ['class' => 'card-img-top rounded', 'width' => '100%']) ?>
							</div>
						</div>

						<!-- Left and right controls -->
						<a class="carousel-control-prev" href="#demo" data-slide="prev">
							<span class="carousel-control-prev-icon"></span>
						</a>
						<a class="carousel-control-next" href="#demo" data-slide="next">
							<span class="carousel-control-next-icon"></span>
						</a>

					</div>
					<div>
						<p align="justify" class="slide-text nunitoRegular"><?= $detail_blog['deskripsi'] ?>


						</p>

					</div>
					<!-- <div class="mt-4 mb-4">
                    <button class="btn btn-md btn-pill-light mr-5"><i class="fa fa-share"></i> Bagikan</button>
                    <button class="btn btn-md btn-pill"><i class="fa fa-thumbs-up"></i> Suka</button>
                    </div> -->
				</center>
			</div>
			<div class="col-lg-1"></div>
			<div class="col-lg-3 sidebar nunitoRegular">
				<div class="informasi mt-4">
					<h5 class="font-weight-bold">Tanggal Post</h5>
					<?php
					$date = date_create($detail_blog['created_date']);
					?>
					<p><?= date_format($date, "j F Y") ?></p>
					<div class="auth-detail mt-3">
						<div class="d-flex align-items-center">
							<img src="../../web/icon/PhotoProfile.svg" width="40" alt="">
							<h5 class="nunitoSemiBold ml-3 my-0">Admin</h5>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- End of Content -->

<br>
<br>
<br>
<br>
<br>