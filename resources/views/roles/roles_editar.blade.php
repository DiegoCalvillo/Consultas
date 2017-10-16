@extends('layouts.principal')

@section('title', '- Editar Rol')

@section('content_roles_editar')
<div id="page-wrapper">
	{!! Form::model($puestos, ['route' => 'puestos/update', 'method' => 'put', 'novalidate']) !!}
	{!! Form::hidden('id', $puestos->id) !!}
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Edición del Rol:  {{ $puestos->nombre_puesto }}</h1>
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
				<i class="fa fa-edit"> Edición de Roles de Usuario</i>
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
								{!! Form::label('full_name', 'Nombre del Rol') !!}
								{!! Form::text('nombre_puesto', null, ['class' => 'form-control', 'required' => 'required']) !!}
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								{!! Form::label('full_name', 'Descripción del Puesto') !!}
								{!! Form::text('descripcion_puesto', null, ['class' => 'form-control']) !!}
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