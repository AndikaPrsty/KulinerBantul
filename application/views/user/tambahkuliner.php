<div class="form-kuliner-container">
    <h3>FORM TAMBAH TEMPAT KULINER</h3>
    <div class="content-tambah-kuliner">
        <div class="form">
            <form action="<?= base_url('post/tambah_tempat_kuliner') ?>" method="post">
                <div class="form-input">
                    <label for="">Nama Tempat/Warung/Restoran</label>
                    <p class="judul-warn" style="color:brown">Wajib diisi</p>
                    <input class="judul_post" required type="text" name="judul_post">
                </div>
                <div class="form-input">
                    <label for="">Alamat Lengkap Tempat Kuliner</label>
                    <p style="color:brown;">Wajib diisi</p>
                    <input class="alamat" required type="text" name="judul_post">
                </div>
                <div class="form-input">
                    <label for="">Deskripsi</label>
                    <p style="color:brown;">Wajib diisi</p>
                    <textarea class="deskripsi" required name="deskripsi" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="form-input">
                    <label for="">Gambar/Poster</label>
                    <p style="color:brown;">Wajib diisi</p>
                    <input required type="file" class="upload-img">
                    <progress value="0" class="progress-bar"></progress>
                </div>
                <div class="img-upload-container">
                </div>
            </form>
        </div>
        <div class="leaflet">
            <div class="form-lf">
                <div class="form-leaflet">
                    <input type="text" name="latitude" class="latitude" hidden readonly>
                </div>
                <div class="form-leaflet">
                    <input type="text" name="longitude" class="longitude" hidden readonly>
                </div>
            </div>
            <p style="font-weight:bold;margin:10px 0;">silahkan klik titik tampat/warung/restoran</p>

            <div id="map" style="height:100%;width:100%;box-shadow: 0px 0px 5px 0px grey;cursor:crosshair" class="map"></div>
        </div>
        <div class="submit-tempat-kuliner">
            <button class="submit">SUBMIT</button>
            <button onclick="window.location.href = '<?= base_url() ?>'" class="reset">BATAL</button>
        </div>
    </div>
</div>