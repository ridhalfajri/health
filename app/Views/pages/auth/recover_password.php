
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Health People</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?=base_url('assets/images/favicon.ico')?>">

    <!-- App css -->
    <link href="<?=base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/css/icons.min.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/css/app-rtl.min.css')?>" rel="stylesheet" type="text/css" />

</head>

<body class="account-body accountbg">


<!-- Recover-pw page -->
<div class="container">
    <div class="row vh-100 d-flex justify-content-center">
        <div class="col-12 align-self-center">
            <div class="row">
                <div class="col-lg-5 mx-auto">
                    <div class="card">
                        <div class="card-body p-0 auth-header-box">
                            <div class="text-center p-3">
                                <a href="#" class="logo logo-admin">
                                    <img src="<?=base_url('assets/images/logo-sm.png')?>" height="50" alt="logo" class="auth-logo">
                                </a>
                                <h4 class="mt-3 mb-1 font-weight-semibold text-white font-18">Reset Password anda</h4>
                                <p class="text-muted  mb-0">password akan dikirimkan ke email anda</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal auth-form my-4" action="<?=base_url('login')?>" method="GET">

                                <div class="form-group">
                                    <label for="username">Email</label>
                                    <div class="input-group mb-3">
                                        <input type="email" class="form-control"  id="email" placeholder="Masukkan Email">
                                    </div>
                                </div><!--end form-group-->

                                <div class="form-group mb-0 row">
                                    <div class="col-12 mt-2">
                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Mengatur Ulang <i class="fas fa-sign-in-alt ml-1"></i></button>
                                    </div><!--end col-->
                                </div> <!--end form-group-->
                            </form><!--end form-->
                            <p class="text-muted mb-0">Ingat ?  <a href="<?=base_url('login')?>" class="text-primary ml-2">Masuk disini</a></p>
                        </div>
                        <div class="card-body bg-light-alt text-center">
                            <span class="text-muted d-none d-sm-inline-block">Kelompok xx © 2022</span>
                        </div>
                    </div><!--end card-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end col-->
    </div><!--end row-->
</div><!--end container-->
<!-- End Recover-pw page -->





<!-- jQuery  -->
<script src="<?=base_url('assets/js/jquery.min.js')?>"></script>
<script src="<?=base_url('assets/js/bootstrap.bundle.min.js')?>"></script>
<script src="<?=base_url('assets/js/waves.js')?>"></script>
<script src="<?=base_url('assets/js/feather.min.js')?>"></script>
<script src="<?=base_url('assets/js/simplebar.min.js')?>"></script>


</body>

</html>