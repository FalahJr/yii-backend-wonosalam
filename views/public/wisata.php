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
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="wisata.html#wisata-religi">Wisata Religi</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="wisata.html#outbond">Outbound dan Training</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="wisata.html#wisata-edukasi">Wisata Edukasi</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="wisata.html#resto-dan-cafe">Resto dan Kafe</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="wisata.html#penginapan">Penginapan</a>
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
			<div class="col-lg-4 col-md-6 col-12 mb-4">
				<a href="detail-wisata.html">
					<div class="card" style="width:335px">
						<img class="card-img-top rounded" src="assets/img/religi.png" alt="Card image" style="width:100%">
						<div class="card-body">
							<h4 class="card-title">Gunung Kuncung
								Makam Wali Wonosegoro</h4>
							<p class="card-text">Situs makam gunung kuncung ini bisa menjadi salah satu rekomendasi
								buat kalian yang ingin tahu tentang sejarah Desa Wonosalam lho. Situs yang bertempat
								di lereng kaki Gunung Anjasmara ini, terdapat sebuah makam yang dipercaya sebagai
								pembabat alas Wonosalam, yakni Waliwonosegoro.
						</div>
						<div class="card-footer">
							<a href="detail-wisata.html" class="btn">Baca Selengkapnya</a>
						</div>
					</div>
				</a>
			</div>
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
			<div class="col-lg-4 col-md-6 col-12 mb-4">
				<div class="card" style="width:335px">
					<img class="card-img-top rounded" src="assets/img/wtc.png" alt="Card image" style="width:100%">
					<div class="card-body">
						<h4 class="card-title">Wonosalam Training Center (WTC)
						</h4>
						<p class="card-text">Wonosalam Training Centre atau yang biasa disingkat WTC, merupakan tempat yang melayani personal development training, meliputi latihan kepemimpinan, pengelolaan kesehatan fisik dan mental, serta keterampilan bermasyarakat.
						</p>
					</div>
					<div class="card-footer">
						<a href="detail-wisata.html" class="btn">Baca Selengkapnya</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-12 mb-4">
				<div class="card" style="width:335px">
					<img class="card-img-top rounded" src="assets/img/Asriloka.png" alt="Card image" style="width:100%">
					<div class="card-body">
						<h4 class="card-title">Asriloka
						</h4>
						<p class="card-text">Asriloka adalah sebuah tempat yang berfokus dalam memberikan training atau pendidikan manajemen diri dan outbond untuk mahasiswa, siswa, para karyawan kantor, serta outbond.
						</p>
					</div>
					<div class="card-footer">
						<a href="detail-wisata.html" class="btn">Baca Selengkapnya</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-12 mb-4">
				<div class="card" style="width:335px">
					<img class="card-img-top rounded" src="assets/img/lembah giri.png" alt="Card image" style="width:100%">
					<div class="card-body">
						<h4 class="card-title">Bumi Perkemahan Lembah Giri
						</h4>
						<p class="card-text">Bumi perkemahan lembah giri merupakan wisata alam yang sering dijadikan lokasi perkemahan di Jombang, Jawa Timur. Lokasi tepatnya berada di Gunung Kuncung, Dusun Notorejo, Kec. Wonosalam, Kab. Jombang.
						</p>
					</div>
					<div class="card-footer">
						<a href="detail-wisata.html" class="btn">Baca Selengkapnya</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-12 mb-4">
				<div class="card" style="width:335px">
					<img class="card-img-top rounded" src="assets/img/seloageng.png" alt="Card image" style="width:100%">
					<div class="card-body">
						<h4 class="card-title">Selo Ageng
						</h4>
						<p class="card-text">Selo Ageng dijadikan sebagai wisata kegiatan yaitu untuk tempat perkemahan, penjelajahan dan outbound seperti kegiatan kepramukaan maupun LDK (Latihan Dasar Kepemimpinan) dari sekolah ataupun komunitas yang datang dari daerah sekitar Jombang maupun luar kota lainnya.
						</p>
					</div>
					<div class="card-footer">
						<a href="detail-wisata.html" class="btn">Baca Selengkapnya</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-12 mb-4">
				<div class="card" style="width:335px">
					<img class="card-img-top rounded" src="assets/img/pwl.png" alt="Card image" style="width:100%">
					<div class="card-body">
						<h4 class="card-title">Padepokan Wonosalam Lestari
							Outbond and Training Camp</h4>
						<p class="card-text">Padepokan Wonosalam Lestari merupakan training center lingkungan hidup yang mempunyai sarana penginapan ruang belajar di alam dan ruang seminar
						</p>
					</div>
					<div class="card-footer">
						<a href="detail-wisata.html" class="btn">Baca Selengkapnya</a>
					</div>
				</div>
			</div>
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
			<div class="col-lg-4 col-md-6 col-12 mb-4">
				<div class="card" style="width:335px">
					<img class="card-img-top rounded" src="assets/img/kansa.png" alt="Card image" style="width:100%">
					<div class="card-body">
						<h4 class="card-title">KANSA - Kandang Sapi
						</h4>
						<p class="card-text">Kandang Sapi Wonosalam mengusung konsep rekreasi edukatif seputar sapi perah untuk anak dan keluarga. Selain mengenalkan kepada pengunjung jenis-jenis sapi perah dan cara beternak sapi perah, Kansa juga mengenalkan olahan susu sapi perah seperti susu berbagai rasa dan es krim beserta cara pembuatannya kepada anak melalui kegiatan cooking class yang disediakan.
						</p>
					</div>
					<div class="card-footer">
						<a href="detail-wisata.html" class="btn">Baca Selengkapnya</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-12 mb-4">
				<div class="card" style="width:335px">
					<img class="card-img-top rounded" src="assets/img/duran-duren.png" alt="Card image" style="width:100%">
					<div class="card-body">
						<h4 class="card-title">Duran - Duren
						</h4>
						<p class="card-text">Kelebihan dari wisata Duran Duren Wonosalam adalah menyediakan nuansa durian khas Wonosalam yang sangat berbeda dengan tempat lain. Sedangkan beberapa konsep outbound yang diselenggarakan meliputi outbound sekolah, training development, event adventure¸program LDKS, fun outbound activity.
						</p>
					</div>
					<div class="card-footer">
						<a href="detail-wisata.html" class="btn">Baca Selengkapnya</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-12 mb-4">
				<div class="card" style="width:335px">
					<img class="card-img-top rounded" src="assets/img/sendang.png" alt="Card image" style="width:100%">
					<div class="card-body">
						<h4 class="card-title">Sendang Rejosari
						</h4>
						<p class="card-text">Sendang Rejosari merupakan salah satu destinasi wisata di Desa Wonosalam yang saat ini masih belum resmi dibuka untuk umum. Tempat tersebut masih dalam tahap pembangunan dan perencanaan pengembangan.
						</p>
					</div>
					<div class="card-footer">
						<a href="detail-wisata.html" class="btn">Baca Selengkapnya</a>
					</div>
				</div>
			</div>
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
			<div class="col-lg-4 col-md-6 col-12 mb-4">
				<div class="card" style="width:335px">
					<img class="card-img-top rounded" src="assets/img/sinai.png" alt="Card image" style="width:100%">
					<div class="card-body">
						<h4 class="card-title">Saieda Estate/Sinai Caffe
						</h4>
						<p class="card-text">Nah buat kalian anak muda yang hobi nongkrong. Tempat ini cocok banget ini, ditambah dengan panorama keindahan alam yang bisa kalian nikmati dari cafe ini yang terletak di ketinggian. Suasananya nyaman dan instagramable. Cocok untuk tongkrongan anak muda yang hobi foto.
						</p>
					</div>
					<div class="card-footer">
						<a href="detail-wisata.html" class="btn">Baca Selengkapnya</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-12 mb-4">
				<div class="card" style="width:335px">
					<img class="card-img-top rounded" src="assets/img/lembah winden.png" alt="Card image" style="width:100%">
					<div class="card-body">
						<h4 class="card-title">Lembah Winden
						</h4>
						<p class="card-text">Lembah Winden adalah coffee shop bertemakan outdoor dan memiliki pemandangan langsung di alam, di lembah winden bersebelahan langsung dengan sungai
						</p>
					</div>
					<div class="card-footer">
						<a href="detail-wisata.html" class="btn">Baca Selengkapnya</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-12 mb-4">
				<div class="card" style="width:335px">
					<img class="card-img-top rounded" src="assets/img/tanah senja.png" alt="Card image" style="width:100%">
					<div class="card-body">
						<h4 class="card-title">Tanah Senja
						</h4>
						<p class="card-text">Tanah Senja merupakan salah satu kedai yang berada di Desa Wonosalam yang bernuansa alam dengan bangunan berbentuk joglo sebagian besar terbuat dari kayu yang sudah berusia tua dan natural yang dihias dengan bunga dalam pot gantung disetiap sisinya.
					</div>
					<div class="card-footer">
						<a href="detail-wisata.html" class="btn">Baca Selengkapnya</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-12 mb-4">
				<div class="card" style="width:335px">
					<img class="card-img-top rounded" src="assets/img/warung nggunung.png" alt="Card image" style="width:100%">
					<div class="card-body">
						<h4 class="card-title">Warung Nggunung
						</h4>
						<p class="card-text">Warung Nggunung merupakan sebuah tempat makan bergaya sederhana yang berada di Jl. Anjasmoro, RT 02 RW 03, Pucangrejo, Tukum, Kec. Wonosalam, Kabupaten Jombang. Warung ini terkenal dengan olahan kolak durian dan nasi jagung khas Wonosalam yang membuat para pelanggan selalu datang kembali.
						</p>
					</div>
					<div class="card-footer">
						<a href="detail-wisata.html" class="btn">Baca Selengkapnya</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-12 mb-4">
				<div class="card" style="width:335px">
					<img class="card-img-top rounded" src="assets/img/bu sulami.png" alt="Card image" style="width:100%">
					<div class="card-body">
						<h4 class="card-title">Warung Bu Sulami
						</h4>
						<p class="card-text">Keunggulan yang ditunjukkan Warung Bu Sulami adalah terdapat kopi jegidik dari tupai yang menjadikan keunikan Warung Bu Sulami. Selain kopi jegidik, masakan ndeso juga menjadi yang paling laris di Warung Bu Sulami.
						</p>
					</div>
					<div class="card-footer">
						<a href="detail-wisata.html" class="btn">Baca Selengkapnya</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-12 mb-4">
				<div class="card" style="width:335px">
					<img class="card-img-top rounded" src="assets/img/bukit durian.png" alt="Card image" style="width:100%">
					<div class="card-body">
						<h4 class="card-title">Waroeng Bukit Durian
						</h4>
						<p class="card-text">Waroeng Bukit Durian memiliki konsep warung yang berbeda dengan yang lainnya. Waroeng Bukit Durian mengunggulkan konsep gazebo yang kekinian, modern, dan digemari oleh semua kalangan usia.
						</p>
					</div>
					<div class="card-footer">
						<a href="detail-wisata.html" class="btn">Baca Selengkapnya</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-12 mb-4">
				<div class="card" style="width:335px">
					<img class="card-img-top rounded" src="assets/img/warung pojok.png" alt="Card image" style="width:100%">
					<div class="card-body">
						<h4 class="card-title">Warung Pojok Sumber (Kopi Luwak)
						</h4>
						<p class="card-text">Warung Pojok Sumber Kopi Luwak akan menawarkan berbagai makanan-makanan khas warung, seperti mie instan hingga berbagai makanan berat khas Jawa Timur-an. Yang menjadi daya tarik adalah kopi luwaknya.
						</p>
					</div>
					<div class="card-footer">
						<a href="detail-wisata.html" class="btn">Baca Selengkapnya</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-12 mb-4">
				<div class="card" style="width:335px">
					<img class="card-img-top rounded" src="assets/img/pasar buah.png" alt="Card image" style="width:100%">
					<div class="card-body">
						<h4 class="card-title">Pasar Buah
						</h4>
						<p class="card-text">Pasar Buah Wonosalam memang terkenal dengan penjualan duriannya. Namun, Pasar Buah Wonosalam juga menyuguhkan banyak buah musiman khas Wonosalam, seperti buah salak, manggis, dan alpukat.
					</div>
					<div class="card-footer">
						<a href="detail-wisata.html" class="btn">Baca Selengkapnya</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-12 mb-4">
				<div class="card" style="width:335px">
					<img class="card-img-top rounded" src="assets/img/cafe puncak.png" alt="Card image" style="width:100%">
					<div class="card-body">
						<h4 class="card-title">Kafe Puncak
						</h4>
						<p class="card-text">kedai kopi yang terletak di Sambirejo, wonosalam, Jombang. Dinamakan Puncak Coffe Wonosalam karena memang tempatnya berada di puncak serta tidak adanya kedai kopi yang berada disekitarnya.
						</p>
					</div>
					<div class="card-footer">
						<a href="detail-wisata.html" class="btn">Baca Selengkapnya</a>
					</div>
				</div>
			</div>
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
			<div class="col-lg-4 col-md-6 col-12 mb-4">
				<div class="card" style="width:335px">
					<img class="card-img-top rounded" src="assets/img/kampung city.png" alt="Card image" style="width:100%">
					<div class="card-body">
						<h4 class="card-title">Kampoeng City
						</h4>
						<p class="card-text">Kompleks villa yang terletak di Dusun Pucangrejo, Wonosalam, Kulon Gunung Kuncung, Kota Jombang. Penginapan ini berada dalam kawasan wisata Bumi Perkemahan Lembah Giri. Lokasi Kampoeng City sedikit masuk ke dalam hutan tetapi masih ada akses jalan untuk motor maupun mobil.
						</p>
					</div>
					<div class="card-footer">
						<a href="detail-wisata.html" class="btn">Baca Selengkapnya</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-12 mb-4">
				<div class="card" style="width:335px">
					<img class="card-img-top rounded" src="assets/img/agropolis.png" alt="Card image" style="width:100%">
					<div class="card-body">
						<h4 class="card-title">Agropolis
						</h4>
						<p class="card-text">Agropolis adalah sebuah tempat penginapan atau villa yang lokasinya dikelilingi oleh tiga pegununugan (Gunung Wilis, Gunung Kelud, Pegunungan Anjasmoro) sehingga mempunyai pemandangan yang sangat apik.
						</p>
					</div>
					<div class="card-footer">
						<a href="detail-wisata.html" class="btn">Baca Selengkapnya</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>