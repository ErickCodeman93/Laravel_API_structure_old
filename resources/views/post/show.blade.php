@extends('layouts.master')

@section ('content')
	<div class="container"> 
		<div class="row">
			<div class="col-sm-8">
				<h2>Lista de productos
						<a href="{{ route('post.create')}}" class="btn btn-primary pull-rigth">Nuevo</a>
				</h2>
				@include('post.fragment.info')
				<table>
					<thead>
						<tr>
							<th width="20px">ID</th>
							<th>Nombre del producto</th>
							<th colspan="3">&nbsp;</th>
						</tr>
					</thead>
					<tbody>
						@foreach($post_ as $item)
						<tr>
							<td>{{ $item -> id }}</td>
							<td>{{ $item -> name }}</td>
							<td><a href="{{ route('post.show',$item -> id) }}" class="btn btn-link">ver</a></td>
							<td><a href="{{ route('post.edit',$item -> id) }}" class="btn btn-link">editar</a></td>
							<td>
								<form action="{{ route('post.destroy',$item -> id) }}" method="POST">
									{{ csrf_field() }}
									<input type="hidden" name="_method" value="DELETE">
									<button class="btn btn-link">borrar</button>
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				{!! $post_ -> render()!!}
			</div>
			<div class="col-sm-4">
				@include('post.fragment.aside')
			</div>
		</div>
	</div>
@endsection