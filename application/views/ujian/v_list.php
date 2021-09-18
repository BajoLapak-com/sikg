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
                         <th>Soal</th>
                         <th>Aksi</th>
                     </tr>
                 </thead>
                 <tbody>
                     <tr>
                         <td>No</td>
                         <td>Mata Pelajaran</td>
                         <td>Kelas</td>
                         <td>Soal</td>
                         <td>
                         
                             <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                         <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                     </svg></button>
                                 <button type="button" class="btn btn-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                         <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                         <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                     </svg></button>
                                 <button type="button" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                         <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                     </svg></button>
                             </div>
                         </td>
                     </tr>
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