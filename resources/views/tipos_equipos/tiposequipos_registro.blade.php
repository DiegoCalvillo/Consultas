@extends('layouts.principal')

@section('title', '- Registro')

@section('content_tipoequipos_registro')
<div id="page-wrapper">
	<form method="POST" action="http://10.100.40.2:8080/tiposequipos/store" accept-charset="UTF-8" enctype="multipart/form-data">
	{!! csrf_field() !!}
	@include('alerts.request')
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Registro de Tipos de Equipos</h1>
			</div>
			<ol class="breadcrumb">
				<li>
					<a href="/inicio">
						<i class="fa fa-dashboard"> Inicio</i>
					</a>	
				</li>
				<li>
					<a href="/tiposequipos">
						<i class="fa fa-tablet"> Tipos de Equipos</i>
					</a>
				</li>
				<li>
					<i class="fa fa-save"> Registro de Tipos de Equipos</i>
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
									<label class="control-label">Nombre del Tipo de Equipo</label>
									<input class="form-control" id="nombre_tipo_equipo" name="nombre_tipo_equipo">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label class="control-label">Breve descripción del tipo</label>
									<input class="form-control" name="descripcion" id="descripcion">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<button class="btn btn-primary" type="submit">Registrar</button>
	</form>
</div>
@stop