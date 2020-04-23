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
    <div class="openlayers">
        <div class="form-ol">
            <div class="form-openlayers">
                <label for="">Latitude</label>
                <input type="text" name="latitude" class="latitude" readonly>
            </div>
            <div class="form-openlayers">
                <label for="">Longitude</label>
                <input type="text" name="longitude" class="longitude" readonly>
            </div>
        </div>
        <div class="portlet-body" style="height:100%; width:100%">
            <div id="map" class="map"></div>
            <div id="marker" class="marker" title="Marker"></div>
        </div>
    </div>
</div>