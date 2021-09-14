<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Ujian</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Ujian</a></li>
                        <li class="breadcrumb-item active">Daftar Ujian</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <form>
                <div class="card-body">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-primary">Ujian</button>
                        <button type="button" class="btn btn-primary">Ulangan</button>
                    </div>
                    <div class="form-group">
                        <?php foreach ($select as $key1 => $name) { ?>
                            <label><?= $key1 ?></label>
                            <select class="form-control">
                                <?php foreach ($select[$key1] as $key2 => $option) { ?>
                                    <option><?= $option ?></option>
                                <?php } ?>
                            </select>
                        <?php } ?>

                        <label>Tanggal Ujian</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate">
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>

                        <label for="exampleInputFile">Target </label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.content-wrapper -->
<?php require_once('v_add.php') ?>