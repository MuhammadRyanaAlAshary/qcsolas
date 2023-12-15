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
                <div class=" form-group row">
                    <label for="jenis_lhu" class="col-sm-2 col-form-label">Jenis LHU</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="jenis_lhu" name="jenis_lhu" required>
                            <option value="">--- Select Jenis LHU ---</option>
                            <?php foreach ($jenislhu as $jl) : ?>
                                <option value="<?= $jl['jenis_lhu']; ?>"><?= $jl['jenis_lhu']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kode_produk" class="col-sm-2 col-form-label">Nama Produk</label>
                    <div class="col-sm-10">
                        <select class="form-control selectpicker" data-live-search="true" id="kode_produk" name="kode_produk" required>
                            <option value="">--- Select Kode Produk - Nama LHU ---</option>
                            <?php foreach ($produk as $data) : ?>
                                <option value="<?= $data['id']; ?>">[ <?= $data['kode_produk']; ?> ] - <?= $data['produk_name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="file_lhu_pdf" class="col-sm-2 col-form-label">File LHU PDF</label>
                    <div class="col-sm-10">
                        <div class="col-sm-9">
                            <input type="file" class="custom-file-input" id="file_lhu_pdf" name="file_lhu_pdf" accept="application/pdf">
                            <label class="custom-file-label" for="file_lhu_pdf">Choose file</label>
                        </div>
                        <small>* File Harus Berupa format .pdf (MAX SIZE: 10MB)</small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="file_lhu_word" class="col-sm-2 col-form-label">File LHU WORD</label>
                    <div class="col-sm-10">
                        <div class="col-sm-9">
                            <input type="file" class="custom-file-input" id="file_lhu_word" name="file_lhu_word" accept="application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                            <label class="custom-file-label" for="file_lhu_word">Choose file</label>
                        </div>
                        <small>* File Harus Berupa format .word (MAX SIZE: 10MB)</small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="file_lhu_gambar" class="col-sm-2 col-form-label">File LHU Gambar</label>
                    <div class="col-sm-10">
                        <div class="col-sm-9">
                            <input type="file" class="custom-file-input" id="file_lhu_gambar" name="file_lhu_gambar" accept="image/png, image/png, image/jpeg">
                            <label class="custom-file-label" for="file_lhu_gambar">Choose file</label>
                        </div>
                        <small>* File Harus Berupa format .JPG, .PNG, .JPEG (MAX SIZE: 5MB)</small>
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