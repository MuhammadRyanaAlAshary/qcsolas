<!-- Begin Page Content -->
<div class="container-fluid">
    <i class="icofont-angle-double-left"></i>
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
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">K.Prof
                            </th>
                            <th scope="col">Nama Lhu
                            </th>
                            <th scope="col">Jenis Lhu
                            </th>
                            <th scope="col">N.Analisa
                            </th>
                            <th scope="col">N.Batch
                            </th>
                            <th scope="col">Exp.Date
                            </th>
                            <th scope="col">Tgl.Prod
                            </th>
                            <th scope="col">Tgl.Sampling
                            </th>
                            <th scope="col">Qty
                            </th>
                            <th scope="col">Sat
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
                                <td><?= $dl['nama_lhu']; ?></td>
                                <td><?= $dl['jenis_lhu']; ?></td>
                                <td><?= $dl['nomor_analisa']; ?></td>
                                <td><?= $dl['nomor_batch']; ?></td>
                                <td><?= $dl['exp_date']; ?></td>
                                <td><?= $dl['tgl_produksi']; ?></td>
                                <td><?= $dl['tgl_sampling']; ?></td>
                                <td><?= $dl['besaran_batch']; ?></td>
                                <td><?= $dl['satuan']; ?></td>
                                <td>
                                    <a href="<?= base_url('user/editlhu/') . $dl['id']; ?>" class="badge badge-warning"><i class="fa fa-edit" aria-hidden="true"></i> Add Data LHU</a>
                                    <a href="<?= base_url('user/editlhu/') . $dl['id']; ?>" class="badge badge-warning"><i class="fa fa-edit" aria-hidden="true"></i> </a>
                                    <!-- <a href="<?= base_url('Laporan/index/') . $dl['id'] . $dl['file_lhu']; ?>" target="_blank" class="badge badge-success"><i class="fa fa-print" aria-hidden="true"></i> COVER</a>
                                    <a href="<?= base_url('./assets/data/' . $dl['file_lhu']); ?>" target="_blank" class="badge badge-success"><i class="fa fa-print" aria-hidden="true"></i> LHU</a> -->
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