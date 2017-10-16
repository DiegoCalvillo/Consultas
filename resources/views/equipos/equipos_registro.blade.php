@extends('layouts.principal')

@section('content_equipos_registro')
<div id="page-wrapper">
	<form method="POST" action="http://10.100.40.2:8080/equipos/store" accept-charset="UTF-8" enctype="multipart/form-data">
	{!! csrf_field() !!}
	@include('alerts.request')
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Registro de Equipos</h1>
			</div>
			<ol class="breadcrumb">
				<li>
					<a href="/inicio">
						<i class="fa fa-dashboard"> Inicio</i>
					</a>
				</li>
				<li>
					<a href="/equipos">
						<i class="fa fa-desktop"> Equipos</i>
					</a>
				</li>
				<li>
					<i class="fa fa-save"> Registro de Equipos</i>
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
									<label>Nombre del Equipo</label>
									<input class="form-control" name="nombre_equipo" id="nombre_equipo">
								</div>
								<div class="form-group">
									<label>Tipo de Equipo</label>
									<select class="form-control" name="tipoequipo_id">
									<option selected="true" disabled="disabled">Seleccione...</option>
										<?php foreach ($tipo_equipos as $tipos) {
											echo '<option value= "'.$tipos['id'].'">'.$tipos['nombre_tipo_equipo'].'</option>';
										}?>
									</select>
								</div>
								<div class="form-group">
									<label>Centro</label>
									<select class="form-control" name="centros_id">
									<option selected="true" disabled="disabled">Seleccione...</option>
										<?php foreach ($centros as $centros){
											echo '<option value="'.$centros['id'].'">'.$centros['nombre_centro'].'</centro>';
										}?>
									</select>
								</div>
								<div class="form-group">
									<label>Contraseña del Equipo</label>
									<input class="form-control" name="contraseña_equipo" id="contraseña_equipo">
								</div>
						</div>
						<div class="col-lg-6">
								<div class="form-group">
									<label>Dirección IP</label>
									<input class="form-control" name="direccion_ip" id="direccion_ip">
								</div>
								<div class="form-group">
									<label>Sistema Operativo</label>
									<select class="form-control" name="sistemas_ops_id">
									<option selected="true" disabled="disabled">Seleccione...</option>
										<?php foreach ($sistemas_ops as $sistemas) {
											echo '<option value= "'.$sistemas['id'].'">'.$sistemas['nombre_sistema_op'].'</option>';
										}?>
									</select>
								</div>
								<div class="form-group">
									<label>Nombre de Usuario</label>
									<input class="form-control" name="usuario_equipo" id="usuario_equipo">
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