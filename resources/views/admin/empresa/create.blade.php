@extends('layouts.app')

@section('content')
<div class="container-fluid">
	<div class="row">
		@include('admin.menu')
		<div class="col-sm-10">
			{!! Form::open(['route'=>['empresa.store'],'method'=>'POST','files'=>true])!!}

			<div class="jumbotron">
				<div class="form-group">
					<label for="title">Ingrese Titulo</label>
					{!! Form::text('title',null,['class'=>'form-control', 'required'])!!}
				</div>
				{{-- 'maxlength'=> '67' --}}
				<div class="form-group"> 
					<label for="description">Ingrese Descripción</label>
					{!! Form::text('description',null,['class'=>'form-control','required'])!!}
				</div>

				
				<div class="form-group">
					<label for="razonsocial">Ingrese Razon Social</label>
					{!! Form::text('razonsocial',null,['class'=>'form-control','required'])!!}
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
					<label for="ruta_id">Rutas</label>
					{!! Form::select('ruta_id',$rutas,null,['class'=>'form-control'])!!}
				</div>

				
				<div class="form-group">
					{!! Form::checkbox('estado',null,null,)!!}
					<label for="estado">Estado</label>
				</div>

				<div class="form-group">
					<label for="urlfoto">Imagen 900px X 400px</label>
					<img src="/img/empresa/foto.jpg">
					{!! Form::file('urlfoto')!!}
				</div>
				
				<div class="form-group">
					<label for="urllogo">Imagen 200px x 200px</label>
					<img src="/img/empresa/foto.jpg">
					{!! Form::file('urllogo')!!}
				</div>
			</div>
			{!! Form::submit('Guardar',['class'=>'btn btn-success'])!!}
			{!! Form::close()!!}
		</div>
	</div>
</div>
@endsection