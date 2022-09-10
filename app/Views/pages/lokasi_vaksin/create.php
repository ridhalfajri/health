<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row">
                    <div class="col">
                        <h4 class="page-title">Tambah Lokasi Vaksin</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('lokasi_vaksin') ?>">Lokasi Vaksin</a></li>
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
                            <h4 class="card-title">Tambah Lokasi Vaksin</h4>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Provinsi</label>
                        <div class="col-lg-9 col-xl-8">
                            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;">
                                <option>Pilih...</option>
                                <?php foreach($provinsi as $prov):?>
                                    <option value="<?php echo $prov->id?>"><?php echo $prov->nama_provinsi?></option>
                                    <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Tempat</label>
                        <div class="col-lg-9 col-xl-8">
                            <input class="form-control" type="text" placeholder="Tempat" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Alamat Lengkap</label>
                        <div class="col-lg-9 col-xl-8">
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <textarea class="form-control" autocomplete="off" rows="3" placeholder="Alamat Lengkap"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">No Telepon</label>
                        <div class="col-lg-9 col-xl-8">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i class="las la-phone"></i></span></div>
                                <input type="text" class="form-control" placeholder="No Telepon" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-9 col-xl-8 offset-lg-3">
                            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                            <button type="button" class="btn btn-danger btn-sm">Batal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->

    </div>
    <!--end row-->
</div>

<?= $this->endSection() ?>