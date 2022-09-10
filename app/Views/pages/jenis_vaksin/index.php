<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row">
                    <div class="col">
                        <h4 class="page-title">Jenis Vaksin</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('jenis_vaksin') ?>">Jenis Vaksin</a></li>
                            <li class="breadcrumb-item active">Jenis</li>
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
                    <h4 class="card-title">Jenis Vaksin</h4>
                    <p class="text-muted mb-0">
                        Daftar Jenis Vaksin
                    </p>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <a href="<?= base_url('jenis_vaksin/create') ?>" class="btn btn-primary waves-effect waves-light float-right mb-3"><i class="mdi mdi-plus-circle-outline mr-2"></i>Tambah Jenis Vaksin</a>
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>Kode Vaksin</th>
                                    <th>Nama Vaksin</th>
                                    <th class="text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Vak-001</td>
                                    <td>Sinovac</td>
                                    <td class="text-right">
                                        <a href="<?= base_url('jenis_vaksin/edit') ?>"><i class="fas fa-edit"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Vak-002</td>
                                    <td>Moderna</td>
                                    <td class="text-right">
                                        <a href="#"><i class="fas fa-edit"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Vak-003</td>
                                    <td>Pfizer</td>
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