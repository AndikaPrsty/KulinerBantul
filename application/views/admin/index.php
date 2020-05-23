<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3><?= $jumlah_member ?></h3>

                        <p>Member Terdaftar</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3><?= $jumlah_tempat_kuliner ?></h3>

                        <p>Post Tempat Kuliner</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3><?= $jumlah_event_kuliner ?></h3>

                        <p>Post Event Kuliner</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3><?= $jumlah_lokasi_terdaftar ?></h3>

                        <p>Lokasi Kuliner Terdaftar</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-striped bg-white">
                    <tr>
                        <th width="10px">No</th>
                        <th>Judul Post</th>
                        <th>alamat</th>
                        <th>konten</th>
                        <th>jenis post</th>
                        <th width="30px">action</th>
                    </tr>
                    <?php foreach ($post as $post) : ?>
                        <tr>
                            <?php $no = 1 ?>
                            <td><?= $no ?></td>
                            <td width="150px" class="text-break"><?= $post['judul_post'] ?></td>
                            <td width="150px" class="text-break"><?= $post['alamat'] ?></td>
                            <td width="250px"><textarea cols="40" rows="5" readonly><?= $post['konten'] ?></textarea></td>
                            <td width="100px" class="text-break"><span class="badge"><?= $post['jenis_post'] ?></span></td>
                            <td width="200px"><button onclick="window.location.href = '<?= base_url('admin/preview_post/') . $post['id_post'] . '/' . $post['id_jenis_post'] ?>'" class="btn-info mr-1">Preview</button><a href="<?= base_url('admin/approve_post/') . $post['id_post'] ?>" onclick="confirm('apakah anda yakin menyetujui post ini?')"><button class=" btn-success mr-1">setujui</button></a><button onclick="confirm('apakah anda yakin akan menghapus post ini?'); window.location.href = '<?= base_url('admin/reject_post/') . $post['id_post'] ?>'" class="btn-danger">tolak</button></td>
                        </tr>
                    <?php endforeach ?>
                </table>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->