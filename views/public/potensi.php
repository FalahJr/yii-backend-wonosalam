<?php

use app\components\NodeLogger;

$this->title = 'Potensi | Wonosalam';
?>

<!-- Slideshow Start -->
<div class="scroll" id="home"></div>
<section id="potensi-desa">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 mb-2">
				<div class="pertanian">
					<button class="btn btn-light" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
						<h2 class="title-kategori">
							Potensi Pertanian
						</h2>
						<h2 class="icon-kategori">
							<i class="fas fa-angle-right"></i>
						</h2>
					</button>
				</div>
				<div class="container mt-4 collapse" id="collapseExample">
					<div class="row">
						<div class="col-12 mb-5">
							<h3>Luas Tanaman Pangan Komoditas</h3>
							<table class="table table-pertanian1 text-dark mt-3">
								<!-- <thead>
								  <tr>
									<th colspan="2">Tingkat Pendidikan</th>
								  </tr>
								</thead> -->
								<tbody>
									<?php
									foreach ($pertanian as $list_pertanian) {
										// NodeLogger::sendLog($list_pertanian->potensi_pertanian_kategori_id);
										if ($list_pertanian->potensi_pertanian_kategori_id === 1) {
											$pertanian_komoditas = $list_pertanian;
											// NodeLogger::sendLog($pertanian_komoditas);

											// if ($pertanian['potensi_pertanian_kategori_id'] == 1) {
											// 	$pertanian_komoditas = $pertanian;
											// }
									?>
											<tr>
												<td><?= $pertanian_komoditas->jenis ?></td>
												<td><?= $pertanian_komoditas->luas ?> Ha</td>
												<td><?= $pertanian_komoditas->hasil_panen ?> Ton/ha</td>
											</tr>
									<?php
										}
									}
									?>
								</tbody>
							</table>
						</div>

						<div class="col-12">
							<h3>Hasil Tanaman Dan Luas Tanaman Buah-buahan</h3>
							<table class="table table-pertanian2 text-dark mt-3">
								<thead>
									<tr>
										<th>Jenis</th>
										<th>Luas(ha)</th>
										<th>Hasil panen (Ton/ha)</th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach ($pertanian as $list_pertanian) {
										// NodeLogger::sendLog($list_pertanian->potensi_pertanian_kategori_id);
										if ($list_pertanian->potensi_pertanian_kategori_id === 2) {
											$pertanian_buah = $list_pertanian;
											// NodeLogger::sendLog($pertanian_komoditas);

											// if ($pertanian['potensi_pertanian_kategori_id'] == 1) {
											// 	$pertanian_komoditas = $pertanian;
											// }
									?>
											<tr>
												<td><?= $pertanian_buah->jenis ?></td>
												<td><?= $pertanian_buah->luas ?> Ha</td>
												<td><?= $pertanian_buah->hasil_panen ?> Ton/ha</td>
											</tr>
									<?php
										}
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-12 mb-2">
				<div class="pertanian">
					<button class="btn btn-light" type="button" data-toggle="collapse" data-target="#collapsePeternakan" aria-expanded="false" aria-controls="collapsePeternakan">
						<h2 class="title-kategori">
							Potensi Peternakan
						</h2>
						<h2 class="icon-kategori">
							<i class="fas fa-angle-right"></i>
						</h2>
					</button>
				</div>
				<div class="container mt-4  collapse" id="collapsePeternakan">
					<div class="row">
						<div class="col-12">
							<h3>Jenis Populasi Ternak</h3>
							<table class="table table-pertanian2 text-dark mt-3">
								<thead>
									<tr>
										<th>Jenis Ternak</th>
										<th>Jumlah Pemilik (orang)</th>
										<th>Perkiraan Jumlah Populasi (ekor)</th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach ($peternakan as $list_peternakan) {

									?>
										<tr>
											<td><?= $list_peternakan->jenis_ternak ?></td>
											<td><?= $list_peternakan->jumlah_pemilik ?></td>
											<td><?= $list_peternakan->jumlah_populasi_ternak ?></td>
										</tr>
									<?php
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-12 mb-2">
				<div class="pertanian">
					<button class="btn btn-light" type="button" data-toggle="collapse" data-target="#collapsePerkebunan" aria-expanded="false" aria-controls="collapseExample">
						<h2 class="title-kategori">
							Potensi Perkebunan
						</h2>
						<h2 class="icon-kategori">
							<i class="fas fa-angle-right"></i>
						</h2>
					</button>
				</div>
				<div class="container mt-4  collapse" id="collapsePerkebunan">
					<div class="row">
						<div class="col-12 mb-4">
							<h3>Luas Tanah Perkebunan</h3>
							<table class="table table-pertanian2 text-dark mt-3">
								<thead>
									<tr>
										<th>Luas Tanah Perkebunan</th>
										<th>(Ha)</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Tanah Perkebunan Rakyat</td>
										<td>46101</td>
									</tr>
									<tr>
										<td>Tanah Perkerbunan Negara</td>
										<td>0,00</td>
									</tr>
									<tr>
										<td>Tanah Perkebunan Swasta</td>
										<td>10,00</td>
									</tr>
									<tr>
										<td>Tanah Perkebunan Perorangan</td>
										<td>225,00</td>
									</tr>
									<tr>
										<td>Jumlah</td>
										<td>696,01</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-12">
							<h3>Hasil Perkebunan menurut jenis komoditas</h3>
							<table class="table table-pertanian2 text-dark mt-3">
								<thead>
									<tr>
										<th rowspan="2">Jenis</th>
										<th colspan="2">Swasta/negara</th>
										<th colspan="2">Rakyat</th>
									</tr>
									<tr>
										<th>Luas(ha)</th>
										<th>Hasil(w/ha)</th>
										<th>Luas(ha)</th>
										<th>Hasil(w/ha)</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Kelapa</td>
										<td>0,00</td>
										<td>0,00</td>
										<td>10,00</td>
										<td>1,00</td>
									</tr>
									<tr>
										<td>Kopi</td>
										<td>0,00</td>
										<td>0,00</td>
										<td>25,00</td>
										<td>3,00</td>
									</tr>
									<tr>
										<td>Cengkeh</td>
										<td>0,00</td>
										<td>0,00</td>
										<td>65,00</td>
										<td>5,00</td>
									</tr>
									<tr>
										<td>Coklat</td>
										<td>0,00</td>
										<td>0,00</td>
										<td>15,00</td>
										<td>1,00</td>
									</tr>
									<tr>
										<td>Tebu</td>
										<td>0,00</td>
										<td>0,00</td>
										<td>15,00</td>
										<td>15,00</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-12 mb-2">
				<div class="pertanian">
					<button class="btn btn-light" type="button" data-toggle="collapse" data-target="#collapseKehutanan" aria-expanded="false" aria-controls="collapseExample">
						<h2 class="title-kategori">
							Potensi Kehutanan
						</h2>
						<h2 class="icon-kategori">
							<i class="fas fa-angle-right"></i>
						</h2>
					</button>
				</div>
				<div class="container mt-4  collapse" id="collapseKehutanan">
					<div class="row">
						<div class="col-12 mb-5">
							<h3>Luas Lahan</h3>
							<table class="table table-pertanian1 text-dark mt-3">
								<thead>
									<tr>
										<th>Luas lahan menurut kepemilikan</th>
										<th>(Ha)</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Perhutanan/instansi sektoral</td>
										<td>105,00 Ha</td>
									</tr>
									<tr>
										<td>Milik masyarakat perorangan</td>
										<td>75,00 Ha</td>
									</tr>
									<tr>
										<td>Jumlah</td>
										<td>180,00 Ha</td>
									</tr>
								</tbody>
							</table>
						</div>

						<div class="col-12">
							<h3>Hasil Tanaman Dan Luas Tanaman Buah-buahan</h3>
							<table class="table table-pertanian2 text-dark mt-3">
								<thead>
									<tr>
										<th colspan="2">Hasil Hutan</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Kayu</td>
										<td>25,00 M3/TH</td>
									</tr>
									<tr>
										<td>Madu Lebah</td>
										<td>10,00 liter/TH</td>
									</tr>
									<tr>
										<td>Jati</td>
										<td>25,00 M3/TH</td>
									</tr>
									<tr>
										<td>Mahoni</td>
										<td>25,00 M3/TH</td>
									</tr>
									<tr>
										<td>Kayu</td>
										<td>1,00 Ton/TH</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end Portofolio Section -->