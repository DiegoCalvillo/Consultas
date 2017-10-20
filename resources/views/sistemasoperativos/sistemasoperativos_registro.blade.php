@extends('layouts.principal')

@section('title', '- Registro')

@section('content_sistemas_registro')
<div id="page-wrapper">
	<form method="POST" action="http://10.100.45.50:8080/sistemas/store" accept-charset="UTF-8" enctype="multipart/form-data">
	{!! csrf_field() !!}
		<div class="row">
		@include('alerts.request')
			<div class="col-lg-12">
				<h1 class="page-header">Registro de Sistemas Operativos</h1>
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
					<i class="fa fa-save"> Registro de Sistemas Operativos</i>
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
								<div class="form-group">
									<label>Agregar Sistema Operativo</label>
									<input type="text" name="nombre_sistema_op" class="form-control">
								</div>
							</div>
						</div>
					</div>
				</div>
				<button type="submit" class="btn btn-success">Registrar</button>
			</div>
		</div>
	</form>
</div>
@stop