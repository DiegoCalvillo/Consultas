@extends('layouts.principal')

<?php $message=Session::get('message') ?>

	@if($message == 'store')
		<div class="alert alert-success" role="alert">
        Registro creado exitosamente <a href="/equipos" class="alert-link">Click aqui para quitar mensaje</a>.
        </div>
	@endif

	@if($message == 'edit')
		<div class="alert alert-success" role="alert">
        Registro modificado exitosamente <a href="/equipos" class="alert-link">Click aqui para quitar mensaje</a>.
        </div>
	@endif

@section('title', '- Equipos')

@section('content_equipos_desarrollo')
<div id="page-wrapper">
	<form method="POST" action="http://10.100.45.50:8080/equipos/search" accept-charset="UTF-8" enctype="multipart/form-data">
	{!! csrf_field() !!}
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Equipos</h1>
			</div>
			<ol class="breadcrumb">
				<li>
					<a href="/inicio">
						<i class="fa fa-dashboard"> Inicio</i>
					</a>
				</li>
				<li>
					<i class="fa fa-desktop"> Equipos</i>
				</li>
			</ol>
		</div>
	<div class="row">
		<div class="col-lg-6">
			<div class="form-group input-group">
				<input type="text" class="form-control" placeholder="Buscar equipo" name="nombre_equipo" required>
				<span class="input-group-btn">
					<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
				</span>
			</div>
		</div>
		<div class="col-lg-6">
			<a class="btn btn-default" href="/excel">Generar reporte de Excel</a>
		</div>
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					Registros
				</div>
				<div class="panel-body">
					<table class="table table-striped table-bordered table-hover" width="100%" id="dataTables-example">
						<thead>
							<tr>
								<th>Nombre del Equipo</th>
								<th>Dirección IP</th>
								<th>Tipo de Equipo</th>
								<th>Sistema Operativo</th>
								<th>Usuario</th>
								<th>Contraseña de Usuario</th>
								<th>Centro</th>
								<th>Estatus</th>
								@if(Auth::user()->puesto_id == 5)
								<th>Opciones</th>
								@endif
							</tr>
						</thead>
						<tbody>
							@foreach($equipos as $equipo)
								<tr>
									<td>{{ $equipo -> nombre_equipo }}</td>
									<td>{{ $equipo -> direccion_ip }}</td>
									<td>{{ $equipo -> TipoEquipo->nombre_tipo_equipo }}</td>
									<td>{{ $equipo -> SistemasOp -> nombre_sistema_op }}</td>
									<td>{{ $equipo -> usuario_equipo }}</td>
									<td>{{ $equipo -> contraseña_equipo }}</td>
									<td>{{ $equipo -> centros -> nombre_centro }}</td>
									<td>{{ $equipo -> Estatus -> nombre_estatus }}</td>
									@if(Auth::user()->puesto_id == 5)
									<td>
										<a class="btn btn-primary btn-xs glyphicon glyphicon-pencil" href="{{ route('equipos/edit', ['id' => $equipo->id] )}}"></a>
									</td>
									@endif
								</tr>
							@endforeach
						</tbody>
					</table>
					{{ $equipos->links() }}
				</div>
			</div>
		</div>
	</div>
	</form>
</div>
@stop