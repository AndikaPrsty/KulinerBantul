<div class="form-kuliner-container">
    <h3>FORM TAMBAH TEMPAT KULINER</h3>
    <div class="content-tambah-kuliner">
        <div class="form">
            <form action="<?= base_url('post/tambah_tempat_kuliner') ?>" method="post">
                <div class="form-input">
                    <label for="">Nama Tempat/Warung/Restoran</label>
                    <input type="text" name="judul_post">
                </div>
                <div class="form-input">
                    <label for="">Alamat Lengkap Tempat Kuliner</label>
                    <input type="text" name="judul_post">
                </div>
                <div class="form-input">
                    <label for="">Deskripsi</label>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="form-input">
                    <label for="">Gambar/Poster</label>
                    <input type="file">
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
            <p style="font-weight:bold;margin:10px 0;">silahkan pilih titik tampat/warung/restoran</p>

            <div id="map" style="height:100%;width:100%;box-shadow: 0px 0px 5px 0px grey;cursor:crosshair" class="map"></div>
        </div>
    </div>
</div>