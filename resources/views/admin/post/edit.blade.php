@extends('layouts.app')
@section('content')
<div class="container-fluid">
	<div class="row">
		@include('admin.menu')
		<div class="col-sm-10">
			{!! Form::open(['route'=>['post.update',$post],'method'=>'PUT','files'=>true])!!}
			<div class="jumbotron">
				<div class="form-group">
					<label for="title">Ingrese Titulo</label>
					{!! Form::text('title',$post->title,['class'=>'form-control'])!!}
				</div>
				<div class="form-group">
					<label for="description">Ingrese descripcion</label>
					{!! Form::text('description',$post->description,['class'=>'form-control'])!!}
				</div>
				<div class="form-group">
					<label for="nombre">Ingrese nombre</label>
					{!! Form::text('nombre',$post->nombre,['class'=>'form-control'])!!}
				</div>
				<div class="form-group">
					<label for="descripcion">Ingrese descripcion</label>
					{!! Form::textarea('descripcion',$post->descripcion,['class'=>'form-control'])!!}
				</div>
				<div class="form-group">
					<label for="orden">Ingrese orden</label>
					{!! Form::text('orden',$post->descripcion,['class'=>'form-control'])!!}
				</div>
				<div class="form-group">
					<label for="urlvideo">Ingrese video</label>
					{!! Form::text('urlvideo',$post->urlvideo,['class'=>'form-control'])!!}
				</div>
				<div class="form-group">
					<label for="urlfoto">Imagen</label> <br>
					<img src="/img/post/{{$post->urlfoto}}">
					{!! Form::file('urlfoto')!!}
				</div>
				{!! Form::submit('Guardar',['class'=>'btn btn-success'])!!}
				{!! Form::close()!!}
			</div>
		</div>

	</div>
</div>