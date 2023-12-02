<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
        <!-- <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Menu<strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div> -->
    <?php endif; ?>
    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal">Add New Menu</a>
    <!-- Page Heading -->
    <!--  Divider -->
    <hr class="sidebar-divider">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-folder" aria-hidden="true"></i> <?= $title; ?></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                <table class="table table-hover table-striped table-hideable table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Menu
                            </th>
                            <th scope="col">Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($menu as $m) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $m['menu']; ?></td>
                                <td>
                                    <a href="" class="badge badge-success">Edit</a>
                                    <a href="<?= base_url('menu/hapus/') . $m['id']; ?>" class="badge badge-danger tombol-hapus">Delete</a>
                                </td>
                            </tr>
                            <?php $i++ ?>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot class="footer-restore-columns">
                        <tr>
                            <th colspan="3"><a class="restore-columns" href="#">Some columns hidden - click to show all</a></th>
                        </tr>
                    </tfoot>
                </table>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<!-- Modal -->
<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5" id="newMenuModalLabel">Add New Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('menu'); ?>" method="post">
                <div class="modal-body">
                    <input type="text" class="form-control" id="menu" name="menu" placeholder="Menu Nama">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>