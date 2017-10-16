@extends('layouts.principal')

@section('title', '- Editar')

@section('content_equipos_editar')
<div id="page-wrapper">
	<!--<form method="POST" action="http://10.100.40.2:8080/equipos/store" accept-charset="UTF-8" enctype="multipart/form-data">-->
	{!! Form::model($equipos, ['route' => 'equipos/update', 'method' => 'put', 'novalidate']) !!}
	{!! Form::hidden('id', $equipos->id) !!}
	{!! csrf_field() !!}
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edición del Equipo: {{ $equipos->nombre_equipo }}</h1>
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
					<i class="fa fa-edit"> Edición de Equipos</i>
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
									{!! Form::label('full_name', 'Nombre') !!}
									{!! Form::text('nombre_equipo', null, ['class' => 'form-control', 'required' => 'required']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('full_name', 'Tipo de Equipo') !!}
									{!! Form::text('tipoequipo_id', $equipos->TipoEquipo->nombre_tipo_equipo, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('full_name', 'Centro') !!}	
									{!! Form::text('centros_id', $equipos->centros->nombre_centro, ['class' => 'form-control', 'readonly' => 'readonly']) !!}								
								</div>
								<div class="form-group">
									{!! Form::label('full_name', 'Sistema Operativo') !!}
									{!! Form::text('sistemas_ops_id', $equipos -> SistemasOp -> nombre_sistema_op, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('full_name', 'Nombre de Usuario') !!}
									{!! Form::text('usuario_equipo', null, ['class' => 'form-control', 'required'  => 'required']) !!}
								</div>
						</div>
						<div class="col-lg-6">
								<div class="form-group">
									{!! Form::label('full_name', 'Dirección IP') !!}
									{!! Form::text('direccion_ip', null, ['class' => 'form-control', 'required' => 'required']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('full_name', 'Cambiar Tipo de Equipo') !!}
									<select class="form-control" name="tipoequipos_id" required>
									<option value="{{ $equipos->TipoEquipo->id }}">Seleccione</option>
										<?php foreach ($tipo_equipos as $tipos) {
											echo '<option value= "'.$tipos['id'].'">'.$tipos['nombre_tipo_equipo'].'</option>';
										}?>
									</select>
								</div>
								<div class="form-group">
									{!! Form::label('full_name', 'Cambiar el Centro') !!}
									<select class="form-control" name="centros_id" required>
									<option value="{{ $equipos->centros->id }}">Seleccione</option>
										<?php foreach ($centros as $centros) {
											echo '<option value= "'.$centros['id'].'">'.$centros['nombre_centro'].'</option>';
										} ?>
									</select>
								</div>
								<div class="form-group">
									{!! Form::label('full_name', 'Cambiar Sistema Operativo') !!}
									<select class="form-control" name="sistemas_ops_id" required>
									<option value="{{ $equipos->SistemasOp->id }}">Seleccione</option>
										<?php foreach ($sistemas_ops as $sistemas) {
											echo '<option value= "'.$sistemas['id'].'">'.$sistemas['nombre_sistema_op'].'</option>';
										} ?>
									</select>
								</div>
								<div class="form-group">
									{!! Form::label('full_name', 'Contraseña del Equipo') !!}
									{!! Form::text('contraseña_equipo', null, ['class' => 'form-control', 'required' => 'required']) !!}
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<!--<button class="btn btn-primary" type="submit"> Guardar cambios</button>	-->
		{!! Form::submit('Guardar cambios', ['class' => 'btn btn-success']) !!}
	<!--</form>-->
	{!! Form::close() !!}
</div>
@stop