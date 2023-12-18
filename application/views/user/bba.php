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

    <?php if ($this->session->flashdata('existingObatJadi')) : ?>
    <script>
        Swal.fire({
            icon: "error",
            title: "Duplicate",
            text: "Kode Analisa Sudah Ada!",
        });
    </script>
    <?php endif; ?>

    <?php if ($this->session->flashdata('existingBBA_BKP')) : ?>
    <script>
        Swal.fire({
            icon: "error",
            title: "Duplicate",
            text: "Kode Analisa Sudah Ada!",
        });
    </script>
    <?php endif; ?>

    <?php if ($this->session->flashdata('existingBKP')) : ?>
    <script>
        Swal.fire({
            icon: "error",
            title: "Duplicate",
            text: "Kode Analisa Sudah Ada!",
        });
    </script>
    <?php endif; ?>

    <i class="icofont-angle-double-left"></i>
    <div class="row mt-3">
        <div class="col-md-6"><a href="<?= base_url('user/addBBA/'); ?>" class="btn btn-primary btn-md"><i class="fa fa-plus" aria-hidden="true"></i> Select Data yang akan di Print</a></div>
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
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">K.Prod</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Jenis Lhu</th>
                            <th scope="col">N.Analisa</th>
                            <th scope="col">N.Batch</th>
                            <th scope="col">Tgl.Sampling</th>
                            <th scope="col">Exp.Date</th>
                            <th scope="col">Produsen</th>
                            <th scope="col">Supplier</th>
                            <th scope="col">Jumlah Penerimaan</th>
                            <th scope="col">No. Protap Analisa BB</th>
                            <th scope="col">Tanggal Berlaku</th>
                            <th scope="col">Created by</th>
                            <th scope="col">Action</th>
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
                                <td><?= $dl['nomer_analisa']; ?></td>
                                <td><?= $dl['nomer_batch']; ?></td>
                                <td><?= $dl['tgl_sampling']; ?></td>
                                <td><?= $dl['exp_date']; ?></td>
                                <td><?= $dl['produsen']; ?></td>
                                <td><?= $dl['supplier']; ?></td>
                                <td><?= $dl['jumlah_penerimaan']; ?></td>
                                <td><?= $dl['no_protap_analisa_bb']; ?></td>
                                <td><?= $dl['tgl_berlaku']; ?></td>
                                <td><?= $dl['name'] ?></td>
                                <td>
                                    <a href="<?= base_url('./assets/file_lhu/bba_bbp/' . $dl['file_lhu']); ?>" target="_blank" class="badge badge-success"><i class="fa fa-print" aria-hidden="true"></i> File LHU</a>
                                    <a href="<?= base_url('user/editLHUBBA/') . $dl['id']; ?>" class="badge badge-warning"><i class="fa fa-edit" aria-hidden="true"></i> Update LHU</a>
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
<script src="<?= base_url(); ?>assets/js/sweetalert2.all.min.js"></script>

<script>
$(document).ready(function() {
  $('.tombol-print').on('click', function(e) {
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
      title: "Apakah Anda Yakin Ingin Print Dokumen?",
      text: "Anda Hanya bisa print 1 kali setiap dokumen",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Ya"
    }).then((result) => {
      if (result.isConfirmed) { // Change from result.value to result.isConfirmed
        window.location.href = href; // Change from document.location.href to window.location.href
      }
    });
  });
});
</script>