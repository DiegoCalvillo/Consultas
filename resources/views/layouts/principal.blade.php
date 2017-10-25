<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        window.Laravel = <?php 
            echo json_encode([
                'csrfToken' => csrf_token(),
                ]); ?>
    </script>
    <style type="text/css">
        .logo
        {
            float: left;
        }
    </style>

    <title>MDY Consultas @yield('title')</title>

    <!-- Bootstrap Core CSS 
    <link href="css/bootstrap.min.css" rel="stylesheet">-->
    {!!Html::style('../vendor/bootstrap/css/bootstrap.min.css')!!}


    <!-- MetisMenu CSS 
    <link href="css/metisMenu.min.css" rel="stylesheet"> -->
    {!!Html::style('css/metisMenu.min.css')!!}

    <!-- Logo de MDY icono de pagina -->
    <link rel="icon" type="text/css" href="MDY_Logo.png" sizes="32x32">

    <!-- DataTables CSS 
    <link href="css/dataTables.bootstrap.css" rel="stylesheet"> -->
    {!!Html::style('css/dataTables.bootstrap.css')!!}

    <!-- DataTables Responsive CSS 
    <link href="css/dataTables.responsive.css" rel="stylesheet"> -->
    {!!Html::style('css/dataTables.responsive.css')!!}

    <!-- Custom CSS 
    <link href="css/sb-admin-2.css" rel="stylesheet"> -->
    {!!Html::style('css/sb-admin-2.css')!!}

    <!-- Morris Charts CSS 
    <link href="css/morris.css" rel="stylesheet"> -->
    {!!Html::style('css/morris.css')!!}

    <!-- Custom Fonts 
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
    {!!Html::style('../vendor/font-awesome/css/font-awesome.min.css')!!}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">
         @include('alerts.errors')
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header" style="margin-top: -5px;margin-left: -5px;">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/inicio">
                    <img width="120" src="{!! asset('MDY_Logo.png') !!}" sizes="32x32" style="margin-left: -5px;margin-top: -10px;">
                </a>
                <a class="navbar-brand" href="/inicio">Sistema de Consultas</a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a href="http://10.100.45.50:8080/mensajes">Enviar Mensaje</a> 
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i><span class="badge">1</span> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Diego Calvillo</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>{!!Auth::user()->name!!}</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Ver Perfil</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Cerrar sesión</a>
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
                        <li>
                            <a href="http://10.100.45.50:8080/inicio"><i class="fa fa-dashboard fa-fw"></i> Inicio</a>
                        </li>
                        <!--Solamente se verá esta parte los que tengan permiso de administrador -->
                        @if(Auth::user()->puesto_id == 5)                       
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Gestión de Usuarios<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Usuarios<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="http://10.100.45.50:8080/usuarios"> Listado de Usuarios</a>
                                        </li>
                                        <li>
                                            <a href="http://10.100.45.50:8080/usuarios/create"> Alta de Usuarios</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Roles de Usuario<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="http://10.100.45.50:8080/puestos">Listado de Roles de Usuario</a>
                                        </li>
                                        <li>
                                            <a href="http://10.100.45.50:8080/puestos/create"> Alta de Roles de Usuarios</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Centros<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="http://10.100.45.50:8080/centros">Listado de Centros</a>
                                        </li>
                                        <li>
                                            <a href="http://10.100.45.50:8080/centros/create">Alta de Centros</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-list-alt fa-fw"></i> Panel de Control<span class="fa arrow"></span></a>
                        </li>
                        @endif    
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Inventarios<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Equipos<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="http://10.100.45.50:8080/equipos">Listado de Equipos</a>
                                        </li>
                                        @if(Auth::user()->puesto_id == 5)
                                        <li>
                                            <a href="http://10.100.45.50:8080/equipos/create"> Alta de Equipos</a>
                                        </li>
                                        @endif
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"> Sistemas Operativos<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="http://10.100.45.50:8080/sistemas"> Listado de Sistemas Operativos</a>
                                        </li>
                                        @if(Auth::user()->puesto_id == 5)
                                        <li>
                                            <a href="http://10.100.45.50:8080/sistemas/create"> Alta de Sistemas Operativos</a>
                                        </li>
                                        @endif
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"> Tipos de Equipo<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="http://10.100.45.50:8080/tiposequipos"> Listado de Tipos de Equipos</a>
                                        </li>
                                        @if(Auth::user()->puesto_id == 5)
                                        <li>
                                            <a href="http://10.100.45.50:8080/tiposequipos/create"> Alta de Tipos de Equipos</a>
                                        </li>
                                        @endif
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Aplicativos<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="http://10.100.45.50:8080/aplicativos"> Listado de Aplicativos</a>
                                        </li>
                                        @if(Auth::user()->puesto_id == 5)
                                        <li>
                                            <a href="http://10.100.45.50:8080/aplicativos/create">Alta de Nuevos Aplicativos</a>
                                        </li>
                                        @endif
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Gráficas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="http://10.100.45.50:8080/graficas">Flot Gráficas</a>
                                </li>
                                <li>
                                    <a href="morris.html">Morris.js Charts</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="http://10.100.45.50:8080/tablas"><i class="fa fa-table fa-fw"></i> Tablas</a>
                        </li>
                        <li>
                            <a href="http://10.100.45.50:8080/panel"><i class="fa fa-edit fa-fw"></i> Panel</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Panels and Wells</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="/notificaciones">Notifications</a>
                                </li>
                                <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="/icons"> Icons</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/blank">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

@yield('content_inicio')
@yield('content_tables')
@yield('content_forms')
@yield('content_flot')
<!--Usuarios-->
@yield('content_usuarios_desarrollo')
@yield('content_usuarios_perfil')
@yield('content_usuarios_direccion')
@yield('content_usuario_registro')
<!--Equipos-->
@yield('content_equipos_desarrollo')
@yield('content_equipos_registro')
@yield('content_equipos_editar')
<!--Aplicativos-->
@yield('content_aplicativos_desarrollo')
@yield('content_aplicativos_registro')
@yield('content_aplicativos_editar')
<!--Roles-->
@yield('content_roles')
@yield('content_roles_registro')
@yield('content_roles_editar')
<!-- Tipos de Equipos -->
@yield('content_tipos')
@yield('content_tipoequipos_registro')
@yield('content_tipoequipos_editar')
<!-- Centros -->
@yield('content_centros')
@yield('content_centros_registro')
@yield('content_centros_editar')
<!--Sistemas Operativos-->
@yield('content_sistemas_desarrollo')
@yield('content_sistemas_registro')
@yield('content_sistemas_editar')
<!--Mensajes-->
@yield('content_mensajes')
<!--Miscelaneo-->
@yield('content_blank')
@yield('content_icons')
@yield('content_notificaciones') 
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    {!!Html::script('js/jquery.min.js')!!}

    <!-- Bootstrap Core JavaScript  -->
    {!!Html::script('/vendor/bootstrap/js/bootstrap.min.js')!!}

    <!-- Metis Menu Plugin JavaScript  -->
    {!!Html::script('js/metisMenu.min.js')!!}

     <!-- DataTables JavaScript  -->
    {!!Html::script('js/jquery.dataTables.min.js')!!}
    {!!Html::script('js/dataTables.bootstrap.min.js')!!}
    {!!Html::script('js/dataTables.responsive.js')!!}


    <!-- Morris Charts JavaScript -->
    {!!Html::script('js/raphael.min.js')!!}
    {!!Html::script('vendor/morrisjs/morris.min.js')!!}
    {!!Html::script('js/morris-data.js')!!}

    <!-- Custom Theme JavaScript -->
    {!!Html::script('js/sb-admin-2.js')!!}

     <!-- Flot Charts JavaScript -->
    {!!Html::script('js/excanvas.min.js')!!}
    {!!Html::script('js/jquery.flot.js')!!}
    {!!Html::script('js/jquery.flot.pie.js')!!}
    {!!Html::script('js/jquery.flot.resize.js')!!}
    {!!Html::script('js/jquery.flot.time.js')!!}
    {!!Html::script('js/jquery.flot.tooltip.min.js')!!}
    {!!Html::script('js/flot-data.js')!!}
</body>

</html>
