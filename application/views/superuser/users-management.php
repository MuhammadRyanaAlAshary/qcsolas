<!-- Begin Page Content -->
<div class="container-fluid">
<!-- <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div> -->
    <?php if ($this->session->flashdata('flash')) : ?>
    <script>
        Swal.fire({
            icon: "success",
            title: "Success",
            text: "Data Users Berhasil Di Tambahkan!",
        });
    </script>
    <?php endif; ?>
    <a href="/qcsolas/superuser/addUser" class="btn btn-primary">Add user</a>
    <!-- Page Heading -->
    <!--  Divider -->
    <hr class="sidebar-divider">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-user-tie" aria-hidden="true"></i> <?= $title; ?></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?= form_error('role', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                <table class="table table-hover table-striped table-hideable table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Created_At</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($data_user as $r) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $r['name']; ?></td>
                                <td><?= $r['email']; ?></td>
                                <td><?= $r['role']; ?></td>
                                <td><?= $r['date_created']; ?></td>
                                <td>
                                    <a href="<?= base_url('superuser/deleteUser/') . $r['id']; ?>" class="badge badge-danger tombol-hapus">Delete</a>
                                </td>
                            </tr>
                            <?php $i++ ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<script src="<?= base_url(); ?>assets/js/sweetalert2.all.min.js"></script>
