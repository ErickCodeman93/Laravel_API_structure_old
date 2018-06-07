@extends('layouts.master')

@section ('content')

<div class="container"> 
	<div class="row">
		<div class="col-sm-8">
			<h2>
				Editar producto
				<a href="{{ route('post.index')}}" class="btn btn-primary pull-rigth">Listado</a>
				
			</h2>

			@include('post.fragment.error')

			{!! Form::model($post, ['route'=> ['post.update', $post->id], 'method' => 'PUT']) !!}

				@include('post.fragment.form')
				
			{!! Form::close() !!}
		</div>
		<div class="col-sm-4">
			@include('post.fragment.aside')
		</div>
	</div>
</div>

@endsection