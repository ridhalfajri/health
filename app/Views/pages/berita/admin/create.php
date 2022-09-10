<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<style>
</style>

<div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row">
                    <div class="col">
                        <h4 class="page-title">Berita Vaksin</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('lokasi_vaksin') ?>">Berita Vaksin</a></li>
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
        <div class="col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-title">Berita Vaksin</h4>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Judul</label>
                        <div class="col-lg-9 col-xl-8">
                            <input class="form-control" type="text" placeholder="Judul" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Deskripsi</label>
                        <div class="col-lg-9 col-xl-8">
                            <textarea class="ckeditor form-control" autocomplete="off" rows="3" placeholder="Deskripsi"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Foto</label>
                        <div class="col-lg-9 col-xl-8">
                            <div class="input-group">
                                <input type="file" class="form-control" id="customFile">
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

<script src="<?= base_url('assets/plugins/ckeditor/ckeditor.js') ?>"></script>
<script>
    // CKEDITOR.replace('editor');

    ClassicEditor
        .create(document.querySelector('.ckeditor'))
        .catch(error => {
            console.error(error);
        });
</script>

<?= $this->endSection() ?>