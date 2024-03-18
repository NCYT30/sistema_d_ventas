<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in</title>

    <?php 

    $ruta="../public/";
    
    ?>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="<?php echo $ruta; ?>/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="<?php echo $ruta; ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo $ruta; ?>/dist/css/adminlte.min.css?v=3.2.0">

</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="<?php echo $ruta; ?>/index2.html"><b>Admin</b>LTE</a>
        </div>

        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <form method="post" id="formulariologin">
                    <div class="input-group mb-3">
                        <input type="text" id="login" name="login" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" id="clave" name="clave" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">


                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">logearse</button>
                        </div>

                    </div>
                </form>



            </div>

        </div>
    </div>


    <script src="<?php echo $ruta; ?>/plugins/jquery/jquery.min.js"></script>

    <script src="<?php echo $ruta; ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="<?php echo $ruta; ?>/dist/js/adminlte.min.js?v=3.2.0"></script>

    <script type="text/javascript" src="../vistas/codigosjs/login.js"></script>
</body>

</html>