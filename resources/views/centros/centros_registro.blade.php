@extends('layouts.principal')

@section('title', '- Registro')

@section('content_centros_registro')
<div id="page-wrapper">
	<form method="POST" action="http://10.100.45.50:8080/centros/store" accept-charset="UTF-8" enctype="multipart/form-data">
	{!! csrf_field() !!}
	@include('alerts.request')
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Registro de Centros</h1>
			</div>
			<ol class="breadcrumb">
				<li>
					<a href="http://10.100.45.50:8080/inicio">
						<i class="fa fa-dashboard"> Inicio</i>
					</a>
				</li>
				<li>
					<a href="http://10.100.45.50:8080/centros">
						<i class="fa fa-home"> Centros</i>
					</a>
				</li>
				<li>
					<i class="fa fa-save"> Registro de Centros</i>
				</li>
			</ol>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Registro de centro
					</div>
					<div class="panel-body">
						<div class="form-group">
							<label>Agregar Centro</label>
							<input class="form-control" name="nombre_centro" id="nombre_centro">
						</div>
					</div>
				</div>
				<button class="btn btn-success" type="submit">Registrar</button>
			</div>
		</div>
	</form>
</div>
@stop