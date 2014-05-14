@extends('layout')

@section('content')
	<p>
	@foreach ($groups as $g)
		<p>{{ $g->name }}</p>
	@endforeach
	</p>
	<p>
	{{ $groups->links() }}
	</p>
@stop