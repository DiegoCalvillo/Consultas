@extends('layouts.principal')

@section('title', '- Editar Sistemas')

@section('content_sistemas_editar')
<div id="page-wrapper">
	{!! Form::model($sistemas, ['route' => 'sistemas/update', 'method' => 'put', 'novalidate']) !!}
	{!! Form::hidden('id', $sistemas->id) !!}
	{!! csrf_field() !!}
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Editar {{ $sistemas -> nombre_sistema_op }}</h1>
			</div>
			<ol class="breadcrumb">
				<li>
					<a href="/inicio">
						<i class="fa fa-dashboard"> Inicio</i>
					</a>
				</li>
				<li>
					<a href="/sistemas">
						<i class="fa fa-windows"> Sistemas Operativos</i>
					</a>
				</li>
				<li>
					<i class="fa fa-edit"> Edición de Sistemas Operativos</i>
				</li>
			</ol>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Registro
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								{!! Form::label('full_name', 'Cambiar nombre de Sistema Operativo') !!}
								{!! Form::text('nombre_sistema_op', null, ['class' => 'form-control', 'required' => 'required']) !!}
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