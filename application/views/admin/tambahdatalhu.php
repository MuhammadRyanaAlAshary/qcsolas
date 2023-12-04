<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="<?= base_url('admin/datalhu'); ?>"><i class="fa fa-reply" aria-hidden="true"></i></a> Tambah Data LHU</h6>
        </div>
        <div class="card-body col-sm-10">
            <div class="table-responsive">
                <?= form_open_multipart('admin/tambahlhu'); ?>
                <div class="form-group row">
                    <label for="jenis_lhu" class="col-sm-2 col-form-label">Jenis LHU</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="jenis_lhu" name="jenis_lhu">
                            <option value="">---Select Jenis LHU---</option>
                            <?php foreach ($jenislhu as $jl) : ?>
                                <option value="<?= $jl['jenis_lhu']; ?>"><?= $jl['jenis_lhu']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_lhu" class="col-sm-2 col-form-label">Nama LHU</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="nama_lhu" name="nama_lhu">
                            <option value="">---Select Nama LHU---</option>
                            <?php foreach ($produk as $p) : ?>
                                <option value="<?= $p['produk_name']; ?>"><?= $p['produk_name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="file_lhu" class="col-sm-2 col-form-label">File LHU</label>
                    <div class="col-sm-10">
                        <div class="col-sm-9">
                            <input type="file" class="custom-file-input" id="file_lhu" name="file_lhu">
                            <label class="custom-file-label" for="file_lhu">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kode_produk" class="col-sm-2 col-form-label">Kode produk</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kode_produk" name="kode_produk">
                        <?= form_error('kode_produk', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" name="tambahlhu" class="btn btn-primary">Tambah</button>
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