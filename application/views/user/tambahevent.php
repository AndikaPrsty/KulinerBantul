<div class="form-kuliner-container">
    <h3>FORM TAMBAH EVENT KULINER</h3>
    <div class="content-tambah-kuliner">
        <div class="form">
            <form method="post">
                <div class="form-input">
                    <label for="">Nama Event Kuliner* :</label>
                    <input placeholder="nama event" class="judul_post" required type="text" name="judul_post">
                </div>
                <div class="form-input">
                    <label for="">Alamat Lengkap Tempat Event Kuliner* :</label>
                    <input class="alamat" required type="text" placeholder="alamat" name="judul_post">
                </div>
                <div class="form-input">
                    <label for="">Tanggal Event Kuliner?* :</label>
                    <input class="tanggal_event" placeholder="tanggal event" required type="date" name="tanggal_event">
                </div>
                <div class="form-input">
                    <label for="">Deskripsi* :</label>
                    <textarea class="deskripsi" required placeholder="deskripsi lengkap" name="deskripsi" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="form-input">
                    <label for="">Gambar/Poster* :</label>
                    <input required type="file" class="upload-img">
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

            <div class="map-container"></div>
        </div>
        <div class="submit-tempat-kuliner">
            <button class="submit">SUBMIT</button>
            <button onclick="window.location.href = '<?= base_url() ?>'" class="reset">BATAL</button>
        </div>
    </div>
</div>
<section>
    <div class="modal fade" id="modalLoading" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modalLoadingTitle" aria-hidden="true">
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