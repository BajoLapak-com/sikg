 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1 class="m-0">LOOGBOOK</h1>
         </div><!-- /.col -->
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="#">Loogbook</a></li>
             <li class="breadcrumb-item active">Daftar Loogbook</li>
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

         <div class="col-8"> <button class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">Tambah Logbook</button></div>

       </div>
     </div>

     <!-- /.card-header -->
     <div class="card-body">
       <table id="example1" class="table table-bordered table-striped">
         <thead>
           <tr>
             <th>No</th>
             <th>Event</th>
             <th>Target</th>
             <th>Masalah</th>
             <th>Deadline</th>
             <th>Aksi</th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <td>1</td>
             <td>1</td>
             <td>1</td>
             <td>1</td>
             <td>1</td>
             <td>1</td>
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
 <!-- /.modal -->
 <?php require_once('v_add.php') ?>