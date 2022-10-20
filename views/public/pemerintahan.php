<?php

use yii\helpers\Html;

$this->title = 'Pemerintahan | Wonosalam';
?>

<div id="portofolio"></div>
<section id="struktur">
	<div class="container">
		<div class="row justify-content-center">
			<h2 class="font-weight-bold mb-5">Susunan Pemerintahan</h2>
			<!-- <img src="assets/img/struktur-pemerintah.png" class="img-fluid" alt=""> -->
			<?= Html::img('@web/img/struktur-pemerintah.png', ['class' => 'img-fluid']) ?>

		</div>
	</div>
</section>
<section id="susunan">
	<div class="container">
		<div class="row justify-content-center mb-2">
			<div class="col-lg-6">
				<div class="card-deck">
					<div class="card">
						<div class="card-body row">
							<div class="col-4">
								<!-- <img src="assets/img/default-avatar.png" class="img-fluid" alt=""> -->
								<?= Html::img('@web/img/default-avatar.png', ['class' => 'img-fluid']) ?>
							</div>
							<div class="col-8 susunan-text">
								<h5 class="card-title"><?= $kepala_desa->jabatan  ?></h5>
								<p class="card-text"><?= $kepala_desa->nama_lengkap  ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<?php foreach ($struktur_desa as $list_struktur) { ?>
				<div class="col-lg-6 ">
					<div class="card-deck">
						<div class="card">
							<div class="card-body row">
								<div class="col-4">
									<?= Html::img('@web/img/default-avatar.png', ['class' => 'img-fluid']) ?>
								</div>
								<div class="col-8 susunan-text">
									<h5 class="card-title"><?= $list_struktur->jabatan ?></h5>
									<p class="card-text"><?= $list_struktur->nama_lengkap ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>

		</div>
	</div>
</section>
<section id="visimisi">
	<div class="container">
		<div class="row justify-content-center mb-4">
			<h2>Visi Misi <br> Desa Wonosalam</h2>
		</div>
		<div class="row">
			<div class="col-12">
				<h3>VISI</h3>
			</div>
			<div class="col-12 visi">
				<p>Visi Desa Wonosalam tahun 2020-2025 : </p>
				<p>
					“<?= $visi_misi->visi ?>”
				</p>
			</div>
			<div class="col-12">
				<h3>MISI</h3>
			</div>
			<div class="col-12 misi">
				<p>Misi Desa Wonosalam:</p>
				<!-- <ol> -->
				<?= $visi_misi->misi ?>

				<!-- </ol> -->
			</div>
		</div>
	</div>
</section>
<br>
<br>
<br>

<!-- Footer -->