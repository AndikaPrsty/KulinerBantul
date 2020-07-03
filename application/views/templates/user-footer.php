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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="<?= base_url('/assets/js/script.js') ?>"></script>
<?php if ($this->uri->segment(2) == 'tambah_tempat_kuliner') : ?>
    <script src="<?= base_url('/assets/js/tambahkuliner.js') ?>"></script>
<?php endif ?>
<?php if ($this->uri->segment(2) == 'tambah_event') : ?>
    <script src="<?= base_url('/assets/js/tambahevent.js') ?>"></script>
<?php endif ?>
<script>
</script>
<script src="<?= base_url('/assets/js/profile.js') ?>"></script>
<?php if ($this->uri->segment(2) == 'editkuliner') : ?>
    <script src="<?= base_url('/assets/js/editkuliner.js') ?>"></script>
<?php endif ?>
</body>

</html>