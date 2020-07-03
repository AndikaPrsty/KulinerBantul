<div class="content">
	<div class="post">
		<h3 class="h3">Tempat Kuliner</h3>
		<?php foreach ($tempat_kuliner as $tempat) : ?>
		<div class="post-container">
			<div class="post-content-header">
				<img src="<?= $tempat['image'] ?>" alt="">
				<p><?= $tempat['judul_post'] ?></p>
				<i class="fas fa-ellipsis-v" data-id="<?= $tempat['id_post'] ?>" id="modalTempatOptionsButton"
					data-toggle="modal" data-target="#modalTempatOptions"></i>
			</div>
			<div class="post-content-img">
				<div id="carouselExampleControls<?= $tempat['id_post'] ?>" data-interval="false" class="carousel slide">
					<div class="carousel-inner">
						<?php foreach ($this->PostModel->get_gambar_post($tempat['id_post'])->result_array() as $gambar) : ?>
						<div class="carousel-item">
							<img style="max-width: 700px;max-height:300px" src="<?= $gambar['gambar'] ?>">
						</div>
						<?php endforeach  ?>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleControls<?= $tempat['id_post'] ?>"
						role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleControls<?= $tempat['id_post'] ?>"
						role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			<div class="post-content-caption">
				<p class="nama"><?= $tempat['nama_user'] ?></p>
				<p style="font-size:13px" class="caption"><?= $tempat['konten'] ?></p>
			</div>
			<div class="post-content-info">
				<div class="alamat">
					<i class="fas fa-map-marker-alt"></i>
					<P style="font-size: 13px"><?= $tempat['alamat'] ?></P>
					<div class="map">
						<button style="margin-right:5px;" data-judul="<?= $tempat['judul_post'] ?>"
							data-longitude="<?= $tempat['longitude'] ?>" data-latitude="<?= $tempat['latitude'] ?>"
							data-toggle="modal" data-target="#mapmodal" id="btnmap" class="btn btn-sm btn-primary "><i
								class="fas fa-globe btnmap ml-2"></i></button>
					</div>
				</div>
				<div class="jam-buka">
					<i class="far fa-clock"></i>
					<p style="font-weight: bold"><?= $tempat['jam_buka'] ?></p>
				</div>
				<div class="mobile-map">
					<i class="fas fa-map-marked-alt"></i>
					<p>lihat lokasi</p>
				</div>
			</div>
		</div>
		<?php endforeach ?>
	</div>
	<div class="event">
		<h3 class="event-header">Event Kuliner</h3>
		<?php foreach ($event_kuliner as $event) : ?>
		<div class="event-container">
			<div class="event-content-header">
				<img src="<?= $event['image'] ?>" alt="">
				<p><?= $event['judul_post'] ?></p>
				<i class="fas fa-ellipsis-v" data-id="<?= $event['id_post'] ?>" id="modalEventOptionsButton"
					data-toggle="modal" data-target="#modalEventOptions"></i>
			</div>
			<div class="event-content-img">
				<div id="carouselExampleControls<?= $event['id_post'] ?>" data-interval="false" class="carousel slide">
					<div class="carousel-inner">
						<?php foreach ($this->PostModel->get_gambar_post($event['id_post'])->result_array() as $gambar) : ?>
						<div class="carousel-item">
							<img style="max-width: 700px;max-height:300px" src="<?= $gambar['gambar'] ?>">
						</div>
						<?php endforeach  ?>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleControls<?= $event['id_post'] ?>"
						role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleControls<?= $event['id_post'] ?>"
						role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			<div class="event-content-caption">
				<p class="nama"><?= $event['nama_user'] ?></p>
				<p class="caption"><?= $event['konten'] ?>
				</p>
			</div>
			<div class="event-content-info">
				<div class="alamat">
					<i class="fas fa-map-marker-alt"></i>
					<p><?= $event['alamat'] ?></p>
					<div class="map">
						<button style="margin-right:5px;" data-judul="<?= $event['judul_post'] ?>"
							data-longitude="<?= $event['longitude'] ?>" data-latitude="<?= $event['latitude'] ?>"
							data-toggle="modal" data-target="#mapmodal" id="btnmap" class="btn btn-sm btn-primary "><i
								class="fas fa-globe btnmap ml-2"></i></button>
					</div>
				</div>
				<hr>
				<div class="tanggal">
					<i class="far fa-calendar-alt"></i>
					<p><?= $event['tanggal'] ?></p>
				</div>
			</div>
		</div>
		<?php endforeach ?>
	</div>
</div>

<!-- Modal Map -->
<div class="modal fade" id="mapmodal" data-backdrop="static" tabindex="-1" role="dialog"
	aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div id="maphome" class="map">
				</div>

			</div>
		</div>
	</div>
</div>

<!--Post Tempat Kulinwe Modal Options -->
<div class="modal fade" id="modalTempatOptions" tabindex="-1" role="dialog" aria-labelledby="modalTempatOptionsLabel"
	aria-hidden="true">
	<div class="modal-dialog modal-sm modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="h4">Action</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				
			</div>
		</div>
	</div>
</div>

<!--Post event Kulinwe Modal Options -->
<div class="modal fade" id="modalEventOptions" tabindex="-1" role="dialog" aria-labelledby="modalEventOptionsLabel"
	aria-hidden="true">
	<div class="modal-dialog modal-sm modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="h4">Action</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				
			</div>
		</div>
	</div>
</div>
