<?php

use yii\helpers\Html;

$this->title = 'Wisata | Wonosalam';
?>
<section id="banner-wisata">
	<div class="container-fluid">
		<div class="row">
			<!-- <img src="assets/img/banner-wisata.png" width="100%" alt=""> -->
			<?= Html::img('@web/img/banner-wisata.png', ['width' => '100%']) ?>

		</div>
	</div>
</section>
<section id="nav-wisata">
	<div class="container">
		<div class="row navbar navbar-expand-md sticky-top d-flex justify-content-around">
			<ul class="navbar-nav ">
				<li class="nav-item ">
					<a class="nav-link text-dark" href="wisata#wisata-religi">Wisata Religi</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark" href="wisata#outbond">Outbound dan Training</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark" href="wisata#wisata-edukasi">Wisata Edukasi</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark" href="wisata#resto-dan-cafe">Resto dan Kafe</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark" href="wisata#penginapan">Penginapan</a>
				</li>
			</ul>
		</div>
	</div>
</section>
<div id="team"></div>
<section class="card-wisata" id="wisata-religi">
	<div class="container">
		<div class="row title-card">
			<div class="col-lg-3 col-md-12">
				<h2 class="loraBold">Wisata Religi</h2>
			</div>
			<div class="col-lg-9 col-md-12 horizontal justify-content-center">
				<hr>
			</div>
		</div>
		<div class="row mt-5 card-content">
			<?php
			if ($religi == null) {
			?>
				<div class="col-12 mb-4 text-center">
					<h4>Tidak Ada Data</h4>
				</div>
				<?php
			} else {
				foreach ($religi as $list_wisata) {


				?>
					<div class="col-lg-4 col-md-6 col-12 mb-4">
						<a href="detail-wisata?id=<?= $list_wisata->id ?>">
							<div class="card" style="width:335px">
								<?= Html::img('../../uploads/image/' . $list_wisata->gambar . '', ['class' => 'card-img-top rounded', 'width' => '100%']) ?>
								<div class="card-body">
									<h4 class="card-title">
										<?= $list_wisata->judul ?>
									</h4>
									<p class="card-text" style="overflow:hidden;height:160px;"><?= $list_wisata->deskripsi ?>
								</div>
								<div class="card-footer">
									<a href="detail-wisata" class="btn">Baca Selengkapnya</a>
								</div>
							</div>
						</a>
					</div>
			<?php
				};
			}
			?>
		</div>
	</div>
</section>
<section class="card-wisata" id="outbond">
	<div class="container">
		<div class="row title-card">
			<div class="col-lg-3 col-md-12">
				<h2 class="loraBold">Outbond and Training</h2>
			</div>
			<div class="col-lg-9 col-md-12 horizontal justify-content-center">
				<hr>
			</div>
		</div>
		<div class="row mt-5 card-content">
			<?php
			if ($outbound == null) {
			?>
				<div class="col-12 mb-4 text-center">
					<h4>Tidak Ada Data</h4>
				</div>
				<?php
			} else {
				foreach ($outbound as $list_wisata) {


				?>
					<div class="col-lg-4 col-md-6 col-12 mb-4">
						<a href="detail-wisata?id=<?= $list_wisata->id ?>">
							<div class="card" style="width:335px">
								<?= Html::img('../../uploads/image/' . $list_wisata->gambar . '', ['class' => 'card-img-top rounded', 'width' => '100%']) ?>
								<div class="card-body">
									<h4 class="card-title">
										<?= $list_wisata->judul ?>
									</h4>
									<p class="card-text" style="overflow:hidden;height:160px;"><?= $list_wisata->deskripsi ?>
								</div>
								<div class="card-footer">
									<a href="detail-wisata" class="btn">Baca Selengkapnya</a>
								</div>
							</div>
						</a>
					</div>
			<?php
				};
			}
			?>
		</div>
	</div>
</section>
<section class="card-wisata" id="wisata-edukasi">
	<div class="container">
		<div class="row title-card">
			<div class="col-lg-3 col-md-12">
				<h2 class="loraBold">Wisata Edukasi</h2>
			</div>
			<div class="col-lg-9 col-md-12 horizontal justify-content-center">
				<hr>
			</div>
		</div>
		<div class="row mt-5 card-content">
			<?php
			if ($edukasi == null) {
			?>
				<div class="col-12 mb-4 text-center">
					<h4>Tidak Ada Data</h4>
				</div>
				<?php
			} else {
				foreach ($edukasi as $list_wisata) {


				?>
					<div class="col-lg-4 col-md-6 col-12 mb-4">
						<a href="detail-wisata?id=<?= $list_wisata->id ?>">
							<div class="card" style="width:335px">
								<?= Html::img('../../uploads/image/' . $list_wisata->gambar . '', ['class' => 'card-img-top rounded', 'width' => '100%']) ?>
								<div class="card-body">
									<h4 class="card-title">
										<?= $list_wisata->judul ?>
									</h4>
									<p class="card-text" style="overflow:hidden;height:160px;"><?= $list_wisata->deskripsi ?>
								</div>
								<div class="card-footer">
									<a href="detail-wisata" class="btn">Baca Selengkapnya</a>
								</div>
							</div>
						</a>
					</div>
			<?php
				};
			}
			?>
		</div>
	</div>
</section>
<section class="card-wisata" id="resto-dan-cafe">
	<div class="container">
		<div class="row title-card">
			<div class="col-lg-3 col-md-12">
				<h2 class="loraBold">Resto dan Cafe</h2>
			</div>
			<div class="col-lg-9 col-md-12 horizontal justify-content-center">
				<hr>
			</div>
		</div>
		<div class="row mt-5 card-content">
			<?php
			if ($resto_cafe == null) {
			?>
				<div class="col-12 mb-4 text-center">
					<h4>Tidak Ada Data</h4>
				</div>
				<?php
			} else {
				foreach ($resto_cafe as $list_wisata) {


				?>
					<div class="col-lg-4 col-md-6 col-12 mb-4">
						<a href="detail-wisata?id=<?= $list_wisata->id ?>">
							<div class="card" style="width:335px">
								<?= Html::img('../../uploads/image/' . $list_wisata->gambar . '', ['class' => 'card-img-top rounded', 'width' => '100%']) ?>
								<div class="card-body">
									<h4 class="card-title">
										<?= $list_wisata->judul ?>
									</h4>
									<p class="card-text" style="overflow:hidden;height:160px;"><?= $list_wisata->deskripsi ?>
								</div>
								<div class="card-footer">
									<a href="detail-wisata" class="btn">Baca Selengkapnya</a>
								</div>
							</div>
						</a>
					</div>
			<?php
				};
			}
			?>
		</div>
	</div>
</section>
<section class="card-wisata" id="penginapan">
	<div class="container">
		<div class="row title-card">
			<div class="col-lg-3 col-md-12">
				<h2 class="loraBold">Penginapan</h2>
			</div>
			<div class="col-lg-9 col-md-12 horizontal justify-content-center">
				<hr>
			</div>
		</div>
		<div class="row mt-5 card-content">
			<?php
			if ($penginapan == null) {
			?>
				<div class="col-12 mb-4 text-center">
					<h4>Tidak Ada Data</h4>
				</div>
				<?php
			} else {
				foreach ($penginapan as $list_wisata) {


				?>
					<div class="col-lg-4 col-md-6 col-12 mb-4">
						<a href="detail-wisata?id=<?= $list_wisata->id ?>">
							<div class="card" style="width:335px">
								<?= Html::img('../../uploads/image/' . $list_wisata->gambar . '', ['class' => 'card-img-top rounded', 'width' => '100%']) ?>
								<div class="card-body">
									<h4 class="card-title">
										<?= $list_wisata->judul ?>
									</h4>
									<p class="card-text" style="overflow:hidden;height:160px;"><?= $list_wisata->deskripsi ?>
								</div>
								<div class="card-footer">
									<a href="detail-wisata" class="btn">Baca Selengkapnya</a>
								</div>
							</div>
						</a>
					</div>
			<?php
				};
			}
			?>
		</div>
	</div>
</section>