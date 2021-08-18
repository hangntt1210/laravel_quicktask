@extends('master')
@section('content')

<div class="container" >
    <div class="container">
        <div class="row">
            @foreach($tin_theoloai as $li)  
            <div class="col-md-4">
                <h2>{{  $li->title  }}</h2>
                <p>{{  $li->body  }}</p>
                <p><a class="btn btn-default" href="{{  route('chitiet', $li->id)  }}" role="button">{{  __('Detail')  }} »</a></p>
            </div>
            @endforeach  
        </div>
    </div>

@endsection
