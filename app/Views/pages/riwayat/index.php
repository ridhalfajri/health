<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row">
                    <div class="col">
                        <h4 class="page-title">Riwayat Vaksin</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?=base_url('riwayat')?>">Riwayat Vaksin</a></li>
                            <li class="breadcrumb-item active">Riwayat</li>
                        </ol>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div><!--end row-->
    <!-- end page title end breadcrumb -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Riwayat</h4>
                    <p class="text-muted mb-0">
                        Riwayat vaksin anda
                    </p>
                </div><!--end card-header-->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                            <tr>
                                <th>Jenis Vaksin</th>
                                <th>Vaksin ke</th>
                                <th>Alamat Vaksin</th>
                                <th>Tanggal Vaksin</th>
                                <th class="text-right">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Sinovac</td>
                                <td>1</td>
                                <td>Puskesmas Dramaga</td>
                                <td>01-01-2022</td>
                                <td class="text-right">
                                    <a href="#"><i class="fas fa-eye"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Sinovac</td>
                                <td>2</td>
                                <td>Rumah Sakit Umum Daerah Kota Bogor</td>
                                <td>05-05-2022</td>
                                <td class="text-right">
                                    <a href="#"><i class="fas fa-eye"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Moderna</td>
                                <td>3</td>
                                <td>Rumah Sakit Universitasi Indonesia</td>
                                <td>25-10-2022</td>
                                <td class="text-right">
                                    <a href="#"><i class="fas fa-eye"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table><!--end /table-->
                    </div><!--end /tableresponsive-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div> <!-- end col -->

    </div> <!-- end row -->
</div>

<?= $this->endSection() ?>
