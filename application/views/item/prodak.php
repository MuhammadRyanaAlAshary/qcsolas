<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div> -->
    
    <!-- End of Main Content -->
    <?php if ($this->session->flashdata('success')): ?>
        <script>
            Swal.fire({
                icon: "success",
                title: "Success",
                text: "Data Berhasil Di Tambahkan!",
            });
    </script>
    <?php endif; ?>

    <?php if ($this->session->flashdata('deleted')): ?>
        <script>
            Swal.fire({
                icon: "success",
                title: "Success",
                text: "Data Produk Berhasil Di Hapus!",
            });
    </script>
    <?php endif; ?>

    <?php if ($this->session->flashdata('existing_produkJadi')): ?>
        <script>
            Swal.fire({
                icon: "error",
                title: "Duplicate",
                text: "Kode Pada 'Produk Jadi' Sebelumnya Sudah Ada!",
            });
        </script>
    <?php endif; ?>

    <?php if ($this->session->flashdata('existing_BahanBaku')): ?>
        <script>
            Swal.fire({
                icon: "error",
                title: "Duplicate",
                text: "Kode Pada 'Bahan Baku' Sebelumnya Sudah Ada!",
            });
        </script>
    <?php endif; ?>

    <?php if ($this->session->flashdata('existing_BahanKemas')): ?>
        <script>
            Swal.fire({
                icon: "error",
                title: "Duplicate",
                text: "Kode Pada 'Bahan Kemas' Sebelumnya Sudah Ada!",
            });
        </script>
    <?php endif; ?>

    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#newobatjadiModal">Add New Produk</a>
    <!-- Page Heading -->
    <!--  Divider -->
    <hr class="sidebar-divider">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-capsules" aria-hidden="true"></i> <?= $title; ?></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php if (validation_errors()) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                <?php endif; ?>
                <table class="table table-hover table-striped table-hideable table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Kode Prodak</th>
                            <th scope="col">Produk Type</th>
                            <th scope="col">Sales Type</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($produk as $p) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $p['kode_produk']; ?></td>
                                <td><?= $p['produk_type']; ?></td>
                                <td><?= $p['sales_type']; ?></td>
                                <td><?= $p['produk_name']; ?></td>
                                <td>
                                    <!-- <a href="" class="badge badge-success">Update</a> -->
                                    <a href="<?= base_url('item/hapusobatjadi/') . $p['id']; ?>" class="badge badge-danger tombol-hapus"><i class="fa fa-edit" aria-hidden="true"></i> Delete</a>
                                </td>
                            </tr>
                            <?php $i++ ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?= $this->pagination->create_links(); ?>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="newobatjadiModal" tabindex="-1" role="dialog" aria-labelledby="newobatjadiModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title fs-5" id="newobatjadiModalLabel">Add New Produk</h5>
                    </div>
                    <form action="<?= base_url('item/prodak'); ?>" method="post">
                        <div class="modal-body">
                            <input type="text" class="form-control" id="kode_produk" name="kode_produk" placeholder="Kode Produk" required>
                        </div>
                        <div class="modal-body">
                            <select class="form-control" name="produk_type" id="produk_type" required>
                                <option selected>-- Pilih Produk Type ---</option>
                                <option value="Prodak Jadi">Prodak Jadi</option>
                                <option value="Bahan Baku">Bahan Baku</option>
                                <option value="Bahan Kemas">Bahan Kemas</option>
                            </select>
                        </div>
                        <div class="modal-body">
                            <input type="text" class="form-control" id="sales_type" name="sales_type" placeholder="Sales Type" required>
                        </div>
                        <div class="modal-body">
                            <input type="text" class="form-control" id="produk_name" name="produk_name" placeholder="Produk Name" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<script src="<?= base_url(); ?>assets/js/sweetalert2.all.min.js"></script>