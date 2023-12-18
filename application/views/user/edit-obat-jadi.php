<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="<?= base_url('user/datalhuuser'); ?>"><i class="fa fa-reply" aria-hidden="true"></i></a> Select File Yang Akan Di Update</h6>
        </div>
        <div class="card-body col-sm-10">
            <div class="table-responsive">
                <?= form_open_multipart('user/editLhuObatJadi/' . $datalhu['id']); ?>
                <input type="text" name="id" value="<?= $datalhu['id'] ?>" hidden>
                <input type="text" id="nomer_batch" name="nomer_batch" value="<?= $datalhu['nomer_batch'] ?>" hidden>
                <input type="text" id="nomer_analisa" name="nomer_analisa" value="<?= $datalhu['nomer_analisa'] ?>" hidden>
                <input type="text" id="exp_date" name="exp_date" value="<?= $datalhu['exp_date'] ?>" hidden>
                <input type="text" id="tgl_produksi" name="tgl_produksi" value="<?= $datalhu['tgl_produksi'] ?>" hidden>
                <input type="text" id="tgl_sampling" name="tgl_sampling" value="<?= $datalhu['tgl_sampling'] ?>" hidden>
                <input type="text" id="besaran_batch" name="besaran_batch" value="<?= $datalhu['besaran_batch'] ?>" hidden>
                <input type="text" id="satuan" name="satuan" value="<?= $datalhu['satuan'] ?>" hidden>
                <input type="text" id="id_tb_pdf_book" name="id_tb_pdf_book" value="<?= $datalhu['id_tb_pdf_book'] ?>" hidden>

                <div class="form-group row">
                    <label for="file_lhu" class="col-sm-2 col-form-label">File LHU</label>
                    <div class="col-sm-10">
                        <div class="col-sm-9">
                        <input type="file" class="custom-file-input" id="file_lhu" name="file_lhu" accept="application/pdf, application/vnd.openxmlformats-officedocument.wordprocessingml.document, image/png, image/png, image/jpeg">
                            <label class="custom-file-label" for="file_lhu">Choose File...</label>
                        </div>
                        <small>* File Harus Berupa format .pdf, .word, .jpg, .jpeg, .png (MAX SIZE: 10MB)</small>
                    </div>
                </div>

                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" name="editLhuObatJadi" class="btn btn-primary"><i class="fa fa-print" aria-hidden="true"></i> Tambah</button>
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