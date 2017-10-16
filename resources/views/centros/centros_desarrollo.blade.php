@extends('layouts.principal')

<?php $message = Session::get('message') ?>

	@if($message == 'store')
		<div class="alert alert-success" role="alert">
        Registro creado exitosamente <a href="/centros" class="alert-link">Click aqui para quitar mensaje</a>.
        </div>
	@endif

	@if($message == 'destroy')
		<div class="alert alert-danger" role="alert">
			Registro eliminado <a href="/centros" class="alert-link">Click aqui para quitar mensaje</a>.
		</div>
	@endif

@section('title', '- Centros')

@section('content_centros')
<div id="page-wrapper">
	<form method="POST" action="http://10.100.45.50:8080/centros/search" accept-charset="UTF-8" enctype="multipart/form-data">
	{!! csrf_field() !!}
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Centros</h1>
			</div>
			<ol class="breadcrumb">
				<li>
					<a href="http://10.100.45.50:8080/inicio">
						<i class="fa fa-dashboard"> Inicio</i>
					</a>
				</li>
				<li>
					<i class="fa fa-home"> Centros</i>
				</li>
			</ol>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group input-group">
					<input type="text" class="form-control" placeholder="Buscar centro" name="nombre_centro" required>
					<span class="input-group-btn">
						<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
					</span>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Registros
					</div>
					<div class="panel-body">
						<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
							<thead>
								<tr>
									<th>Centro</th>
								</tr>
							</thead>
							<tbody>
								@foreach($centros as $centros)
									<tr>
										<td>{{ $centros->nombre_centro }}</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
@stop