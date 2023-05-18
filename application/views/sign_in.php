<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Drawing Management</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo base_url('AdminLTE');?>/assets/images/favicon/Tab_Icon.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo base_url('AdminLTE');?>/assets/images/Tab_Icon.png" type="image/x-icon">

    <!-- Font Awesome -->         
    <link rel="stylesheet" href="<?php echo base_url('AdminLTE');?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('AdminLTE');?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('AdminLTE');?>/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page" style="background-color: #D2D6DE;">
    <div class="login-box">
        <div class="login-logo">
            <a href="https://www.softechsolutions.in">
                <img width="200px" height="200px" src="<?php echo base_url('logo.jpg') ?>"
                    class="mx-auto d-block rounded-circle" alt="">

            </a>

        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-header text-center">
                <h3>
                    New Drawing Demo
                </h3>
            </div>



            <div class="card-body login-card-body">

                <h5 class=" text-center">
                    Sign In
                </h5>
                <br>



                <form action="<?php echo base_url('sign_in'); ?>" method="post">
                    <div class="input-group mb-3">
                        <input type="email" required="" name="user_email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="user_pass" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <!-- /.col -->
                        <div class="col-lg-12 text-center">

                            <button type="submit" class="btn btn-primary btn-block">Log In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                    <?php if ($this->session->flashdata('errors')) {
          ?>
                    <br>
                    <br>

                    <div class="login-details text-left mb-25">
                        <div class='alert alert-danger'>
                            <?php echo $this->session->flashdata('errors');  ?>
                        </div>
                    </div>

                    <?php }
          ?>
                </form>

            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?php echo base_url('AdminLTE');?>/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url('AdminLTE');?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('AdminLTE');?>/dist/js/adminlte.min.js"></script>

</body>

</html>