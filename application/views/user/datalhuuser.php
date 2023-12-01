<!-- Begin Page Content -->
<div class="container-fluid">
    <i class="icofont-angle-double-left"></i>

    <!-- Page Heading -->
	<div class="row mt-3">
		<div class="col-md-6"><a href="<?= base_url('user/tambahlhu/'); ?>" class="btn btn-primary btn-md"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</a></div>
	</div>

    <!--  Divider -->
    <hr class="sidebar-divider">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-database" aria-hidden="true"></i> <?= $title; ?></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?= $this->session->flashdata('message'); ?>
                <table class="table table-hover table-striped table-hideable table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <?php if (empty($datalhu)) : ?>
                        <div class="alert alert-danger" role="alert">
                            Data LHU tidak ditemukan.
                        </div>
                    <?php endif; ?>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">K.Prof
                                <button class="pull-right btn btn-default btn-condensed hide-column" data-toggle="tooltip" data-placement="bottom" title="Hide Column">
                                    <i class="fa fa-eye-slash"></i>
                                </button>
                            </th>
                            <th scope="col">Nama Lhu
                                <button class="pull-right btn btn-default btn-condensed hide-column" data-toggle="tooltip" data-placement="bottom" title="Hide Column">
                                    <i class="fa fa-eye-slash"></i>
                                </button>
                            </th>
                            <th scope="col">Jenis Lhu
                                <button class="pull-right btn btn-default btn-condensed hide-column" data-toggle="tooltip" data-placement="bottom" title="Hide Column">
                                    <i class="fa fa-eye-slash"></i>
                                </button>
                            </th>
                            <th scope="col">N.Analisa
                                <button class="pull-right btn btn-default btn-condensed hide-column" data-toggle="tooltip" data-placement="bottom" title="Hide Column">
                                    <i class="fa fa-eye-slash"></i>
                                </button>
                            </th>
                            <th scope="col">N.Batch
                                <button class="pull-right btn btn-default btn-condensed hide-column" data-toggle="tooltip" data-placement="bottom" title="Hide Column">
                                    <i class="fa fa-eye-slash"></i>
                                </button>
                            </th>
                            <th scope="col">Exp.Date
                                <button class="pull-right btn btn-default btn-condensed hide-column" data-toggle="tooltip" data-placement="bottom" title="Hide Column">
                                    <i class="fa fa-eye-slash"></i>
                                </button>
                            </th>
                            <th scope="col">Tgl.Prod
                                <button class="pull-right btn btn-default btn-condensed hide-column" data-toggle="tooltip" data-placement="bottom" title="Hide Column">
                                    <i class="fa fa-eye-slash"></i>
                                </button>
                            </th>
                            <th scope="col">Tgl.Sampling
                                <button class="pull-right btn btn-default btn-condensed hide-column" data-toggle="tooltip" data-placement="bottom" title="Hide Column">
                                    <i class="fa fa-eye-slash"></i>
                                </button>
                            </th>
                            <th scope="col">Qty
                                <button class="pull-right btn btn-default btn-condensed hide-column" data-toggle="tooltip" data-placement="bottom" title="Hide Column">
                                    <i class="fa fa-eye-slash"></i>
                                </button>
                            </th>
                            <th scope="col">Sat
                                <button class="pull-right btn btn-default btn-condensed hide-column" data-toggle="tooltip" data-placement="bottom" title="Hide Column">
                                    <i class="fa fa-eye-slash"></i>
                                </button>
                            </th>
                            <th scope="col">Action
                                <button class="pull-right btn btn-default btn-condensed hide-column" data-toggle="tooltip" data-placement="bottom" title="Hide Column">
                                    <i class="fa fa-eye-slash"></i>
                                </button>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($datalhu as $dl) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $dl['kode_produk']; ?></td>
                                <td><?= $dl['nama_lhu']; ?></td>
                                <td><?= $dl['jenis_lhu']; ?></td>
                                <td><?= $dl['nomer_analisa']; ?></td>
                                <td><?= $dl['nomer_batch']; ?></td>
                                <td><?= $dl['exp_date']; ?></td>
                                <td><?= $dl['tgl_produksi']; ?></td>
                                <td><?= $dl['tgl_sampling']; ?></td>
                                <td><?= $dl['besaran_batch']; ?></td>
                                <td><?= $dl['satuan']; ?></td>
                                <td>
									<a href="<?= base_url('Laporan/index/') . $dl['id'] . $dl['file_lhu']; ?>" target="_blank" class="badge badge-warning"><i class="fa fa-print" aria-hidden="true"></i>Fill</a>
									<a href="<?= base_url('Laporan/index/') . $dl['id'] . $dl['file_lhu']; ?>" target="_blank" class="badge badge-success"><i class="fa fa-print" aria-hidden="true"></i> COVER</a>
                                    <a href="<?= base_url('./assets/data/' . $dl['file_lhu']); ?>" target="_blank" class="badge badge-success"><i class="fa fa-print" aria-hidden="true"></i> LHU</a>
                                </td>

                            </tr>
                            <?php $i++ ?>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot class="footer-restore-columns">
                        <tr>
                            <th colspan="11"><a class="restore-columns" href="#">Some columns hidden - click to show all</a></th>
                        </tr>
                    </tfoot>
                </table>
                <?= $this->pagination->create_links(); ?>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
