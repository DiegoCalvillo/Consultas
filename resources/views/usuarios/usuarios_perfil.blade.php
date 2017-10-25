@extends('layouts.principal')

@section('title', '- Perfil')

@section('content_usuarios_perfil')
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Perfil de Usuario</h1>
		</div>
		<ol class="breadcrumb">
			<li>
				<a href="http://10.100.45.50:8080/inicio">
					<i class="fa fa-dashboard"> Inicio</i>
				</a>
			</li>
			<li>
				<a href="http://10.100.45.50:8080/usuarios">
					<i class="fa fa-user"> Usuarios - Desarrollo y soporte</i>
				</a>
			</li>
			<li>
				<i class="fa fa-male"> Perfil de {{ $users->name }}</i>
			</li>
		</ol>
	</div>
	<div class="row">
		<div class="col-lg-4 col-md-4">
			<div class="form-group">
				<img width="200" src="{!! asset('imagenes/perfil.png') !!}" sizes="64x64">
			</div>
			<div>
				<div class="form-group">
					<b>{{ $users->name }}</b>
				</div>
			</div>
		</div>
		<div class="col-lg-8 col-md-8">
			<div class="form-group">
				<b>INFORMACIÓN GENERAL</b>
			</div>
			<table width="100%">
				<tbody>
					<tr>
						<th>SARE:</th>
						<td>{{ $users->SARE }}</td>
					</tr>
					<tr>
						<th>Centro:</th>
						<td>{{ $users->centros->nombre_centro }}</td>
					</tr>
					<tr>
						<th>Rol de Usuario:</th>
						<td>{{ $users->puesto->nombre_puesto }}</td>
					</tr>
				</tbody>
			</table>
			<br>
			<div class="form-group">
				<b>DATOS DE USUARIO</b>
			</div>
			<table width="100%">
				<tbody>
					<tr>
						<th>Nombre de Usuario:</th>
						<td>{{ $users->username }}</td>
					</tr>
					<tr>
						<th>Estatus:</th>
						<td>{{ $users->estatus->nombre_estatus }}</td>
					</tr>
					<tr>
						<th>Ultimo Inicio de Sesión:</th>
						<td>{{ $users->last_login }}</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
@stop