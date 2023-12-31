@extends('layouts.app')
@section('content')
<div class="container-fluid">
	<div class="row">
		@include('admin.menu')
		<div class="col-sm-10">
			{!! Form::open(['route'=>['ruta.update',$ruta],'method'=>'PUT','files'=>true])!!}
			<div class="jumbotron">
				<div class="form-group">
					<label for="title">Ingrese Titulo</label>
					{!! Form::text('title',$ruta->title,['class'=>'form-control'])!!}
				</div>
				<div class="form-group">
					<label for="description">Ingrese descripcion</label>
					{!! Form::text('description',$ruta->description,['class'=>'form-control'])!!}
				</div>
				<div class="form-group">
					<label for="nombre">Ingrese nombre</label>
					{!! Form::text('nombre',$ruta->nombre,['class'=>'form-control'])!!}
				</div>
				<div class="form-group">
					<label for="descripcion">Ingrese descripcion</label>
					{!! Form::textarea('descripcion',$ruta->descripcion,['class'=>'form-control'])!!}
				</div>
				<div class="form-group">
					<label for="orden">Ingrese orden</label>
					{!! Form::text('orden',$ruta->descripcion,['class'=>'form-control'])!!}
				</div>
				<div class="form-group">
					<label for="urlfoto">Imagen</label> <br>
					<img src="/img/ruta/{{$ruta->urlfoto}}">
					{!! Form::file('urlfoto')!!}
				</div>
				{!! Form::submit('Guardar',['class'=>'btn btn-success'])!!}
				{!! Form::close()!!}
			</div>
		</div>

	</div>
</div>