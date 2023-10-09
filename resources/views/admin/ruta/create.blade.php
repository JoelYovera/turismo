@extends('layouts.app')

@section('content')
<div class="container-fluid">
	<div class="row">
		@include('admin.menu')
		<div class="col-sm-10">
			{!! Form::open(['route'=>['ruta.store'],'method'=>'POST','files'=>true])!!}

			<div class="jumbotron">
				<div class="form-group">
					<label for="title">Ingrese Titulo</label>
					{!! Form::text('title',null,['class'=>'form-control','maxlength'=> '67', 'required'])!!}
				</div>

				<div class="form-group">
					<label for="description">Ingrese Descripción</label>
					{!! Form::text('description',null,['class'=>'form-control','required'])!!}
				</div>

				
				<div class="form-group">
					<label for="nombre">Ingrese Nombre</label>
					{!! Form::text('nombre',null,['class'=>'form-control','required'])!!}
				</div>

				<div class="form-group">
					<label for="descripcion">Ingrese Descripción</label>
					{!! Form::textarea('descripcion',null,['class'=>'form-control','required'])!!}
				</div>

				<div class="form-group">
					<label for="orden">Ingrese Orden</label>
					{!! Form::text('orden',null,['class'=>'form-control'])!!}
				</div>

				<div class="form-group">
					<label for="urlfoto">Imagen</label>
					<img src="/img/ruta/foto.jpg">
					{!! Form::file('urlfoto')!!}
				</div>
			</div>
			{!! Form::submit('Guardar',['class'=>'btn btn-success'])!!}
			{!! Form::close()!!}
		</div>
	</div>
</div>
@endsection