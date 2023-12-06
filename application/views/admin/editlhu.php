<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="<?= base_url('admin/datalhu'); ?>"><i class="fa fa-reply" aria-hidden="true"></i></a> Edit Data LHU</h6>
        </div>
        <div class="card-body col-sm-10">
            <div class="table-responsive" style="height:550px;">
                <?= form_open_multipart('admin/editlhu/' . $datalhu['id_tb_pdf_book']); ?>
                <input type="hidden" id="id" name="id" value="<?= $datalhu['id_tb_pdf_book']; ?>">
                <div class="form-group row">
                    <label for="jenis_lhu" class="col-sm-2 col-form-label">Jenis LHU</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="jenis_lhu" name="jenis_lhu">
                            <option value="">---Select Jenis LHU---</option>
                            <?php foreach ($jenislhu as $jl) : ?>
                                <?php if ($jl['jenis_lhu'] == $datalhu['jenis_lhu']) : ?>
                                    <option value="<?= $jl['jenis_lhu']; ?>" selected><?= $jl['jenis_lhu']; ?></option>
                                <?php else : ?>
                                    <option value="<?= $jl['jenis_lhu']; ?>"><?= $jl['jenis_lhu']; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_produk" class="col-sm-2 col-form-label">Nama Produk</label>
                    <div class="col-sm-10">
                        <select class="form-control selectpicker" data-live-search="true" id="kode_produk" name="kode_produk">
                            <option value="">--- Select Nama LHU ---</option>
                            <?php foreach ($produk as $p) : ?>
                                <?php if ($p['produk_name'] == $datalhu['produk_name']) : ?>
                                          <option value="<?= $p['id']; ?>" selected>[ <?= $p['kode_produk']; ?> ] - <?= $p['produk_name'] ?></option>
                                <?php else : ?>
                                    <option value="<?= $p['id']; ?>"> [ <?= $p['kode_produk']; ?> ] - <?= $p['produk_name']; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="file_lhu" class="col-sm-2 col-form-label">File LHU</label>
                    <div class="col-sm-10">
                        <div class="col-sm-9">
                            <input type="file" class="custom-file-input" id="file_lhu" name="file_lhu">
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