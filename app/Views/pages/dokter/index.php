<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row">
                    <div class="col">
                        <h4 class="page-title">Dokter</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('dokter') ?>">Dokter</a></li>
                            <li class="breadcrumb-item active">Daftar</li>
                        </ol>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end page-title-box-->
        </div>
        <!--end col-->
    </div>
    <!--end row-->
    <!-- end page title end breadcrumb -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Dokter</h4>
                    <p class="text-muted mb-0">
                        Daftar Dokter
                    </p>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <a href="<?= base_url('dokter/create') ?>" class="btn btn-primary waves-effect waves-light float-right mb-3"><i class="mdi mdi-plus-circle-outline mr-2"></i>Tambah Dokter</a>
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Provinsi</th>
                                    <th>No Telp</th>
                                    <th class="text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Dr. Theo Evan</td>
                                    <td>Sumatera Barat</td>
                                    <td>081287293843</td>
                                    <td class="text-right">
                                        <a href="<?= base_url('dokter/edit') ?>"><i class="fas fa-edit"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Dr. Ridhal Fajri</td>
                                    <td>Jawa Barat</td>
                                    <td>081378128931</td>
                                    <td class="text-right">
                                        <a href="#"><i class="fas fa-edit"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Dr. Fauzan Adzim</td>
                                    <td>Banten</td>
                                    <td>083180232832</td>
                                    <td class="text-right">
                                        <a href="#"><i class="fas fa-edit"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!--end /table-->
                    </div>
                    <!--end /tableresponsive-->
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div> <!-- end col -->

    </div> <!-- end row -->
</div>

<?= $this->endSection() ?>