<?php
session_start();

if(empty($_SESSION['user'])||empty($_SESSION['logged'])||empty($_SESSION['class'])){
    echo '<script>window.location="../../index.html"</script>';
}
else{
    if($_SESSION['class']!="estudiante"){
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
                <a class="navbar-brand" href="inicio_estudiante.php">Peer Assessment</a>
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
                            <a  href="inicio_estudiante.php"><i class="glyphicon glyphicon-home fa-fw"></i> Inicio</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Evaluaciones<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a class="active" href="evaluaciones_disponibles.php">Disponibles</a>
                                </li>
                                <!--<li>
                                    <a href="morris.html">Hist&oacute;rico</a>
                                </li>
                                -->
                            </ul>
                            <!-- /.nav-second-level -->
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
                    <h1 class="page-header">Evaluaciones Disponibles</h1>
                    <div id="sub_evaluaciones">
                    </div>
                    
                        <!-- Modal -->
                            <div class="modal fade bs-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Evaluaci&oacute;n por pares</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="panel-body">
                                                <form role="form">
                                                    
                                                    <div id="form_evaluaciones">
                                                        
                                                    </div>
                                                    
                                                    
                                                </form>
                                                
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            
                                            <button type="button" id="cerrar_modal" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                            <button id="enviar_notas" tipo="siguiente_estudiante" type="button" class="btn btn-primary">Siguiente</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                    
                    
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
        
        //cargar semestres
        
        cargar_evaluaciones();
        
        function cargar_evaluaciones(){
            
            $.ajax({
                type:"POST",
                data:{},
                url:"../Back/cargar_evaluaciones_disponibles.php",
                dataType:'json',
                success: function(h){
                if(h.exito=="exito"){
                    $("#sub_evaluaciones").empty();
                    $("#sub_evaluaciones").append(h.cadena);       
                    
                    $("button[tipo=link_evaluacion_disponible]").click(function(){
                        var idassess=$(this).attr('id_assessment');
                        var num_equipo = $(this).attr('num_equipo');
                        var id_entrega_remitente = $(this).attr('id_entrega_remitente');
                        $.ajax({
                        type:"POST",
                        data:{idassess:idassess,num_equipo:num_equipo},
                        url:"../Back/traer_estudiantes_de_evaluacion_seleccionada.php",
                        dataType:'json',
                        success: function(g){
                        if(g.exito=="exito"){
                            
                            var cadena;
                            var arr_notas = Create2DArray(g.num_estudiantes+1);
                            
                            $("#enviar_notas").text('Siguiente');
                            
                            cadena = '<div class="form-group">'+
                                    '<label>Autoevaluación</label>'+
                                    '</div>';
                            
                            var i,j,cont=0;
                            for(i=0;i<g.num_criterios;i++){
                                cadena = cadena +
                                        '<div class="form-group">'+
                                        '<label>'+g[i][2]+'</label>'+
                                        '</div>'+
                                        '<div class="form-group">'+
                                        '<input num_criterio="'+
                                        g[i][3]+
                                        '" type="number" min="0" max="5" step="0.1" value ="5" />'
                                        '</div>';
                            }
                            $("#form_evaluaciones").empty();
                            $("#form_evaluaciones").append(cadena);
                            
                            
                            
                            if(g.num_estudiantes==0){
                                $("#enviar_notas").text('Enviar');
                            }
                            else{

                                $("button[tipo=siguiente_estudiante]").click(function(){
                                    j=0;
                                    
                                    $("input[type=number]").each(function(){
                                       arr_notas[cont][j]=$(this).val();
                                       j++;
                                       
  
                                    });
                                    cont++;
                                    
                                    if(cont==g.num_estudiantes || cont<g.num_estudiantes){
                                        
                                        if(cont==g.num_estudiantes){
                                            $("#enviar_notas").text('Enviar');
                                        }
                                        
                                        cadena="";

                                        cadena = '<div class="form-group">'+
                                        '<label>'+
                                        g[cont-1][1]+
                                        '</label>'+
                                        '</div>';
                                    
                                        for(i=0;i<g.num_criterios;i++){
                                            cadena = cadena +
                                            '<div class="form-group">'+
                                            '<label>'+g[i][2]+'</label>'+
                                            '</div>'+
                                            '<div class="form-group">'+
                                            '<input num_criterio="'+
                                            g[i][3]+
                                            '" type="number" min="0" max="5" step="0.1" value ="5" />'
                                            '</div>';
                                        }
                                    
                                        $("#form_evaluaciones").empty();
                                        $("#form_evaluaciones").append(cadena);

                                    }
                                    else{
                                        $("#enviar_notas").attr("disabled", true);
                                        var codigos=[];
                                        var mostrar="";
                                        
                                        for(i=0;i<=g.num_estudiantes;i++){
                                            //mostrar=mostrar+"Estudiante: "+i+"\n";
                                            //for(j=0;j<g.num_criterios;j++){
                                                //mostrar=mostrar+"Nota: "+j+" = "+arr_notas[i][j]+"\n";
                                            //}
                                            codigos.push(g[i][0]);
                                        }
                                        codigos.pop();
                                        codigos.unshift(g.codigo_propio);
                                        
                                        $.ajax({
                                        type:"POST",
                                        data:{notas:arr_notas,num_notas:g.num_criterios,num_estudiantes:codigos.length,codigos:codigos,id_er:id_entrega_remitente,id_assess:idassess},
                                        url:"../Back/guardar_respuestas_evaluaciones.php",
                                        dataType:'json',
                                        success: function(p){
                                        if(h.exito=="exito"){
                                            $("#enviar_notas").attr("disabled", false);
                                            //cargar_lista_de_estudiantes();
                                            $('#myModal').modal('hide');
                                            window.location.reload(true);
                                
                                        }
                                        else{
                                            alert("Actualmente presentamos problemas técnicas, por favor inténtelo de nuevo.");
                                        }
                                        },
                                        error: function(i){
                                            alert("Todo mal");
                                        }
                                        });
                                        
                                        //alert(mostrar);
                                        
                                    }
                                    
                                    

                                });
                                
    
                            }
                            $("#cerrar_modal").click(function(){
                                window.location.reload(true);
                            });
                            
                            
                            
                        }
                        else{
                            alert("Actualmente presentamos problemas técnicas, por favor inténtelo de nuevo.");
                        }
                        },
                        error: function(i){
                            alert("Todo mal");
                        }
                        });
                        
                    });
                        
                        
                }
                else if(h.exito=='vacio'){
                    $("#sub_evaluaciones").empty();
                    alert("No hay ninguna evaluación pendiente por realizar.");
                }
                else{
                    $("#sub_evaluaciones").empty();
                    alert("Tenemos problemas con nuestro servicio. Inténtelo más tarde por favor.");
                }
                },
                error: function(i){
                }
            });
        }
        
        //Crear array bidimensional
        
        function Create2DArray(rows) {
            var arr = [];

            for (var i=0;i<rows;i++) {
                arr[i] = [];
            }

            return arr;
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

