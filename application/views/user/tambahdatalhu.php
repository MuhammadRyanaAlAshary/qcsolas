<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="<?= base_url('user/datalhuuser'); ?>"><i class="fa fa-reply" aria-hidden="true"></i></a> Select Data yang akan di Print</h6>
        </div>
        <div class="card-body col-sm-10">
            <div class="table-responsive">
                <?= form_open_multipart('user/tambahlhu'); ?>
                <div class="form-group row">
                    <label for="kode_produk" class="col-sm-2 col-form-label">Nama Produk</label>
                    <div class="col-sm-10">
                        <select class="selectpicker form-control" data-live-search="true" id="kode_produk" name="id_tb_pdf_book" required>
                            <option value="">[Kode produk] - [Nama Produk] - [Jenis lhu]</option>
                            <?php foreach ($dataLhu as $data) : ?>
                                <option value="<?= $data['id']; ?>">[ <?= $data['kode_produk']; ?> ] - <?= $data['produk_name']; ?> - <?= $data['jenis_lhu']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('kode_produk', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nomer_analisa" class="col-sm-2 col-form-label">Nomer Analisa</label>
                    <div class="col-sm-10">
                        <select class="selectpicker form-control" data-live-search="true" id="nomer_analisa" name="nomer_analisa" required>
                            <option value="">[Nomer Analisa] - [Nomer Batch] - [EXP DATE]</option>
                            <?php foreach ($dataNomerAnalisa as $dataNomerAnalisa) : ?>
                                <option value="<?= $dataNomerAnalisa['id']; ?>">[ <?= $dataNomerAnalisa['nomer_analisa']; ?> ] - [ <?= $dataNomerAnalisa['nomer_batch']; ?> ] - [ <?= $dataNomerAnalisa['exp_date']; ?> ]</option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('nomer_analisa', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tgl_produksi" class="col-sm-2 col-form-label">Tanggal Produksi</label>
                    <div class="col-sm-3">
                        <input type="date" class="form-control" id="tgl_produksi" name="tgl_produksi" required>
                        <?= form_error('tgl_produksi', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="tgl_sampling" class="col-sm-2 col-form-label">Tanggal Sampling</label>
                    <div class="col-sm-3">
                        <input type="date" class="form-control" id="tgl_sampling" name="tgl_sampling" required>
                        <?= form_error('tgl_sampling', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="besaran_batch" class="col-sm-2 col-form-label">Besaran Batch</label>
                    <div class="col-sm-2">
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" id="besaran_batch" name="besaran_batch" required>
                        </div>
                    </div>
                    <div class="col-sm-1,5">
                        <div class="input-group mb-3">
                            <select class="selectpicker form-control" data-live-search="true" id="satuan" name="satuan" required>
                                <option value="">Satuan</option>
                                <?php foreach ($satuan as $s) : ?>
                                    <option value="<?= $s['satuan']; ?>"><?= $s['satuan']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <?= form_error('besaran_batch', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" name="editlhu" class="btn btn-primary"><i class="fa fa-print" aria-hidden="true"></i> Tambah</button>
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