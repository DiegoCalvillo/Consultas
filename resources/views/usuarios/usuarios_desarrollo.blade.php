@extends('layouts.principal')

<?php $message=Session::get('message')?>
<!-- Mensaje que se despliega cuando se crea un nuevo registro -->
    @if($message == 'store')
        <div class="alert alert-success" role="alert">
        Usuario creado exitosamente <a href="/usuarios" class="alert-link">Click aqui para quitar mensaje</a>.
        </div>
    @endif
<!-- Mensaje que se despliega cuando se actualiza un registro que ya existe -->    
    @if($message == 'edit')
        <div class="alert alert-success" role="alert">
        Usuario actualizado exitosamente <a href="/usuarios" class="alert-link">Click aqui para quitar mensaje</a>.
        </div>
    @endif

@section('title', '- Usuarios') <!-- Titulo concatenado -->

@section('content_usuarios_desarrollo')

        <div id="page-wrapper">
            <form method="POST" action="http://10.100.45.50:8080/usuarios/search" accept-charset="UTF-8" enctype="multipart/form-data">
            <!--<input type="hidden" name="_token" value="{{ csrf_token() }}">-->
            {!! csrf_field() !!}
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Usuarios</h1>
                </div>
                <ol class="breadcrumb">
                    <li>
                        <a href="inicio">
                            <i class="fa fa-dashboard"> Inicio</i>
                        </a>
                    </li>
                    <li>
                        <i class="fa fa-user"> Usuarios - Desarrollo y soporte</i>
                    </li>
                </ol>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group input-group">
                        <input type="text" class="form-control" placeholder="Buscar usuario" required="Debe ingresar un Nombre" name="name" id="name">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Registros
                        </div>
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Estatus</th>
                                        <th>Ultimo Inicio de Sesión</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{ $user -> name }}</td>
                                            <td>{{ $user -> estatus -> nombre_estatus }}</td>
                                            <td>{{ $user -> last_login }}</td>
                                            <td>
                                                <a class="btn btn-primary btn-xs glyphicon glyphicon-pencil" href="{{ route('usuarios/edit', ['id' => $user->id] )}}"></a>
                                                <a class="btn btn-success btn-xs glyphicon glyphicon-user" href="{{ route('usuarios/show', ['id' => $user->id] )}}"></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!--<button type="button" class="btn btn-primary" href="/usuarios_registro">Agregar Usuarios</button>-->
            </form>
          
        </div>
        <!-- /#page-wrapper -->
@stop
