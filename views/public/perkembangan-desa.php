<?php

use yii\helpers\Html;

$this->title = 'Perkembangan Desa | Wonosalam';
?>

<!-- Slideshow Start -->
<div class="scroll" id="home"></div>
<section id="perkembangan-penduduk">
	<div class="container">
		<div class="row pt-5">
			<div class="col-8 col-lg-4 mt-5 mt-lg-0">
				<div class="animationImg ">
					<!-- <img src="assets/img/perkembangan-penduduk.png" class="rounded" width="100%" height="40%" alt=""> -->
					<?= Html::img('@web/img/perkembangan-penduduk.png', ['class' => 'rounded', 'width' => '100%', 'height' => '40%']) ?>

				</div>
			</div>
			<div class="col-12 col-lg-8 tabel-penduduk">
				<!-- <hr> -->
				<h1 class="loraBold mt-4 animation2">Perkembangan Penduduk</h1>
				<br>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th colspan="2">Jumlah Penduduk</th>
						</tr>
					</thead>
					<tbody>

						<tr>
							<td>Laki-laki</td>
							<td><?= $penduduk->lelaki ?> orang</td>

						</tr>
						<tr>
							<td>Perempuan</td>
							<td><?= $penduduk->perempuan ?> orang</td>
						</tr>
						<tr>
							<td>Jumlah Kepala Keluarga</td>
							<td><?= $penduduk->jumlah_kk ?> KK</td>
						</tr>
					</tbody>
				</table>
			</div>

		</div>
	</div>
</section>
<!-- Content Start -->

<section id="table-data-kependudukan">
	<div class="container">
		<div class="row pendidikan">
			<div class="col-12">
				<h2 class="text-light">Pendidikan</h2>
			</div>
			<br>
			<div class="table-pendidikan col-12">
				<table class="table table-bordered text-dark">
					<thead>
						<tr>
							<th colspan="2">Tingkat Pendidikan</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$jumlah_total = 0;
						foreach ($pendidikan as $listPendidikan) { ?>
							<tr>
								<td><?= $listPendidikan->tingkat_pendidikan ?></td>
								<td><?= $listPendidikan->jumlah ?> orang</td>
								<?php $jumlah_total += $listPendidikan->jumlah ?>
							</tr>
						<?php } ?>
						<tr>
							<td>Jumlah</td>

							<td><?= $jumlah_total ?> orang</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

		<div class="row mata-pencaharian">
			<div class="col-12">
				<h2 class="text-light">Mata Pencaharian Pokok</h2>
			</div>
			<br>
			<div class="table-mata-pencaharian col-12">
				<table class="table table-bordered text-dark">
					<thead>
						<tr>
							<th>Jumlah Penduduk</th>
							<th>Laki-laki</th>
							<th>Perempuan</th>
						</tr>
					</thead>
					<tbody>

						<?php foreach ($pekerjaan as $listPekerjaan) { ?>
							<tr>
								<td><?= $listPekerjaan->jenis_pekerjaan ?></td>
								<td><?= $listPekerjaan->lelaki ?> orang</td>
								<td><?= $listPekerjaan->perempuan ?> orang</td>
							</tr>
						<?php } ?>

					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>
<!-- end Portofolio Section -->