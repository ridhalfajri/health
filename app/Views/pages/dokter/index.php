<?= $this->extend('layout/template') ?>

<!-- DataTables -->
<!-- <link href="<?= base_url('assets/plugins/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />
<link href="<?= base_url('assets/plugins/datatables/buttons.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" /> -->
<!-- Responsive datatable examples -->
<!-- <link href="<?= base_url('assets/plugins/datatables/responsive.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" /> -->
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
                    <?php if (session()->get('sukses')) : ?>
                        <div class="col">
                            <div class="alert alert-success border-0" role="alert">
                                <strong>Sukses</strong> <?= session()->get('sukses') ?>
                            </div>
                        </div>
                    <?php endif ?>
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
                    <div class="row">
                        <div class="col">
                            <h4 class="card-title">Dokter</h4>
                            <p class="text-muted mb-0">
                                Daftar Dokter
                            </p>
                        </div>
                        <div class="col">
                            <a href="<?= base_url('dokter/create') ?>" class="btn btn-primary waves-effect waves-light float-right mb-3"><i class="mdi mdi-plus-circle-outline mr-2"></i>Tambah Dokter</a>
                        </div>
                    </div>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <table id="table-dokter" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Provinsi</th>
                                <th>No Telepon</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>


                        <tbody>
                            <?php $no = 1 ?>
                            <?php foreach ($dokter as $dok) : ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $dok->nama; ?></td>
                                    <td><?= $dok->nama_provinsi; ?></td>
                                    <td><?= $dok->no_telp; ?></td>
                                    <td><?= $dok->status; ?></td>
                                    <td class="text-right">
                                        <a href="<?= base_url('dokter/edit/' . base64_encode($dok->id)) ?>"><i class="fas fa-edit"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach ?>

                        </tbody>
                    </table>
                    <!--end /table-->
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div> <!-- end col -->

    </div> <!-- end row -->
</div>


<?= $this->endSection() ?>