<div class="form-kuliner-container">
	<h3>EDIT TEMPAT KULINER</h3>
	<div class="content-tambah-kuliner">
		<div class="form">
			<form action="<?= base_url('/user/updatekuliner/') . $tempat_kuliner['id_post'] ?>" method="post">
				<div class="form-input">
					<label for="">Nama Tempat/Warung/Restoran* :</label>
					<input placeholder="nama warung/restoran" value="<?= $tempat_kuliner['judul_post'] ?>"
						class="judul_post" required type="text" name="judul_post">
				</div>
				<div class="form-input">
					<label for="">Alamat Lengkap Tempat Kuliner* :</label>
					<input class="alamat" required type="text" value="<?= $tempat_kuliner['alamat'] ?>"
						placeholder="alamat" name="alamat">
				</div>
				<div class="form-input">
					<label for="">Buka Jam?* :</label>
					<span style="font-size:12px;color:green;font-weight:bold">contoh: 08:00 - 20:00</span>
					<span style="font-size:12px;color:green;font-weight:bold">-jika buka 24jam isi : buka 24 jam</span>
					<input class="jam_buka" placeholder="jam buka" value="<?= $tempat_kuliner['jam_buka'] ?>" required
						type="text" name="jam_buka">
				</div>
				<div class="form-input">
					<label for="">Deskripsi* :</label>
					<textarea class="deskripsi" required placeholder="deskripsi lengkap"
						data-konten="<?= $tempat_kuliner['konten'] ?>" name="deskripsi" id="" cols="30"
						rows="10"></textarea>
				</div>
		</div>
		<div class="leaflet">
			<div class="form-lf">
				<div class="form-leaflet">
					<input type="text" value="<?= $tempat_kuliner['latitude'] ?>" name="latitude" class="latitude"
						hidden readonly>
				</div>
				<div class="form-leaflet">
					<input type="text" value="<?= $tempat_kuliner['longitude'] ?>" name="longitude" class="longitude"
						hidden readonly>
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
