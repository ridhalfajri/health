<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row">
                    <div class="col">
                        <h4 class="page-title">Edit Lokasi Vaksin</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('lokasi_vaksin') ?>">Lokasi Vaksin</a></li>
                            <li class="breadcrumb-item active">Edit</li>
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
                            <h4 class="card-title">Edit Lokasi Vaksin</h4>
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
                                <option value="11">ACEH</option>
                                <option value="12">SUMATERA UTARA</option>
                                <option value="13">SUMATERA BARAT</option>
                                <option value="14">R I A U</option>
                                <option value="15">J A M B I</option>
                                <option value="16">SUMATERA SELATAN</option>
                                <option value="17">BENGKULU</option>
                                <option value="18">LAMPUNG</option>
                                <option value="19">KEPULAUAN BANGKA BELITUNG</option>
                                <option value="21">KEPULAUAN RIAU</option>
                                <option value="31">DKI JAKARTA</option>
                                <option value="32">JAWA BARAT</option>
                                <option value="33">JAWA TENGAH</option>
                                <option value="34">DI YOGYAKARTA</option>
                                <option value="35">JAWA TIMUR</option>
                                <option value="36">B A N T E N</option>
                                <option value="51">BALI</option>
                                <option value="52">NUSA TENGGARA BARAT</option>
                                <option value="53">NUSA TENGGARA TIMUR</option>
                                <option value="61">KALIMANTAN BARAT</option>
                                <option value="62">KALIMANTAN TENGAH</option>
                                <option value="63">KALIMANTAN SELATAN</option>
                                <option value="64">KALIMANTAN TIMUR</option>
                                <option value="71">SULAWESI UTARA</option>
                                <option value="73">SULAWESI SELATAN</option>
                                <option value="74">SULAWESI TENGGARA</option>
                                <option value="75">GORONTALO</option>
                                <option value="76">SULAWESI BARAT</option>
                                <option value="81">MALUKU</option>
                                <option value="82">MALUKU UTARA</option>
                                <option value="94">PAPUA</option>
                                <option value="91">PAPUA BARAT</option>
                                <option value="72">SULAWESI TENGAH</option>
                                <option value="65">KALIMANTAN UTARA</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Tempat</label>
                        <div class="col-lg-9 col-xl-8">
                            <input class="form-control" type="text" placeholder="Tempat" autocomplete="off" value="Rumah Sakit Umum Daerah Bogor">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Alamat Lengkap</label>
                        <div class="col-lg-9 col-xl-8">
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <textarea class="form-control" autocomplete="off" rows="3">Jl. DR. Sumeru No.120, RT.03/RW.20, Menteng, Kec. Bogor Bar., Kota Bogor, Jawa Barat 16112</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">No Telepon</label>
                        <div class="col-lg-9 col-xl-8">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i class="las la-phone"></i></span></div>
                                <input type="text" class="form-control" value="082285497645" aria-describedby="basic-addon1">
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