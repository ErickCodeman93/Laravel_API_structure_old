@extends('layouts.master')

@section ('content')

<div class="container"> 
	<div class="row">
		<div class="col-sm-8">
			<h2>
				{{ $post -> name }}
			
				<a href="{{ route('post.edit', $post -> id) }}" class="btn btn-default">editar</a>
			</h2>
			<p>
				{{ $post -> short }}
			</p>

			{!! $post -> body!!}
		</div>
		<div class="col-sm-4">
			@include('post.fragment.aside')
		</div>
	</div>
</div>

@endsection