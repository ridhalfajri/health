<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row">
                    <div class="col">
                        <h4 class="page-title">Lokasi Vaksin</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('lokasi_vaksin') ?>">Lokasi Vaksin</a></li>
                            <li class="breadcrumb-item active">Lokasi</li>
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
                    <h4 class="card-title">Lokasi Vaksin</h4>
                    <p class="text-muted mb-0">
                        Daftar Lokasi Vaksin
                    </p>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <a href="<?= base_url('lokasi_vaksin/create') ?>" class="btn btn-primary waves-effect waves-light float-right mb-3"><i class="mdi mdi-plus-circle-outline mr-2"></i>Tambah Lokasi Vaksin</a>
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>Provinsi</th>
                                    <th>Tempat</th>
                                    <th>Alamat Lengkap</th>
                                    <th>No Telp</th>
                                    <th class="text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Jawa Barat</td>
                                    <td>Rumah Sakit Umum Daerah Bogor</td>
                                    <td>Jl. DR. Sumeru No.120, RT.03/RW.20, Menteng, Kec. Bogor Bar., Kota Bogor, Jawa Barat 16112</td>
                                    <td>082285497645</td>
                                    <td class="text-right">
                                        <a href="<?= base_url('lokasi_vaksin/edit') ?>"><i class="fas fa-edit"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>DKI Jakarta</td>
                                    <td>Rumah Sakit Harapan Bunda</td>
                                    <td>Jl. Raya Jakarta-Bogor KM.22 No.44, RT.8/RW.2, Rambutan, Kec. Ciracas, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13830</td>
                                    <td>081378128931</td>
                                    <td class="text-right">
                                        <a href="#"><i class="fas fa-edit"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jawa Barat</td>
                                    <td>Rumah Sakit Karya Bhakti Pratiwi</td>
                                    <td>Jl. Raya Dramaga KM.7, Dramaga, Kec. Dramaga, Kabupaten Bogor, Jawa Barat 16880</td>
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