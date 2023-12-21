<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="<?= base_url('user/datalhuuser'); ?>"><i class="fa fa-reply" aria-hidden="true"></i></a> Select Data yang akan di Print</h6>
        </div>
        <div class="card-body col-sm-10">
            <div class="table-responsive">
                <?= form_open_multipart('user/addBK'); ?>
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
                    <label for="tgl_kedatangan" class="col-sm-2 col-form-label">Tanggal Kedatangan</label>
                    <div class="col-sm-3">
                        <input type="date" class="form-control" id="tgl_kedatangan" name="tgl_kedatangan" required>
                        <?= form_error('tgl_kedatangan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_produsen" class="col-sm-2 col-form-label">Nama Produsen</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_produsen" name="nama_produsen" required>
                        <?= form_error('nama_produsen', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_supplier" class="col-sm-2 col-form-label">Nama Supplier</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_supplier" name="nama_supplier" required>
                        <?= form_error('nama_supplier', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah_bahan" class="col-sm-2 col-form-label">Jumlah Bahan</label>
                    <div class="col-sm-2">
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" id="jumlah_bahan" name="jumlah_bahan" required>
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
                        <?= form_error('satuan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                <label for="file_lhu" class="col-sm-2 col-form-label">File LHU PDF</label>
                    <div class="col-sm-10">
                        <div class="col-sm-9">
                            <input type="file" class="custom-file-input" id="file_lhu" name="file_lhu" accept="application/pdf" required>
                            <label class="custom-file-label" for="file_lhu">Choose file</label>
                        </div>
                        <small>* File Harus Berupa format .pdf (MAX SIZE: 10MB)</small>
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