<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header bg-gray-light">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0" style="font-weight: bold;font-size:40px">UJIAN</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#" >Ujian</a></li>
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

                <div class="col-8"> <button style="font-size: large;" class="btn btn-primary shadow-sm p-2 mb-5 rounded" data-toggle="modal" data-target="#add">Tambah
                        Ujian</button></div>

            </div>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr style="font-size: 13px;">
                        <th>No</th>
                        <th>MAPEL(<span>Mata Pelajaran</span>)</th>
                        <th>Kelas</th>
                        <th>Rata2 Nilai</th>
                        <th>Tgl Ujian</th>
                        <th>Soal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1 ;  foreach($data as $key=>$value){?>
                    <tr style="font-size: 13px;">
                        <td style="text-align: center;"><?php echo $no++?></td>
                        <td><?=ucfirst($value->mapel)?></td>
                        <td  style="text-align: center;"><?=$value->kelas?></td>
                        <td  style="text-align: center;"><?=$value->rata_nilai?></td>
                        <td><?=$value->tgl_ujian?></td>
                        <td><a target="_blank" href="<?=base_url('ujian/readFile/'.$value->soal)?>"><?=$value->soal?></a></td>

                        <td><i class="fa fa-eye" style="color:red"></i></td>

                    </tr>
                    <?php }?>
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