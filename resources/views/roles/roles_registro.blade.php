@extends('layouts.principal')

@section('title', '- Registro')

@section('content_roles_registro')
<div id="page-wrapper">
	<form method="POST" action="http://10.100.45.50:8080/puestos/store" accept-charset="UTF-8" enctype="multipart/form-data">
		{!! csrf_field() !!}
		@include('alerts.request')
		<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Registro de Roles de Usuario</h1>
		</div>
		<ol class="breadcrumb">
			<li>
				<a href="/inicio">
					<i class="fa fa-dashboard"> Inicio</i>
				</a>
			</li>
			<li>
				<a href="/puestos">
					<i class="fa fa-sitemap"> Roles de Usuario</i>
				</a>
			</li>
			<li>
				<i class="fa fa-save"> Registro de Roles de Usuario</i>
			</li>
		</ol>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					Agregar Nuevo
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label>Nombre del Rol</label>
								<input class="form-control" name="nombre_puesto" id="nombre_puesto">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>Agregue una breve descripción</label>
								<input class="form-control" name="descripcion_puesto" id="descripcion_puesto">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<button type="submit" class="btn btn-primary">Registrar</button>
	</form>
</div>
@stop