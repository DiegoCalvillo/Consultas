<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MDY Consultas - Login</title>

    <!-- Bootstrap Core CSS 
    <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    {!! Html::style('css/bootstrap.min.css') !!}

    <!-- Logo de MDY icono de pagina -->
    <link rel="icon" type="text/css" href="MDY_Logo.png" sizes="32x32">

    <!-- MetisMenu CSS
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet"> -->
    {!! Html::style('vendor/metisMenu/metisMenu.min.css') !!}

    <!-- Custom CSS 
    <link href="css/sb-admin-2.css" rel="stylesheet"> -->
    {!! Html::style('css/sb-admin-2.css') !!}

    <!-- Custom Fonts 
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
    {!! Html::style('../vendor/font-awesome/css/font-awesome.min.css') !!}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<br>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">MDY Sistema de Consultas</h3>
                    </div>
                    @include('alerts.errors')
                    @include('alerts.request')
                    <div class="panel-body">
                        <form role="form" method="POST" action="http://10.100.45.50:8080/login/store">
                        <!--<input type="hidden" name="_token" value="{{ csrf_token() }}">-->
                        {!! csrf_field() !!}
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Nombre de usuario" name="username" required autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Contraseña" name="password" type="password" value="" required>
                                </div>
                                <div class="checkbox">
                                    <a href="">Olvide mi Contraseña</a>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <!--<a type="" class="btn btn-lg btn-success btn-block">Login</a>-->
                                <button type="submit" class="btn btn-lg btn-success btn-block">Iniciar sesión</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery
    <script src="../vendor/jquery/jquery.min.js"></script>  -->
    {!! Html::script('js/jquery.min.js') !!}

    <!-- Bootstrap Core JavaScript 
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script> -->
    {!!Html::script('/vendor/bootstrap/js/bootstrap.min.js')!!}

    <!-- Metis Menu Plugin JavaScript 
    <script src="../vendor/metisMenu/metisMenu.min.js"></script> -->
    {!!Html::script('js/metisMenu.min.js')!!}

    <!-- Custom Theme JavaScript 
    <script src="../dist/js/sb-admin-2.js"></script> -->
    {!!Html::script('js/sb-admin-2.js')!!}

</body>

</html>
