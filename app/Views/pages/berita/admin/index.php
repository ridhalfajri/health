<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row">
                    <div class="col">
                        <h4 class="page-title">Berita</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('berita/admin') ?>">Berita Vaksin dan Covid</a></li>
                            <li class="breadcrumb-item active">Berita</li>
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
                    <h4 class="card-title">Berita</h4>
                    <p class="text-muted mb-0">
                        Daftar Berita
                    </p>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <a href="<?= base_url('berita/admin/create') ?>" class="btn btn-primary waves-effect waves-light float-right mb-3"><i class="mdi mdi-plus-circle-outline mr-2"></i>Tambah Berita</a>
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Kategori</th>
                                    <th class="text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Kim Jong Un Akhirnya Sarankan Warga Divaksin, Separah Apa COVID-19 di Korut?</td>
                                    <td>Pemimpin Korea Utara Kim Jong Un akhirnya menyarankan vaksinasi COVID-19 untuk dimulai pada November 2022 mendatang. Begini COVID-19 di Korea Utara.</td>
                                    <td>Vaksin</td>
                                    <td class="text-right">
                                        <a href="<?= base_url('berita/admin/edit') ?>"><i class="fas fa-edit"></i></a>
                                    </td>
                                    <td class="text-right">
                                        <a href="<?= base_url('berita/admin/hapus') ?>"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sebaran 2.804 Kasus Corona RI 9 September, Jakarta Sumbang 1.166</td>
                                    <td>Pemerintah melaporkan 2.804 tambahan kasus baru positif Corona hari ini. Provinsi DKI melaporkan kasus terbanyak dalam 24 jam terakhir sebanyak 1.166 kasus.</td>
                                    <td>Covid</td>
                                    <td class="text-right">
                                        <a href="#"><i class="fas fa-edit"></i></a>
                                    </td>
                                    <td class="text-right">
                                        <a href="#"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Update Corona RI 9 September: Tambah 2.804 Kasus Baru, Kasus Aktif 35.250</td>
                                    <td>Jumlah kasus COVID-19 di Indonesia bertambah 2.804 kasus, Jumat (9/9/2022). Sementara itu jumlah kasus sembuh bertambah 5.346, meninggal 12.</td>
                                    <td>Covid</td>
                                    <td class="text-right">
                                        <a href="#"><i class="fas fa-edit"></i></a>
                                    </td>
                                    <td class="text-right">
                                        <a href="#"><i class="fas fa-trash"></i></a>
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