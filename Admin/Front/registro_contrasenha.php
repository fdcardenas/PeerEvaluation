<?php
session_start();


if(empty($_SESSION['user'])||empty($_SESSION['logged_aux'])||empty($_SESSION['class'])){
    echo '<script>window.location="../../index.html"</script>';
}
else{
    if($_SESSION['class']!="admin"){
        echo '<script>window.location="../../index.html"</script>';
    }
}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Peer Assessment</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../sb-admin-2/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../../sb-admin-2/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../sb-admin-2/css/sb-admin-2.css" rel="stylesheet">

    <!-- bootstrapValidator Custom CSS -->
    <link rel="stylesheet" type="text/css" href="../../bootstrapValidator/css/bootstrapValidator.css">

    <!-- Custom Fonts -->
    <link href="../../sb-admin-2/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<!--WRAPPER-->
<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Bienvenid@ <?php echo $_SESSION['user']; ?>.Por favor digite los siguientes datos para completar el proceso de registro.</h3>
                    </div>
                    <div class="panel-body">
                    <form action="../Back/guardar_registro_contrasenha.php" id="passwordRegistrationForm" role="form" action="" method="POST">
                        
                        <fieldset>
                                <div class="form-group">
                                    <label>Usuario: <?php echo $_SESSION['user']; ?></label>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="C&oacute;digo Uninorte" name="codigo" type="text" autofocus>
                                </div>
                                
                                <div class="form-group">
                                    <input class="form-control" placeholder="Digite su nueva contrase&ntilde;a" name="pass" type="password" value="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Digite de nuevo su nueva contrase&ntilde;a" name="pass2" type="password" value="">
                                </div>
                                
                                <input type="submit" value="Aceptar" class="btn btn-lg btn-success btn-block">
                            </fieldset>

                    </form>
                    </div>
                </div>
            </div>
        </div>
</div>

<!-- jQuery Version 1.11.0 -->
    <script src="../../sb-admin-2/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../sb-admin-2/js/bootstrap.min.js"></script>

    <!-- bootstrapValidator JavaScript -->
    <script src="../../bootstrapValidator/js/bootstrapValidator.js"></script>

    <!-- bootstrapValidator Validation Script: Check out validation rules here -->
    <script src="../../bootstrapValidator/js/formValidation.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../sb-admin-2/js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../sb-admin-2/js/sb-admin-2.js"></script>

</body>
</html>