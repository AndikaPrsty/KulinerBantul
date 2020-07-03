<div class="form-kuliner-container">
    <h3>FORM TAMBAH EVENT KULINER</h3>
	<div class="content-tambah-kuliner">
		<div class="form">
			<form action="<?= base_url('/user/updateevent/') . $this->uri->segment(3) ?>" method="post">
				<div class="form-input">
					<label for="">Nama Event Kuliner* :</label>
					<input placeholder="nama event" value="<?= $event_kuliner['judul_post'] ?>" class="judul_post" required type="text" name="judul_post">
				</div>
				<div class="form-input">
					<label for="">Alamat Lengkap Tempat Event Kuliner* :</label>
					<input class="alamat" required type="text" value="<?= $event_kuliner['alamat'] ?>" placeholder="alamat" name="alamat">
				</div>
				<div class="form-input">
					<label for="">Tanggal Event Kuliner?* :</label>
					<input class="tanggal_event" value="<?= $event_kuliner['tanggal'] ?>" placeholder="tanggal event" required type="date" name="tanggal_event">
				</div>
				<div class="form-input">
					<label for="">Deskripsi* :</label>
					<textarea class="deskripsi" data-konten="<?= $event_kuliner['konten'] ?>" required placeholder="deskripsi lengkap" name="deskripsi" id=""
						cols="30" rows="10"></textarea>
				</div>
		</div>
		<div class="leaflet">
			<div class="form-lf">
				<div class="form-leaflet">
					<input type="text" name="latitude" value="<?= $event_kuliner['latitude'] ?>" class="latitude" hidden readonly>
				</div>
				<div class="form-leaflet">
					<input type="text" name="longitude" value="<?= $event_kuliner['longitude'] ?>" class="longitude" hidden readonly>
				</div>
			</div>
			<p style="font-weight:bold;margin:10px 0;">silahkan klik titik tampat/warung/restoran</p>

			<div class="map-container"></div>
		</div>
		<div class="submit-tempat-kuliner">
			<button class="submit">SUBMIT</button>
			<button onclick="window.location.href = '<?= base_url() ?>'" class="reset">BATAL</button>
		</div>
		</form>
	</div>
</div>
<section>
	<div class="modal fade" id="modalLoading" data-backdrop="static" tabindex="-1" role="dialog"
		aria-labelledby="modalLoadingTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
				</div>
				<div class="modal-body">
					<div class="d-flex justify-content-center">
						<p>uploading......</p>
					</div>
					<div class="d-flex justify-content-center">
						<progress value="0" class="progress-bar"></progress>
					</div>
					<div class="d-flex justify-content-center">
						<div class="lds-ring">
							<div></div>
							<div></div>
							<div></div>
							<div></div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
				</div>
			</div>
		</div>
	</div>
</section>
