@extends('layouts.principal')

<?php $message = Session::get('message') ?>

	@if($message == 'store')
        <div class="alert alert-success" role="alert">
        Registro creado exitosamente <a href="/sistemas" class="alert-link">Click aqui para quitar mensaje</a>.
        </div>
    @endif

    @if($message == 'edit')
    	<div class="alert alert-success" role="alert">
        Registro actualizado exitosamente <a href="/sistemas" class="alert-link">Click aqui para quitar mensaje</a>.
        </div>
    @endif

    @if($message == 'destroy')
    	<div class="alert alert-danger" role="alert">
        Registro eliminado exitosamente <a href="/sistemas" class="alert-link">Click aqui para quitar mensaje</a>.
        </div>
    @endif

@section('title', '- Sistemas Operativo')

@section('content_sistemas_desarrollo')
<div id="page-wrapper">
	<form method="POST" action="http://10.100.40.2:8080/sistemas/search" accept-charset="UTF-8" enctype="multipart/form-data">
	{!! csrf_field() !!}
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sistemas Operativos</h1>
			</div>
			<ol class="breadcrumb">
				<li>
					<a href="/inicio">
						<i class="fa fa-dashboard"> Inicio</i>
					</a>
				</li>
				<li>
					<i class="fa fa-windows"> Sistemas Operativos</i>
				</li>
			</ol>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group input-group">
					<input type="text" class="form-control" placeholder="Buscar" name="nombre_sistema_op" required>
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
									<th>Sistema Operativo</th>
									@if(Auth::user()->puesto_id == 5)
									<th>Opciones</th>
									@endif
								</tr>
							</thead>
							<tbody>
								@foreach($sistemas_ops as $sistemas)
									<tr>
										<td>{{ $sistemas -> nombre_sistema_op }}</td>
										@if(Auth::user()->puesto_id == 5)
										<td>
											<a href="{{ route('sistemas/edit', ['id' => $sistemas->id] )}}" class="btn btn-primary btn-xs glyphicon glyphicon-pencil"></a>
											<a href="{{ route('sistemas/destroy', ['id' => $sistemas->id] )}}" class="btn btn-danger btn-xs glyphicon glyphicon-trash"></a>
										</td>
										@endif
									</tr>
								@endforeach
							</tbody>
						</table>
						<nav aria-label="Page navigation">
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="Previus">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                             <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
@stop