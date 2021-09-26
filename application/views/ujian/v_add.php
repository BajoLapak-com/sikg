<div class="modal fade" id="add">
    <?php echo form_open('/ujian/postUjian') ?>
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
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tipe" checked="" value="0">
                            <label class="form-check-label">Ujian</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tipe"  value="1">
                            <label class="form-check-label">Ulangan</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <?php foreach ($select as $key1 => $name) { ?>
                            <label><?= $key1 ?></label>
                            <select class="form-control" name="<?= str_replace(" ", "", $key1) ?>">
                                <?php foreach ($select[$key1] as $key2 => $option) { ?>
                                    <option value="1"><?= $option ?></option>
                                <?php } ?>
                            </select>
                        <?php } ?>

                        <label>Tanggal Ujian</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input name="tgl_ujian" type="text" class="form-control datetimepicker-input" data-target="#reservationdate">
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>

                        <label for="exampleInputFile">Target </label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input name="file" type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
    <?php echo form_close() ?>
</div>