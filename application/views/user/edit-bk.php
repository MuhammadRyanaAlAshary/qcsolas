<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="<?= base_url('user/datalhuuser'); ?>"><i class="fa fa-reply" aria-hidden="true"></i></a> Select Data yang akan di Print</h6>
        </div>
        <div class="card-body col-sm-10">
            <div class="table-responsive">
                <?= form_open_multipart('user/editBK/' . $datalhu['id']); ?>
                <input type="text" name="id" value="<?= $datalhu['id'] ?>" hidden>
                <input type="text" name="id_tb_pdf_book" value="<?= $datalhu['id_tb_pdf_book'] ?>" hidden>
                <input type="text" id="nomer_analisa" name="nomer_analisa" value="<?= $datalhu['nomer_analisa'] ?>" hidden>
                <input type="text" id="nomer_batch" name="nomer_batch" value="<?= $datalhu['nomer_batch'] ?>" hidden>
                <input type="date" id="exp_date" name="exp_date" value="<?= $datalhu['exp_date'] ?>" hidden>
                <input type="date" id="tanggal_kedatangan" name="tanggal_kedatangan" value="<?= $datalhu['tgl_kedatangan'] ?>" hidden>
                <input type="text" id="nama_produsen" name="nama_produsen" value="<?= $datalhu['nama_produsen'] ?>" hidden>
                <input type="text" id="nama_supplier" name="nama_supplier" value="<?= $datalhu['nama_supplier'] ?>" hidden>
                <input type="number" id="jumlah_bahan" name="jumlah_bahan" value="<?= $datalhu['jumlah_bahan'] ?>" hidden>

                <div class="form-group row">
                    <label for="file_lhu_skunder" class="col-sm-2 col-form-label">File LHU Skunder</label>
                    <div class="col-sm-10">
                        <div class="col-sm-9">
                        <input type="file" class="custom-file-input" id="file_lhu_skunder" name="file_lhu_skunder" accept="application/pdf, application/vnd.openxmlformats-officedocument.wordprocessingml.document, image/png, image/png, image/jpeg" required>
                            <label class="custom-file-label" for="file_lhu_skunder"><?= $datalhu['file_lhu_skunder']; ?></label>
                        </div>
                        <small>* File Harus Berupa format .pdf, .word, .jpg, .jpeg, .png (MAX SIZE: 10MB)</small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="file_lhu_primer" class="col-sm-2 col-form-label">File LHU Primer</label>
                    <div class="col-sm-10">
                        <div class="col-sm-9">
                        <input type="file" class="custom-file-input" id="file_lhu_primer" name="file_lhu_primer" accept="application/pdf, application/vnd.openxmlformats-officedocument.wordprocessingml.document, image/png, image/png, image/jpeg" required>
                            <label class="custom-file-label" for="file_lhu_primer"><?= $datalhu['file_lhu_primer'] ?></label>
                        </div>
                        <small>* File Harus Berupa format .pdf, .word, .jpg, .jpeg, .png (MAX SIZE: 10MB)</small>
                    </div>
                </div>

                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" name="editBK" class="btn btn-primary"><i class="fa fa-print" aria-hidden="true"></i> Tambah</button>
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