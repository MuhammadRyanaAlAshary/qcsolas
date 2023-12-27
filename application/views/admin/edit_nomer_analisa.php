<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="<?= base_url('admin/nomer_analisa'); ?>"><i class="fa fa-reply" aria-hidden="true"></i></a> Tambah Nomer Analisa</h6>
        </div>
        <div class="card-body col-sm-10">
            <div class="table-responsive">
                <?= form_open_multipart('admin/edit_nomer_analisa/' . $nomer_analisa['id']); ?>
                <div class=" form-group row">
                    <label for="nomer_analisa" class="col-sm-2 col-form-label">Nomer Analisa</label>
                    <div class="col-sm-10">
                        <input type="text" id="nomer_analisa" name="nomer_analisa" class="form-control" placeholder="Nomer Analisa" value="<?= $nomer_analisa['nomer_analisa']; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nomer_batch" class="col-sm-2 col-form-label">Nomer Batch</label>
                    <div class="col-sm-10">
                        <input type="text" id="nomer_batch" name="nomer_batch" class="form-control" placeholder="Nomer Batch" value="<?= $nomer_analisa['nomer_batch']; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exp_date" class="col-sm-2 col-form-label">EXP Date</label>
                    <div class="col-sm-10">
                        <input type="date" id="exp_date" name="exp_date" class="form-control" value="<?= $nomer_analisa['exp_date']; ?>" required>
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