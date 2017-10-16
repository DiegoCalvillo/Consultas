@extends('layouts.principal')

@section('title', '- Editar')

@section('content_tipoequipos_editar')
<div id="page-wrapper">
{!! Form::model($tipos, ['route' => 'tiposequipos/update', 'method' => 'put', 'novalidate']) !!}
{!! Form::hidden('id', $tipos->id) !!}
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Edición de: {{ $tipos->nombre_tipo_equipo }}</h1>
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
				<i class="fa fa-edit"> Edicion de Tipos de Equipos</i>
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
								{!! Form::label('full_name', 'Nombre del Tipo de Equipo') !!}
								{!! Form::text('nombre_tipo_equipo', null, ['class' => 'form-control', 'required' => 'required']) !!}
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								{!! Form::label('full_name', 'Breve descripción del tipo') !!}
								{!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	{!! Form::submit('Guardar cambios', ['class' => 'btn btn-success']) !!}
{!! Form::close() !!}
</div>
@stop