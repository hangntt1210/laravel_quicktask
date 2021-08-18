@extends('master')
@section('content')

<div class="container">
	<div class="row">

		<div class="col-md-12">
			<h2>{{ $detail_news->title }}</h2>

			<p>{{ $detail_news->body }}</p>
		</div>

	</div>
</div>

@endsection
