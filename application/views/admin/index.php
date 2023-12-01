<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h2 mb-4 text-gray-800"><i class="fas fa-tachometer-alt"></i> <?= $title; ?></h1>


    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-2 col-md-6 mb-6">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Data LHU Obat Jadi</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $oj ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-fw fa-sharp fa-light fa-book text-gray-200"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-2 col-md-6 mb-8">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Data LHU BBA</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $bba ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-fw fa-sharp fa-light fa-book text-gray-200"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-2 col-md-6 mb-8">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Data LHU BBT</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $bbt ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-fw fa-sharp fa-light fa-book text-gray-200"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-2 col-md-6 mb-8">
            <div class="card border-left-secondary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Data LHU Mikro Biologi BB</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $mbb ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-fw fa-sharp fa-light fa-book text-gray-200"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-2 col-md-6 mb-8">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Data LHU Mikro Biologi OJ
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $moj ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-fw fa-sharp fa-light fa-book text-gray-200"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-2 col-md-6 mb-8">
            <div class="card border-left-dark shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                Jumlah Semua Data LHU</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $all ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-fw fa-sharp fa-light fa-book text-gray-200"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <!-- Page Heading -->
    <h1 class="h2 mb-4 text-gray-800"></h1>

    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-6 mb-4">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h class="m-0 font-weight-bold text-primary">Data Obat Jadi</h>
                </div>
                <div class="card-body">
                    <h6 class="large font-weight-bold text-dark">Jumlah Obat Jadi REG <span class="float-right"><?= $reg ?></span></h6>
                    <div class="progress mb-4">
                    </div>
                    <h6 class="large font-weight-bold text-dark">Jumlah Obat Jadi NON.REG <span class="float-right"><?= $nr ?></span></h6>
                    <div class="progress mb-4">
                    </div>
                    <h6 class="large font-weight-bold text-dark">Jumlah Obat Jadi 3S <span class="float-right"><?= $s ?></span></h6>
                    <div class="progress mb-4">
                    </div>
                    <h6 class="large font-weight-bold text-dark">Jumlah Obat Jadi EXPORT<span class="float-right"><?= $exp ?></span></h6>
                    <div class="progress mb-4">
                    </div>
                    <h6 class="large font-weight-bold text-dark">Jumlah Obat Jadi Tanpa Sales Type<span class="float-right"><?= $ns ?></span></h6>
                    <div class="progress mb-4">
                    </div>
                    <h6 class="large font-weight-bold text-dark">Jumlah Semua Obat Jadi <span class="float-right"><?= $allobj ?></span></h6>
                    <div class="progress">

                    </div>
                </div>
            </div>


        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->