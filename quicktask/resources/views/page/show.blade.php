@extends('master')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2>{{ $detailNews->title }}</h2>
			<p>{{ $detailNews->body }}</p>
		</div>
	</div>
</div>

@endsection
