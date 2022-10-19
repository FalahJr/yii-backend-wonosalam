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
							<td>4435 orang</td>
						</tr>
						<tr>
							<td>Perempuan</td>
							<td>4357 orang</td>
						</tr>
						<tr>
							<td>Jumlah Kepala Keluarga</td>
							<td>2771 KK</td>
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
						<tr>
							<td>Usia 3 -6 yang sedang TK/play group</td>
							<td>255 orang</td>
						</tr>
						<tr>
							<td>Usia 7 -18 tahun yang tidak pernah sekolah</td>
							<td>62 orang</td>
						</tr>
						<tr>
							<td>Usia 18 - 56 tahun tidak pernah sekolah</td>
							<td>60 orang</td>
						</tr>
						<tr>
							<td>Tamat SD/sederajat</td>
							<td>2417 orang</td>
						</tr>
						<tr>
							<td>Usia 12 - 56 tahun tidak tamat SLTP</td>
							<td>122 orang</td>
						</tr>
						<tr>
							<td>Usia 18 - 56 tahun tidak tamat SLTA</td>
							<td>110 orang</td>
						</tr>
						<tr>
							<td>Tamat SMP/sederajat</td>
							<td>1425 orang</td>
						</tr>
						<tr>
							<td>Tamat SMA/sederajat</td>
							<td>1368 orang</td>
						</tr>
						<tr>
							<td>Tamat D-1/sederajat</td>
							<td>148 orang</td>
						</tr>
						<tr>
							<td>Tamat D-2/sederajat</td>
							<td>115 orang</td>
						</tr>
						<tr>
							<td>Tamat D-3/sederajat</td>
							<td>270 orang</td>
						</tr>
						<tr>
							<td>Tamat S-2/sederajat</td>
							<td>38 orang</td>
						</tr>
						<tr>
							<td>Tamat SLB C</td>
							<td>0 orang</td>
						</tr>
						<tr>
							<td> <b>Jumlah Total</b> </td>
							<td>6390 orang</td>
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
						<tr>
							<td>Petani</td>
							<td>975 orang</td>
							<td>725 orang</td>
						</tr>
						<tr>
							<td>Buruh Tani</td>
							<td>144 orang</td>
							<td>60 orang</td>
						</tr>
						<tr>
							<td>Pegawai Negeri Sipil</td>
							<td>43 orang</td>
							<td>29 orang</td>
						</tr>
						<tr>
							<td>Peternak</td>
							<td>80 orang</td>
							<td>5 orang</td>
						</tr>
						<tr>
							<td>Bidan Swasta</td>
							<td>0 orang</td>
							<td>2 orang</td>
						</tr>
						<tr>
							<td>TNI</td>
							<td>9 orang</td>
							<td>1 orang</td>
						</tr>
						<tr>
							<td>Polri</td>
							<td>8 orang</td>
							<td>0 orang</td>
						</tr>
						<tr>
							<td>Pengusaha kecil, menengah dan besar</td>
							<td>82 orang</td>
							<td>12 orang</td>
						</tr>
						<tr>
							<td>Wiraswasta</td>
							<td>433 orang</td>
							<td>173 orang</td>
						</tr>
						<tr>
							<td>Perangkat Desa</td>
							<td>5 orang</td>
							<td>5 orang</td>
						</tr>
						<tr>
							<td>Buruh jasa perdagangan hasil bumi</td>
							<td>163 orang</td>
							<td>151 orang</td>
						</tr>
						<tr>
							<td>Karyawan honorer</td>
							<td>7 orang</td>
							<td>5 orang</td>
						</tr>
						<tr>
							<td>Wartawan</td>
							<td>2 orang</td>
							<td>0 orang</td>
						</tr>
						<tr>
							<td>Anggota Legislatif</td>
							<td>1 orang</td>
							<td>0 orang</td>
						</tr>
						<tr>
							<td>Belum bekerja</td>
							<td>1625 orang</td>
							<td>1180 orang</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>
<!-- end Portofolio Section -->