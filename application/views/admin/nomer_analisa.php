<!-- Begin Page Content -->
<div class="container-fluid">
    <?php if ($this->session->flashdata('flash')) : ?>
    <script>
        Swal.fire({
            icon: "success",
            title: "Success",
            text: "Data Nomer Analisa Berhasil Di Tambahkan",
        });
    </script>
    <?php endif; ?>
    <?php if ($this->session->flashdata('existingNomerAnalisa')) : ?>
    <script>
        Swal.fire({
            icon: "error",
            title: "Duplicate",
            text: "Nomer Analisa Sudah Ada!",
        });
    </script>
    <?php endif; ?>
    
    <?php if ($this->session->flashdata('existingNomerBatch')) : ?>
    <script>
        Swal.fire({
            icon: "error",
            title: "Duplicate",
            text: "Nomer Batch Sudah Ada!",
        });
    </script>
    <?php endif; ?>

    <?php if ($this->session->flashdata('delete')) : ?>
    <script>
        Swal.fire({
            icon: "success",
            title: "Hapus",
            text: "Data Berhasil Di Hapus!",
        });
    </script>
    <?php endif; ?>
    <i class="icofont-angle-double-left"></i>
    <!-- Page Heading -->
    <link href="<?= base_url('assets/'); ?>css/css-checkbox.css" rel="stylesheet">

    <div class="row mt-3">
        <div class="col-md-6"><a href="<?= base_url('admin/tambah_nomer_analisa/'); ?>" class="btn btn-primary btn-md"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</a></div>
    </div>
    <!--  Divider -->
    <hr class="sidebar-divider">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-database" aria-hidden="true"></i> <?= $title; ?></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nomer Analisa</th>
                            <th scope="col">Nomer Batch</th>
                            <th scope="col">EXP Date</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($datalhu as $dl) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $dl['nomer_analisa']; ?></td>
                                <td><?= $dl['nomer_batch']; ?></td>
                                <td><?= $dl['exp_date']; ?></td>
                                <td>
                                    <a href="<?= base_url('admin/edit_nomer_analisa/') . $dl['id']; ?>" class="badge badge-warning"><i class="fa fa-edit" aria-hidden="true"></i> Update</a>
                                    <!-- <a href="<?= base_url('admin/delete_nomer_analisa/') . $dl['id']; ?>" class="badge badge-danger"><i class="fa fa-edit" aria-hidden="true"></i> Delete</a> -->
                                </td>
                            </tr>
                            <?php $i++ ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?= $this->pagination->create_links(); ?>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->