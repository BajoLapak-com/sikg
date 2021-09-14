<div class="modal fade" id="modal-lg">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h4 class="modal-title" style="font-weight: bold;">Tambah Logbook</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php
         echo form_open('Logbook/add')?>
        <form>
          <div class="card-body">

            <div class="card-body">
              <div class="form-group">
                <div class="col-4">
                <label>Tanggal Logbook</label>
                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                  <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" />
                  <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                  </div>
                </div>
                </div>

              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Nama Kegiatan</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Event / Nama Kegiatan">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Target Yang Ingin Dicapai</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" >
     
                </textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Masalah </label>
                <textarea class="form-control" id="exampleFormControlTextarea1" >
                
                </textarea>              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="container"> 
            <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>

      
        </form>
        <?php echo form_close()?>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal"></button>
        <button type="button" class="btn btn-default bg-red" data-dismiss="modal"><i class="fa fa-times " style="color:white"></i> Tutup</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->