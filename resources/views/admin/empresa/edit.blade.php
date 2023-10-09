@extends('layouts.app')
@section('content')
<div class="container-fluid">
	<div class="row">
		@include('admin.menu')
		<div class="col-sm-10">
			{!! Form::open(['route'=>['empresa.update',$empresa],'method'=>'PUT','files'=>true])!!}
			<div class="jumbotron">
				<div class="form-group">
					<label for="title">Ingrese Titulo</label>
					{!! Form::text('title',$empresa->title,['class'=>'form-control'])!!}
				</div>
				<div class="form-group">
					<label for="description">Ingrese descripcion</label>
					{!! Form::text('description',$empresa->description,['class'=>'form-control'])!!}
				</div>
				<div class="form-group">
					<label for="nombre">Ingrese nombre</label>
					{!! Form::text('nombre',$empresa->nombre,['class'=>'form-control'])!!}
				</div>
				<div class="form-group">
					<label for="descripcion">Ingrese descripcion</label>
					{!! Form::textarea('descripcion',$empresa->descripcion,['class'=>'form-control'])!!}
				</div>
				<div class="form-group">
					<label for="orden">Ingrese orden</label>
					{!! Form::text('orden',$empresa->descripcion,['class'=>'form-control'])!!}
				</div>
				<div class="form-group">
					<label for="ruta_id">Rutas</label>
					{!! Form::select('ruta_id',$empresa,null,['class'=>'form-control'])!!}
				</div>

				<div class="form-group">
					{!! Form::checkbox('estado',null,null,)!!}
					<label for="estado">Estado</label>
				</div>
				<div class="form-group">
					<label for="urlfoto">Imagen 900px X 400px</label> <br>
					<img src="/img/empresa/{{$empresa->urlfoto}}">
					{!! Form::file('urlfoto')!!}
				</div>
				<div class="form-group">
					<label for="urllogo">Imagen 200px x 200px</label>
					<img src="/img/empresa/{{$empresa->urllogo}}">
					{!! Form::file('urllogo')!!}
				</div>
				{!! Form::submit('Guardar',['class'=>'btn btn-success'])!!}
				{!! Form::close()!!}
			</div>
		</div>

	</div>
</div>