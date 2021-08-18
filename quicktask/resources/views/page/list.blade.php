@extends('master')
@section('content')

<div class="container" >
    <div class="container">
        <div class="row">
            @foreach ($list as $li)  
                <div class="col-md-4">
                    <h2>{{ $li->title }}</h2>
                    <p>{{ $li->body }}</p>
                    <p>
                        <a class="btn btn-default" href="{{ route('chitiet', $li->id) }}" role="button">{{ __('Detail') }} »</a>
                        <a class="btn btn-default" href="{{ route('edit',$li->id) }}" role="button">{{ __('Edit') }}</a>
                        <a class="btn btn-default" href="{{ route('delete',$li->id) }}" role="button">{{ __('Delete') }}</a>
                    </p>
                </div>
            @endforeach  
        </div>
    </div>

@endsection
