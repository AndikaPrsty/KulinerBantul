<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Daftar Member</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Member</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="row">
            <div class="col lg-6">
                <table class="table table-striped">
                
                    <tr>
                        <th>No</th>
                        <th>Email</th>
                        <th>Telp</th>
                    </tr>
                    <?php foreach ($users as $user) : ?>
                        <?php $no = 1; ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $user['email'] ?></td>
                            <td><?= $user['telp'] ?></td>
                            <?php $no++; ?>
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