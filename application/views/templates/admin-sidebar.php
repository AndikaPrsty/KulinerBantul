<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: rgb(126, 161, 31)">
    <!-- Brand Logo -->
    <a href="<?= base_url('admin') ?>" class="brand-link">

        <span class="font-weight-bold d-flex justify-content-center">Kuliner Bantul</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <?php if ($this->uri->segment(2) === null) : ?>
                        <a href="<?= base_url('admin') ?>" class="nav-link active">
                            <!-- <i class="fas fa-tachometer-alt nav-icon"></i>
                            <p>Dashboard</p>
                        </a> -->
                        <?php else : ?>
                            <a href="<?= base_url('admin') ?>" class="nav-link  ">
                            <?php endif ?>
                            <i class="fas fa-tachometer-alt nav-icon"></i>
                            <p>Dashboard</p>
                            </a>
                </li>
                <?php if ($this->uri->segment(2) !== null) : ?>
                    <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link active">
                        <?php else : ?>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                        <?php endif ?>
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Master Data
                            <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <?php if ($this->uri->segment(2) === 'daftar_member') : ?>
                                    <a href="<?= base_url('admin/daftar_member') ?>" class="nav-link active">
                                    <?php else : ?>
                                        <a href="<?= base_url('admin/daftar_member') ?>" class="nav-link">
                                        <?php endif ?>
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Daftar Member</p>
                                        </a>
                            </li>
                            <li class="nav-item">
                                <?php if ($this->uri->segment(2) === 'daftar_tempat_kuliner') : ?>
                                    <a href="<?= base_url('admin/daftar_tempat_kuliner') ?>" class="nav-link active">
                                    <?php else : ?>
                                        <a href="<?= base_url('admin/daftar_tempat_kuliner') ?>" class="nav-link">
                                        <?php endif ?>
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Daftar Kuliner</p>
                                        </a>
                            </li>
                            <li class="nav-item">
                                <?php if ($this->uri->segment(2) === 'daftar_event_kuliner') : ?>
                                    <a href="<?= base_url('admin/daftar_event_kuliner') ?>" class="nav-link active">
                                    <?php else : ?>
                                        <a href="<?= base_url('admin/daftar_event_kuliner') ?>" class="nav-link">
                                        <?php endif ?>
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Daftar Event</p>
                                        </a>
                            </li>
                            <li class="nav-item">
                                <?php if ($this->uri->segment(2) === 'daftar_lokasi_kuliner') : ?>
                                    <a href="<?= base_url('admin/daftar_lokasi_kuliner') ?>" class="nav-link active">
                                    <?php else : ?>
                                        <a href="<?= base_url('admin/daftar_lokasi_kuliner') ?>" class="nav-link">
                                        <?php endif ?>
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Daftar Lokasi Kuliner</p>
                                        </a>
                            </li>
                        </ul>
                    </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>