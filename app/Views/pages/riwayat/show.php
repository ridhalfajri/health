<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row">
                    <div class="col">
                        <h4 class="page-title">Pendaftaran Vaksin</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="pendaftaran-page.html">Pendaftaran Vaksin</a></li>
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
    <div class="row justify-content-md-center">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="media mb-3">
                        <img src="<?= base_url('assets/images/widgets/project1.jpg') ?>" alt="" class="thumb-md rounded-circle">
                        <div class="media-body align-self-center text-truncate ml-3">
                            <h4 class="m-0 font-weight-semibold text-dark font-16">Tiket Vaksin</h4>
                            <p class="text-muted  mb-0 font-13"><span class="text-dark">Nama : </span>Pandeka Setan</p>
                        </div>
                        <!--end media-body-->
                    </div>
                    <hr class="hr-dashed">
                    <div class="row">
                        <div class="col-4">Jadwal</div>
                        <div class="col-8">: 01 Januari 2022</div>
                    </div>
                    <div class="row">
                        <div class="col-4">Jenis</div>
                        <div class="col-8">: Moderna</div>
                    </div>
                    <div class="row">
                        <div class="col-4">Alamat</div>
                        <div class="col-8">: Jl. Raya Semplak Perum Terra Griya Blok A12. Bogor Barat, Kota Bogor, Jawa Barat
                            BOGOR BARAT - KOTA, KOTA BOGOR, JAWA BARAT, ID, 16114</div>
                    </div>
                    <div class="row my-3">
                        <div class="col text-center">
                            <strong>Nomor Antrian</strong>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <strong class="display-2">101</strong>
                        </div>
                    </div>
                    <hr class="hr-dashed">
                    <p class="text-muted mt-4 mb-1"> <span class="font-weight-bold text-danger">Diwajibkan</span> untuk membawa fotokopi KTP atau Kartu Keluarga anda!</p>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
    </div>
    <!--end row-->
</div>
<?= $this->endSection(); ?>