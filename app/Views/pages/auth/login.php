
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

        <!-- Log In page -->
        <div class="container">
            <div class="row vh-100 d-flex justify-content-center">
                <div class="col-12 align-self-center">
                    <div class="row">
                        <div class="col-lg-5 mx-auto">
                            <div class="card">
                                <div class="card-body p-0 auth-header-box">
                                    <div class="text-center p-3">
                                        <a href="index.html" class="logo logo-admin">
                                            <img src="assets/images/logo-sm.png" height="50" alt="logo" class="auth-logo">
                                        </a>
                                        <h4 class="mt-3 mb-1 font-weight-semibold text-white font-18">Health People</h4>
                                        <p class="text-muted  mb-0">Silahkan masuk menggunakan akun anda</p>  
                                    </div>
                                </div>
                                <div class="card-body">
                                     <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active p-3 pt-3" id="LogIn_Tab" role="tabpanel">                                        
                                            <form class="form-horizontal auth-form my-4" action="<?=base_url('')?>">
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <div class="input-group mb-3">                                                                                         
                                                        <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan email">
                                                    </div>                                    
                                                </div><!--end form-group--> 
                                                <div class="form-group">
                                                    <label for="password">Password</label>                                            
                                                    <div class="input-group mb-3">                                  
                                                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
                                                    </div>                               
                                                </div><!--end form-group--> 
                                                <div class="form-group row mt-4">
                                                    <div class="col-sm-6">
                                                        <a href="<?=base_url('recover_password')?>" class="text-muted font-13"><i class="dripicons-lock"></i> Lupa Password</a>
                                                    </div><!--end col--> 
                                                </div><!--end form-group--> 
                                                <div class="form-group mb-0 row">
                                                    <div class="col-12 mt-2">
                                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Masuk <i class="fas fa-sign-in-alt ml-1"></i></button>
                                                    </div><!--end col--> 
                                                </div> <!--end form-group-->                           
                                            </form><!--end form-->
                                            <div class="m-3 text-center text-muted">
                                                <p class="">Belum punya akun ?  <a href="<?=base_url('register')?>" class="text-primary ml-2">Silahkan daftar</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end card-body-->
                                <div class="card-body bg-light-alt text-center">
                                    <span class="text-muted d-none d-sm-inline-block">Mannatthemes © 2020</span>                                            
                                </div>
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
        <!-- End Log In page -->

        


        <!-- jQuery  -->
        <script src="<?=base_url('assets/js/jquery.min.js')?>"></script>
        <script src="<?=base_url('assets/js/bootstrap.bundle.min.js')?>"></script>
        <script src="<?=base_url('assets/js/waves.js')?>"></script>
        <script src="<?=base_url('assets/js/feather.min.js')?>"></script>
        <script src="<?=base_url('assets/js/simplebar.min.js')?>"></script>

        
    </body>

</html>