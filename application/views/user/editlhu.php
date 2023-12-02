<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="<?= base_url('user/datalhuuser'); ?>"><i class="fa fa-reply" aria-hidden="true"></i></a> Edit Data LHU</h6>
        </div>
        <div class="card-body col-sm-10">
            <div class="table-responsive">
                <?= form_open_multipart('user/editlhu/' . $datalhu['id']); ?>
                <input type="hidden" id="id" name="id" value="<?= $datalhu['id']; ?>">
                <div class="form-group row">
                    <label for="kode_produk" class="col-sm-2 col-form-label">Kode Prodak</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kode_produk" name="kode_produk" value="<?= $datalhu['kode_produk'] . set_value('kode_produk'); ?>" disabled>
                        <?= form_error('kode_produk', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_lhu" class="col-sm-2 col-form-label">Nama LHU</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="nama_lhu" name="nama_lhu" disabled>
                            <?php if ($datalhu['nama_lhu'] == $datalhu['nama_lhu']) : ?>
                                    <option value="<?= $datalhu['nama_lhu']; ?>" selected><?= $datalhu['nama_lhu']; ?></option>
                            <?php endif; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenis_lhu" class="col-sm-2 col-form-label">Jenis LHU</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="jenis_lhu" name="jenis_lhu" disabled>
                            <?php if ($datalhu['jenis_lhu'] == $datalhu['jenis_lhu']) : ?>
                                <option value="<?= $datalhu['jenis_lhu']; ?>" selected><?= $datalhu['jenis_lhu']; ?></option>
                            <?php endif; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nomer_analsia" class="col-sm-2 col-form-label">Nomer Analisa</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nomer_analisa" name="nomer_analisa" required>
                        <?= form_error('nomer_analisa', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nomer_batch" class="col-sm-2 col-form-label">Nomer Batch</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nomer_batch" name="nomer_batch" required>
                        <?= form_error('nomer_batch', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exp_date" class="col-sm-2 col-form-label">Exp Date</label>
                    <div class="col-sm-3">
                        <input type="date" class="form-control" id="exp_date" name="exp_date" required>
                        <?= form_error('exp_date', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tgl_produksi" class="col-sm-2 col-form-label">Tgl Produksi</label>
                    <div class="col-sm-3">
                        <input type="date" class="form-control" id="tgl_produksi" name="tgl_produksi" required>
                        <?= form_error('tgl_produksi', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tgl_sampling" class="col-sm-2 col-form-label">Tgl Sampling</label>
                    <div class="col-sm-3">
                        <input type="date" class="form-control" id="tgl_sampling" name="tgl_sampling" required>
                        <?= form_error('tgl_sampling', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="besaran_batch" class="col-sm-2 col-form-label">Besaran Batch</label>
                    <div class="col-sm-5">
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" id="besaran_batch" name="besaran_batch" required>
                            <select class="form-control" id="satuan" name="satuan">
                                <option value="">---Satuan---</option>
                                <?php foreach ($satuan as $s) : ?>
                                    <option value="<?= $s['satuan']; ?>"><?= $s['satuan']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <?= form_error('besaran_batch', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="file_lhu" class="col-sm-2 col-form-label">File LHU</label>
                    <div class="col-sm-10">
                        <div class="col-sm-9">
                            <input type="file" class="custom-file-input" id="file_lhu" name="file_lhu" disabled>
                            <label class="custom-file-label" for="file_lhu"><?= $datalhu['file_lhu']; ?></label>
                        </div>
                    </div>
                </div>
                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" name="editlhu" class="btn btn-primary">Edit</button>
                    </div>
                </div>
                </form>

            </div>
        </div>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->