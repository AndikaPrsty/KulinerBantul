<!-- footer -->
<div class="mobile-menu">
    <a class="fas fa-lg fa-home"></a>
    <a class="fas fa-lg fa-bell"></a>
    <a class="fas fa-lg fa-compass"></a>
    <a><img src="<?= base_url('/assets/img/default.jpg') ?>"></a>
</div>
<!-- end footer -->
</div>
<script src="https://www.gstatic.com/firebasejs/6.2.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/6.2.0/firebase-storage.js"></script>
<script src="<?= base_url('/assets/jquery/jquery.js') ?>"></script>
<script src="<?= base_url('/assets/bootstrap/js/popper.min.js') ?>"></script>
<script src="<?= base_url('/assets/bootstrap/js/bootstrap.js') ?>"></script>
<script src="<?= base_url('/assets/js/script.js') ?>"></script>
<?php if ($this->uri->segment(2) == 'tambah_tempat_kuliner') : ?>
    <script src="<?= base_url('/assets/js/tambahkuliner.js') ?>"></script>
<?php endif ?>
<?php if ($this->uri->segment(2) == 'tambah_event') : ?>
    <script src="<?= base_url('/assets/js/tambahevent.js') ?>"></script>
<?php endif ?>
<script>
</script>
</body>

</html>