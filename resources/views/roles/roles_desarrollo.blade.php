@extends('layouts.principal')

<?php $message = Session::get('message') ?>
	@if($message == 'store')
		<div class="alert alert-success" role="alert">
			Registro creado exitosamente <a href="/puestos" class="alert-link">Click aqui para quitar mensaje</a>.
		</div>
	@endif

	@if($message == 'edit')
		<div class="alert alert-success" role="alert">
			Registro modificado exitosamente <a href="/puestos" class="alert-link">Click aqui para quitar mensaje</a>.
		</div>
	@endif
@section('title', '- Roles')

@section('content_roles')
<div id="page-wrapper">
	<form method="POST" action="http://10.100.45.50:8080/puestos/search" accept-charset="UTF-8" enctype="multipart/form-data">
	{!! csrf_field() !!}
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"> Roles de Usuario</h1>
			</div>
			<ol class="breadcrumb">
				<li>
					<a href="/inicio">
						<i class="fa fa-dashboard"> Inicio</i>
					</a>
				</li>
				<li>
					<i class="fa fa-sitemap"> Roles de Usuario</i>
				</li>
			</ol>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group input-group">
					<input type="text" class="form-control" placeholder="Buscar Rol de Usuario" name="nombre_puesto" required>
					<span class="input-group-btn">
						<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
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
									<th>Nombre del Puesto</th>
									<th>Descripcion</th>
									<th>Opciones</th>
								</tr>
							</thead>
							<tbody>
								@foreach($puestos as $puesto)
									<tr>
										<td>{{ $puesto -> nombre_puesto }}</td>
										<td>{{ $puesto -> descripcion_puesto }}</td>
										<td>
											<a class="btn btn-primary btn-xs glyphicon glyphicon-pencil" href="{{ route('puestos/edit', ['id' => $puesto -> id] )}}"></a>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					{{ $puestos->links() }}
				</div>
			</div>
		</div>
	</div>
	</form>
</div>
@stop