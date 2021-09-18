<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">UJIAN</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Ujian</a></li>
                        <li class="breadcrumb-item active">Daftar Ujian</li>
                    </ol>
                </div><!-- /.col -->


            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="card">
        <div class="card-header">
            <div class="row">

                <div class="col-8"> <button class="btn btn-primary" data-toggle="modal" data-target="#add">Tambah Ujian</button></div>

            </div>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Mata Pelajaran</th>
                        <th>Kelas</th>
                        <th>nilai</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($ujian as $key => $value) { ?>
                        <tr class="bg-white">
                            <td><?= $no++ ?></td>
                            <td><?= $value->id_mata_pelajaran ?></td>
                            <td><?= $value->id_kelas ?></td>
                            <td>
                                <a class="bg-primary rounded-circle" data-toggle="modal" data-target="#nilai" href=""><i class="fa fa-edit bg-primary m-2"></i></a> <?= $value->rata_nilai ?>
                            </td>
                            <td>
                                <a class="bg-primary rounded-circle" data-toggle="modal" data-target="#edit" href=""><i class="fa fa-edit bg-primary m-2"></i></a>
                                <a class="bg-light rounded-circle" href="<?= $value->file ?>"><i class="fa fa-eye rounded-circle m-2"></i></a>
                                <a class="bg-danger rounded-circle" href=""><i class="fa fa-trash-alt bg-danger rounded-circle m-2"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php require_once('v_add.php') ?>
<?php require_once('v_edit.php') ?>