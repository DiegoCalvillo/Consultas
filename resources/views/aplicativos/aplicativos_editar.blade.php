@extends('layouts.principal')

@section('title', '- Editar')

@section('content_aplicativos_editar')
<div id="page-wrapper">
	{!! Form::model($aplicativos, ['route' => 'aplicativos/update', 'method' => 'put', 'novalidate']) !!}
	{!! Form::hidden('id', $aplicativos->id) !!}
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Editar aplicativo: {{ $aplicativos->nombre_aplicativo }}</h1>
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
					<i class="fa fa-edit"> Editar Aplicativos</i>
				</li>
			</ol>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Editar registro
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									{!! Form::label('full_name', 'Aplicativo') !!}
									{!! Form::text('nombre_aplicativo', null, ['class' => 'form-control', 'required' => 'required']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('full_name', 'URL del Aplicativo') !!}
									{!! Form::text('link_aplicativo', null, ['class' => 'form-control', 'required' => 'required']) !!}
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{!! Form::label('full_name', 'Dirección IP del Servidor') !!}
									{!! Form::text('ubicacion_servidor', $aplicativos -> equipos -> direccion_ip, ['class' => 'form-control', 'required' => 'required']) !!}
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{!! Form::label('full_name', 'Cambiar la dirección IP') !!}
									<select class="form-control" name="ubicacion_servidor">
										<option value="{{ $aplicativos->equipos->id }}">Seleccione</option>
										<?php foreach($equipos as $equipos){
											echo '<option value= "'.$equipos['id'].'">'.$equipos['direccion_ip'].'</option>';
										}?>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
				{!! Form::submit('Guardar cambios', ['class' => 'btn btn-success']) !!}
			</div>
		</div>
	{!! Form::close() !!}
</div>
@stop