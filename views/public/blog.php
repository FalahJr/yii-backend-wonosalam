<?php

use yii\helpers\Html;

$this->title = 'Blog | Wonosalam';
?>
<section id="banner-blog">
	<div class="container-fluid">
		<div class="row">
			<!-- <img src="assets/img/blog.png" width="100%" alt=""> -->
			<?= Html::img('@web/img/blog.png', ['width' => '100%']) ?>

			<div class="centered">
				<h1 class="text-light">KEGIATAN MASYARAKAT</h1>
				<h4 class="text-light">Kegiatan Desa merupakan rutinitas, adat, maupun tradisi yang dilakukan masyarakat Desa Wonosalam secara turun temurun untuk mempererat rasa solidaritas, persaudaraan, dan kekeluargaan.
				</h4>
			</div>
		</div>
	</div>
</section>
<div id="team"></div>
<section class="card-blog">
	<div class="container">
		<div class="row title-card">
			<div class="col-lg-3 col-md-12">
				<h2 class="loraBold">Blog Wonosalam</h2>
			</div>
			<div class="col-lg-9 col-md-12 horizontal justify-content-center">
				<hr>
			</div>
		</div>
		<div class="row mt-5 card-content">
			<?php
			if ($blog == null) {
			?>
				<div class="col-12 mb-4 text-center">
					<h4>Tidak Ada Data</h4>
				</div>
				<?php
			} else {
				foreach ($blog as $list_blog) {


				?>
					<div class="col-lg-4 col-md-6 col-12 mb-4">
						<a href="detail-blog?id=<?= $list_blog->id ?>">
							<div class="card">
								<!-- <img class="card-img-top rounded" src="assets/img/card-blog.png" alt="Card image" style="width:100%"> -->

								<?= Html::img('../../uploads/image/' . $list_blog->gambar . '', ['class' => 'card-img-top rounded', 'width' => '100%']) ?>

								<div class="card-body">
									<div class="tagline mb-2">
										<button disabled="disabled" class="btn btn-sm btn-primary text-light "><?= $list_blog->blogKategori->nama ?></button>
									</div>
									<h4 class="card-title"><?= $list_blog->title ?>
									</h4>

									<p class="card-text" style="overflow:hidden;height: 245px;">

										<?= $list_blog->deskripsi ?>
									</p>
								</div>
								<div class=" card-footer">
									<a href="detail-blog?id=<?= $list_blog->id ?>" class="btn">Baca Selengkapnya</a>
								</div>
							</div>
						</a>
					</div>
			<?php
				}
			}
			?>
		</div>
	</div>
</section>