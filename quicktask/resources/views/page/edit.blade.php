@extends('master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{ __('Edit news') }}:</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('update', $news_edit->id) }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label for="title" class="col-md-3 control-label">{{ __('Title') }}</label>
                            <div class="col-md-9">
                                <input id="title" type="text" class="form-control" name="title" value="{{ $news_edit->title }}" required autofocus>
                                
                                <span class="help-block">
                                    <strong></strong>
                                </span>
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="body" class="col-md-3 control-label">{{ __('Body') }}</label>
                            <div class="col-md-9">
                                <textarea name="body" id="body" cols="30" rows="8" class="form-control" value="{{ $news_edit->body }}" required>{{ $news_edit->body }}</textarea>
                                
                                <span class="help-block">
                                    <strong></strong>
                                </span>
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-9 col-md-offset-3">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Update') }}
                                </button>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
