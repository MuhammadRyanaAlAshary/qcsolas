<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="<?= base_url('admin/datalhu'); ?>"><i class="fa fa-reply" aria-hidden="true"></i></a> Edit Data LHU</h6>
        </div>
        <div class="card-body col-sm-10">
            <div class="table-responsive">
                <?= form_open_multipart('admin/editlhu/' . $datalhu['id_tb_pdf_book']); ?>
                <input type="hidden" id="id" name="id" value="<?= $datalhu['id_tb_pdf_book']; ?>">
                <input type="hidden" name="jenis_lhu" value="<?= $datalhu['jenis_lhu']; ?>">
                <input type="hidden" name="kode_produk" value="<?= $datalhu['id']; ?>">
                <div class="form-group row">
                    <label for="file_lhu_pdf" class="col-sm-2 col-form-label">File LHU PDF</label>
                    <div class="col-sm-10">
                        <div class="col-sm-9">
                            <input type="file" class="custom-file-input" id="file_lhu_pdf" name="file_lhu_pdf" accept="application/pdf">
                            <label class="custom-file-label" for="file_lhu_pdf"><?= $datalhu['file_lhu_pdf'] ?></label>
                        </div>
                        <small>* File Harus Berupa format .pdf (MAX SIZE: 10MB)</small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="file_lhu_word" class="col-sm-2 col-form-label">File LHU WORD</label>
                    <div class="col-sm-10">
                        <div class="col-sm-9">
                            <input type="file" class="custom-file-input" id="file_lhu_word" name="file_lhu_word" accept="application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                            <label class="custom-file-label" for="file_lhu_word"><?= $datalhu['file_lhu_word'] ?></label>
                        </div>
                        <small>* File Harus Berupa format .word (MAX SIZE: 10MB)</small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="file_lhu_gambar" class="col-sm-2 col-form-label">File LHU Gambar</label>
                    <div class="col-sm-10">
                        <div class="col-sm-9">
                            <input type="file" class="custom-file-input" id="file_lhu_gambar" name="file_lhu_gambar" accept="image/png, image/png, image/jpeg">
                            <label class="custom-file-label" for="file_lhu_gambar"><?= $datalhu['file_lhu_gambar'] ?></label>
                        </div>
                        <small>* File Harus Berupa format .JPG, .PNG, .JPEG (MAX SIZE: 5MB)</small>
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