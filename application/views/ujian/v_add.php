<div class="modal fade" id="add">
    <?php echo form_open_multipart('/ujian/post') ?>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title" style="font-weight: bold;">Tambah Ujian</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">

                    <div class="form-group">

                        <label for="">Mata Pelajaran</label>
                        <input type="text" name="mapel" class="form-control"><br>
                        <label for="">Jurusan</label>
                        <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger"
                            name="jurusan" id="">

                            <option value="1" selected="selected">Multimedia</option>
                            <option value="2">Menjahit</option>
                        </select>
                        <br>
                        <label for="">Kelas </label>
                        <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger"
                            name="kelas" id="">

                            <option value="1" selected="selected">1</option>
                            <option value="2">2</option>
                            <option value="2">3</option>
                        </select>
                        <br>
                        <label>Tanggal Ujian</label>
                        <div class="input-group date col-md-3" id="reservationdate" data-target-input="nearest">
                            <input name="tgl_ujian" type="text" class="form-control datetimepicker-input"
                                data-target="#reservationdate">
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>

                        <label for="exampleInputFile">File Ujian</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="soal">
                                <label class="custom-file-label" for="customFile">Upload Soal</label>
                            </div>

                        </div>
                    </div>
                </div>
                                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                </div>
            </div>

        </div>
    </div>
    <?php echo form_close() ?>
</div>