<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">

      <div class=" row mt-3">
        <?php echo form_open('timeline/post')?>
        <div class="col-sm-6 mb-1">
          <!-- textarea -->
          <div class="form-group">
            <label>Isi Note</label>
            <textarea class="form-control" rows="2" placeholder="masukan note"></textarea>
          </div>
        </div><!-- /.row -->
        <div class="col-sm-4 "><br><br>
          <button class="btn btn-primary btn-sm" type="submit">Buat Note <i class="fa fa-plus"></i></button>
        </div>
        <?php echo form_close(); ?>
      </div>

    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->

  <div class="p-1">
    <div class="d-flex">
    <div class="col-md-3 mt-2">
      <div class="card bg-gradient-warning">
        <div class="card-header">
          <h7 class="card-title" style="font-size: 15px; font-weight: bold;">tgl</h7>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool bg-warning" data-card-widget="collapse">
              <i class="fas fa-trash "style="color:red" ></i>
            </button>
          </div>
          <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          The body of the card
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>

    </div>
    <!-- /.col -->

    <!-- /.card-header -->

    <!-- /.card-body -->
  </div>
  <!-- /.card -->

  <!-- /.content -->
</div>
<!-- /.content-wrapper -->



















<!-- /.content -->