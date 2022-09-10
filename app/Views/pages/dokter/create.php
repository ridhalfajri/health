<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid">

    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row">
                    <div class="col">
                        <h4 class="page-title">Tambah Dokter</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('dokter') ?>">Dokter</a></li>
                            <li class="breadcrumb-item active">Tambah</li>
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
    <div class="row justify-content-center">
        <div class="col-lg-6 col-xl-6">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-title">Tambah Dokter</h4>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <form action="<?= base_url('dokter/store') ?>" method="POST" onsubmit="return submitForm(this);">
                        <?= csrf_field(); ?>
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Provinsi</label>
                            <div class="col-lg-9 col-xl-8">
                                <select name="provinsi" class="select2 form-control mb-3 custom-select <?= ($validation->hasError('provinsi')) ? 'is-invalid' : '' ?>" style="width: 100%; height:36px;" required>
                                    <option>Pilih...</option>
                                    <?php foreach ($provinsi as $prov) : ?>
                                        <option value="<?= $prov->id ?>"><?= $prov->nama_provinsi; ?></option>
                                    <?php endforeach ?>
                                </select>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('provinsi'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Nama</label>
                            <div class="col-lg-9 col-xl-8">
                                <input class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>" name="nama" type="text" placeholder="Nama" autocomplete="off" required>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nama'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">No Telepon</label>
                            <div class="col-lg-9 col-xl-8">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i class="las la-phone"></i></span></div>
                                    <input type="text" name="no_telp" class="form-control <?= ($validation->hasError('no_telp')) ? 'is-invalid' : '' ?>" placeholder="No Telepon" aria-describedby="basic-addon1" autocomplete="off" required>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('no_telp'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-9 col-xl-8 offset-lg-3">
                                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                                <button type="button" class="btn btn-danger btn-sm">Batal</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--end col-->

    </div>
    <!--end row-->
</div>
<?= $this->endSection() ?>