@extends('layouts.principal')

<?php $message=Session::get('message') ?>

	@if($message == 'store')
		<div class="alert alert-success" role="alert">
        Registro creado exitosamente <a href="/aplicativos" class="alert-link">Click aqui para quitar mensaje</a>.
        </div>
	@endif

	@if($message == 'edit')
		<div class="alert alert-success" role="alert">
        Registro actualizado exitosamente <a href="/aplicativos" class="alert-link">Click aqui para quitar mensaje</a>.
        </div>
	@endif

	@if($message == 'destroy')
		<div class="alert alert-danger" role="alert">
			Registro eliminado exitosamente <a href="/aplicativos" class="alert-link">Click aqui para quitar mensaje</a>.
		</div>
	@endif

@section('title', '- Aplicativos')

@section('content_aplicativos_desarrollo')
<div id="page-wrapper">
	<form method="POST" action="http://10.100.45.50:8080/aplicativos/search" accept-charset="UTF-8" enctype="multipart/form-data">
	{!! csrf_field() !!}
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Aplicativos</h1>
			</div>
			<ol class="breadcrumb">
				<li>
					<a href="/inicio">
						<i class="fa fa-dashboard"> Inicio</i>
					</a>
				</li>
				<li>
					<i class="fa fa-list-alt"> Aplicativos</i>
				</li>
			</ol>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group input-group">
					<input type="text" class="form-control" placeholder="Buscar aplicativo" name="nombre_aplicativo">
					<span class="input-group-btn">
						<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
					</span>
				</div>
			</div>
			<div>
				<a class="btn btn-default" href="/excel_aplicativos">Generar reporte de Excel</a>
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
									<th>Nombre Aplicativo</th>
									<th>Ubicación Servidor</th>
									<th>URL</th>
									@if(Auth::user()->puesto_id == 5)
										<th>Opciones</th>
									@endif
								</tr>
							</thead>
							<tbody>
								@foreach($aplicativos as $aplicativo)
									<tr>
										<td>{{ $aplicativo -> nombre_aplicativo }}</td>
										<td>{{ $aplicativo -> equipos -> direccion_ip }}</td>
										<td><a href=".$aplicativo['link_aplicativo'].">{{ $aplicativo -> link_aplicativo }}</a></td>
										@if(Auth::user()->puesto_id == 5)
											<td>
												<a href="{{ route('aplicativos/edit', ['id' => $aplicativo->id] )}}" class="btn btn-primary btn-xs glyphicon glyphicon-pencil"></a>
												<a href="{{ route('aplicativos/destroy', ['id' => $aplicativo->id] )}}" class="btn btn-danger btn-xs glyphicon glyphicon-trash"></a>
											</td>
										@endif
									</tr>
								@endforeach
							</tbody>
						</table>
						{{ $aplicativos->links() }}
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
@stop