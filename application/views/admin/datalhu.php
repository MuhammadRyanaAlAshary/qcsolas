<!-- Begin Page Content -->
<div class="container-fluid">
    <?php if ($this->session->flashdata('flash')) : ?>
    <script>
        Swal.fire({
            icon: "success",
            title: "Success",
            text: "Data LHU Berhasil Di Tambahkan",
        });
    </script>
    <?php endif; ?>
    <i class="icofont-angle-double-left"></i>
    <!-- Page Heading -->
    <link href="<?= base_url('assets/'); ?>css/css-checkbox.css" rel="stylesheet">

    <div class="row mt-3">
        <div class="col-md-6"><a href="<?= base_url('admin/tambahlhu/'); ?>" class="btn btn-primary btn-md"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</a></div>
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
                            <th scope="col">Kode Produk
                            </th>
                            <th scope="col">Nama Produk
                            </th>
                            <th scope="col">Jenis Lhu
                            </th>
                            <th scope="col">Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($datalhu as $dl) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $dl['kode_produk']; ?></td>
                                <td><?= $dl['produk_name']; ?></td>
                                <td><?= $dl['jenis_lhu']; ?></td>
                                <td>
                                    <a href="<?= base_url('./assets/file_lhu/lhu_admin/' . $dl['file_lhu']); ?>" target="_blank" class="badge badge-success"><i class="fa fa-print" aria-hidden="true"></i> LHU</a>
                                    <a href="<?= base_url('admin/editlhu/') . $dl['id_tb_pdf_book']; ?>" class="badge badge-warning"><i class="fa fa-edit" aria-hidden="true"></i> Update</a>
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