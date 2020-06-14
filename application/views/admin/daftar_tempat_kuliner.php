<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Daftar Tempat Kuliner</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Tempat Kuliner</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="row">
            <div class="col">
                <table class="table table-striped">
                    <tr>
                        <th>No</th>
                        <th>Judul Post</th>
                        <th>Tanggal Posting</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach ($tempat_kuliner as $kuliner) : ?>
                        <?php $no = 1 ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $kuliner['judul_post'] ?></td>
                            <td><?= date('Y-m-d', $kuliner['tanggal_posting']) ?></td>
                            <td><button onclick="window.location.href = '<?= base_url('admin/preview_post/') . $kuliner['id_post'] . '/' . $kuliner['id_jenis_post'] ?>'" class="btn-info mr-1">Lihat Post</button></td>
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