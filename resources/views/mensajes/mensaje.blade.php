@extends('layouts.principal')

@section('title', '- Mensajes')

@section('content_mensajes')
<div id="page-wrapper">
	<form method="POST" action="http://10.100.45.50:8080/mensajes/store">
		{!! csrf_field() !!}
		@include('alerts.success')
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Envío de Mensajes</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<select class="form-control" name="recibe_id">
						<option disabled="disabled" value="">Selecciona el Usuario</option>
						<?php foreach($users as $users){
							echo '<option value="'.$users['id'].'">'.$users['name'].'</option>';
						}?>
					</select>
				</div>
				<div class="form-group">
					<textarea name="cuerpo_mensaje" class="form-control" placeholder="Escribe tu mensaje"></textarea>
				</div>
				<div class="form-group">
					<button class="btn btn-primary btn-block" type="submit">Enviar Mensaje</button>
				</div>
			</div>
		</div>
	</form>
</div>
@stop