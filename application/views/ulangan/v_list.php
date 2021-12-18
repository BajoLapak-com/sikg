<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Ulangan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Ulangan</a></li>
                        <li class="breadcrumb-item active">Daftar Ulangan</li>
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

                <div class="col-8"> <button class="btn btn-primary" data-toggle="modal" data-target="#add">Tambah Ulagan</button></div>

            </div>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr style="text-align:center">
                        <th>No</th>
                        <th>Mata Pelajaran</th>
                        <th>Kelas</th>
                        <th>Rata-Rata Nilai</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                   
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