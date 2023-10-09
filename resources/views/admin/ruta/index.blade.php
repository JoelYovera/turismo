@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		@include('admin.menu')
		<div class="col-sm-10">
			<a href="{{route('ruta.create')}}" class="btn btn-success">Nuevo Ruta</a>
			<table class="table table-striped">
				<thead>
					<th>Orden</th>
					<th>Nombre</th>
					<th>Accion</th>
				</thead>
				<tbody>
					@forelse ($rutas as $item)
					<tr>
						<td>{{$item->orden}}</td>
						<td>{{$item->nombre}}</td>
						<td> <img src="" alt=""> </td>
						<td>
							<a href="{{rout('ruta.edit', $item->id)}}" class="btn btn-success">Editar</a>
							{!! Form::open(['method'=>'DELETE','route'=>['ruta.destroy',$item->id],'style'=>'display:inline'])!!}
							{!! Form::submit('ELIMINAR',['class'=> 'btn btn-success', 'onclick' => 'return confirm("Esta seguro de eliminar")'])!!}
							{!! Form::close()!!}
						</td>
					</tr>
					@empty
					@endforelse
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection
