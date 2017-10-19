@extends('layouts.principal')

@section('title', '- Registro')

@section('content_aplicativos_registro')
<div id="page-wrapper">
	<form method="POST" action="http://10.100.45.50:8080/aplicativos/store" accept-charset="UTF-8" enctype="multipart/form-data">
	{!! csrf_field() !!}
	@include('alerts.request')
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Registro de Aplicativos</h1>
			</div>
			<ol class="breadcrumb">
				<li>
					<a href="/inicio">
						<i class="fa fa-dashboard"> Inicio</i>
					</a>
				</li>
				<li>
					<a href="/aplicativos">
						<i class="fa fa-list-alt"> Aplicativos</i>
					</a>
				</li>
				<li>
					<i class="fa fa-save"> Registro de Aplicativos</i>
				</li>
			</ol>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Agregar Nuevo Registro
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label>Aplicativo</label>
									<input class="form-control" name="nombre_aplicativo">
								</div>
								<div class="form-group">
									<label>URL del Aplicativo</label>
									<input class="form-control" name="link_aplicativo">
								</div>
							</div>
							<div class="col-lg-6">
								<label>Dirección IP del Servidor</label>
								<select class="form-control" name="ubicacion_servidor">
									<option selected="true" disabled="disabled">Seleccione...</option>
									<?php foreach ($equipos as $equipos) 
										echo '<option value= "'.$equipos['id'].'">'.$equipos['direccion_ip'].'</option>';
									?>
								</select>
							</div>
						</div>
					</div>
				</div>
				<button class="btn btn-primary" type="submit">Registrar</button>
			</div>
		</div>
	</form>
</div>
@stop