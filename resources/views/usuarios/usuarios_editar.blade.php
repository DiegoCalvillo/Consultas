@extends('layouts.principal')

@section('title', '- Editar')

@section('content_usuario_registro')
<div id="page-wrapper">
    {!! Form::model($users, ['route' => 'usuarios/update', 'method' => 'put', 'novalidate' ]) !!}
    {!! Form::hidden('id', $users->id) !!}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    @include('alerts.request')
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Edición del Usuario: {{ $users->name }} </h1>
            </div>
            <ol class="breadcrumb">
                <li>
                    <a href="/inicio">
                        <i class="fa fa-dashboard"> Inicio</i>
                    </a>
                </li>
                <li>
                    <a href="/usuarios">
                        <i class="fa fa-user"> Usuarios - Desarrollo y soporte</i>
                    </a>
                </li>
                <li>
                    <i class="fa fa-edit"> Edición de Usuarios</i>
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
                                        {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required', 'readonly' => 'readonly']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('full_name', 'Rol') !!}
                                        {!! Form::text('puesto_id', $users->puesto->nombre_puesto, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('full_name', 'Centro') !!}
                                        {!! Form::text('centro_id', $users->centros->nombre_centro, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('full_name', 'Estatus') !!}
                                        {!! Form::text('estatus_id', $users->estatus->nombre_estatus, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
                                    </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    {!! Form::label('full_name', 'SARE') !!}
                                    {!! Form::text('SARE', null, ['class' => 'form-control', 'required' => 'required', 'readonly' => 'readonly']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('full_name', 'Cambiar Rol') !!}
                                    <select class="form-control" name="puesto_id">
                                    <option value="{{ $users->puesto->id }}">Seleccione</option>
                                        <?php foreach ($puestos as $puestos) {
                                            echo '<option value= "'.$puestos['id'].'">'.$puestos['nombre_puesto'].'</option>';
                                        }?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('full_name', 'Cambiar Centro') !!}
                                    <select class="form-control" name="centro_id">
                                    <option value="{{ $users->centros->id }}">Seleccione</option>
                                        <?php foreach ($centros as $centros) {
                                            echo '<option value= "'.$centros['id'].'">'.$centros['nombre_centro'].'</option>';
                                        }?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('full_name', 'Cambiar Estatus') !!}
                                    <select class="form-control", name="estatus_id">
                                        <option value="{{ $users->estatus_id }}">Seleccione</option>
                                        <?php foreach ($estatus as $estatus) {
                                            echo '<option value= "'.$estatus['id'].'">'.$estatus['nombre_estatus'].'</option>';
                                        }?>
                                    </select>
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
                                <div class="form-group">
                                    {!! Form::label('full_name', 'Nombre de Usuario') !!}
                                    {!! Form::text('username', null, ['class' => 'form-control', 'required' => 'required', 'readonly' => 'readonly']) !!}
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    {!! Form::label('full_name',  'Cambiar Contraseña') !!}
                                    <input class="form-control" required="" type="password" name="password" id="contrasena">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                {!! Form::label('full_name', 'Confirmar Contraseña') !!}
                                <input class="form-control" required="" type="password" name="confirmar_password" id="contrasena2">
                            </div>
                        </div>
                    </div>
                </div>
            <!--<button class="btn btn-success" type="submit">Guardar cambios</button>-->
            {!! Form::submit('Guardar cambios', ['class' => 'btn btn-success']) !!}
      
        </div>
    </div>
  {!! Form::close() !!}
</div>
@stop