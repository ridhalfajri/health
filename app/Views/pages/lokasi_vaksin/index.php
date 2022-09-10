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
                                <?php $no = 1; foreach($lokasi_vaksin as $data): ?>
                                <tr>
                                    <td><?= $data->nama_provinsi; ?></td>
                                    <td><?= $data->nama_tempat; ?></td>
                                    <td><?= $data->alamat_lengkap; ?></td>
                                    <td><?= $data->no_telp; ?></td>
                                    <td class="text-right">
                                        <a href="<?= base_url('lokasi_vaksin/edit') ?>"><i class="fas fa-edit"></i></a>
                                    </td>
                                </tr>
                            <?php $no++; endforeach; ?>
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