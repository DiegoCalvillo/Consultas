@extends('layouts.principal')

@section('title', '- Registro')

@section('content_usuario_registro')
<div id="page-wrapper">
    <form data-toggle="validator" method="POST" action="http://10.100.45.50:8080/usuarios/store" accept-charset="UTF-8" enctype="multipart/form-data">
    <!--<input type="hidden" name="_token" value="{{ csrf_token() }}">-->
    {!! csrf_field() !!}
    @include('alerts.request')
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Registro de Usuarios</h1>
            </div>
            <ol class="breadcrumb">
                <li>
                    <a href="/inicio">
                        <i class="fa fa-dashboard"> Inicio</i>
                    </a>
                </li>
                <li>
                    <a href="/usuarios">
                        <i class="fa fa-user"> Usuarios - Desarrollo y Soporte</i>
                    </a>
                </li>
                <li>
                    <i class="fa fa-save"> Registro de Usuarios</i>
                </li>
            </ol>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Datos Generales
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    {!! Form::label('full_name', 'Nombre') !!}
                                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                    <!--<span class="glyphicon glyphicon-ok form-control-feedback"></span>-->
                                </div>
                                <div class="form-group">
                                    {!! Form::label('full_name', 'Rol') !!}
                                    {!! Form::select('Puesto', $puestos, null, ['id' => 'nombre_puesto', 'class' => 'form-control', 'placeholder' => 'Selecciona']) !!}
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    {!! Form::label('full_name', 'SARE') !!}
                                    {!! Form::text('sare', null, ['class' => 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('full_name', 'Centro') !!}
                                    {!! Form::select('centros', $centros, null, ['id' => 'nombre_centro', 'class' => 'form-control', 'placeholder' => 'Selecciona']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Credenciales de Usuario
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group has">
                                    {!! Form::label('full_name', 'Nombre de Usuario') !!}
                                    {!! Form::text('username', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    {!! Form::label('full_name', 'Contraseña') !!}
                                    <input class="form-control" type="password" id="contrasena" name="password">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    {!! Form::label('full_name', 'Confirmar Contraseña') !!}
                                    <input class="form-control" type="password" name="confirmar_password" id="contrasena2">      
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <button class="btn btn-success" type="submit">Registrar</button>
        </div>
    </div>
    </form>
</div>

@stop