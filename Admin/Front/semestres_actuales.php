<?php
session_start();

if(empty($_SESSION['user'])||empty($_SESSION['logged'])||empty($_SESSION['class'])){
    echo '<script>window.location="../../index.html"</script>';
}
else{
    if($_SESSION['class']!="admin"){
        echo '<script>window.location="../../index.html"</script>';
    }
}


?>

<!DOCTYPE html>
<html lang="en">

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

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="inicio_admin.php">Peer Assessment</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <!--<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        
                        <li class="divider"></li>
                        -->
                        <li><a href="../../logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <!--<li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group 
                        </li>
                        -->
                        <li>
                            <a  href="inicio_admin.php"><i class="glyphicon glyphicon-home fa-fw"></i> Inicio</a>
                        </li>
                        <li>
                            <a class="active" href="semestres_actuales.php"><i class="glyphicon glyphicon-list fa-fw"></i> Semestres</a>
                        </li>
                        <!--<li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Por definir</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-wrench fa-fww"></i> Por definir</a>
                        </li>
                        -->
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Semestres</h1>
                    
                        <div class="panel-body">
                            <div id="sub_form1">
                            </div>
                            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Agregar Semestre</button>
                                
                                <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Agregar nuevo semestre</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="panel-body">
                                                <form role="form">
                                                    <div class="form-group">
                                                        <label>Periodo:</label>
                                                        <select name="periodo" class="form-control">
                                                            <option value="P">Primero</option>
                                                            <option value="S">Segundo</option>
                                                            <option value="I1">Intersemestral I</option>
                                                            <option value="I2">Intersemestral II</option>
                                                         </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Anho</label>
                                                        <label class="form-control" id="anho"></label>
                                                    </div>
                                                    
                                                    
                                                </form>
                                                
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                            <button id="click_crear_nuevo_semestre" type="button" class="btn btn-primary">Crear semestre</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->

                        </div>
                    
                    
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="../../sb-admin-2/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../sb-admin-2/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../sb-admin-2/js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../sb-admin-2/js/sb-admin-2.js"></script>
    
    
    <script type="text/javascript">
    
    $(document).ready(function(){
        
        var fecha = new Date();
        var anho = fecha.getFullYear();
        $("#anho").text(anho);
        
        cargar_semestres();
        //Crear nuevo semestre
        
        $("#click_crear_nuevo_semestre").click(function(){
            
            $.ajax({
                type:"POST",
                data:{periodo:$("select[name=periodo]").val(),anho:anho},
                url:"../Back/crear_nuevo_semestre.php",
                dataType:'json',
                success: function(h){
                if(h.exito=="repetido"){
                    
                    alert("El semestre ya existe, no se pueden crear un mismo periodo en un mismo anho.");
                }
                else if(h.exito=='creado'){
                    
                    alert("El semestre fue creado con éxito.");
                    window.location.reload(true);
                }
                else{
                    
                    alert("Tenemos problemas con nuestro servicio. Inténtelo más tarde por favor.");
                }
                },
                error: function(i){
                    alert("Todo mal");
                }
            });
            
        });
        
        //cargar semestres
        
        function cargar_semestres(){
            
            $.ajax({
                type:"POST",
                data:{},
                url:"../Back/cargar_semestres.php",
                dataType:'json',
                success: function(h){
                if(h.exito=="exito"){
                    $("#sub_form1").empty();
                    $("#sub_form1").append(h.cadena);       
                    
                    $("button[tipo=link_semestre]").click(function(){
                        var idsemestre=$(this).attr('idsemestre');
                        $.ajax({
                            type:"POST",
                            data:{idsemestre:idsemestre},
                            url:"../Back/saber_semestre_seleccionado.php",
                            dataType:'json',
                            success: function(h){
                            if(h.exito=="exito"){
                                window.location="semestre_crear_curso.php"
                            }
                            },
                            error: function(i){
                                alert("Todo mal");
                            }
                        });
                        
                    });
                }
                else if(h.exito=='vacio'){
                    $("#sub_form1").empty();
                    alert("No hay ningún semestre creado. Por favor cree uno.");
                }
                else{
                    $("#sub_form1").empty();
                    alert("Tenemos problemas con nuestro servicio. Inténtelo más tarde por favor.");
                }
                },
                error: function(i){
                }
            });
            
        }
       
       
        /*
        cargar_cursos_actuales();
        
        //En la ventada modal de agregar curso se pedirá si ya existe una columna con el número de equipo al que pertenece el estudiante7
        
        $("input[name=si_no_columna_equipos]").change(function () { 
            
            $("#no_equipos").empty();
            if($(this).val()=="No"){
                $("#no_equipos").append('<input type="number" name="quantity" min="1" max="200" step="1">');
            }
            
        });
        
        
        */
    });
    
    
    
    
    </script>

</body>

</html>

