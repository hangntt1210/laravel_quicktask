@extends('master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{ __('Create news') }}:</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('store') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="category" class="col-md-3 control-label">{{ __('Category') }}</label>
                            <div class="col-md-9">
                                <select name="category_id">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>                               
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="title" class="col-md-3 control-label">{{ __('Title') }}</label>
                            <div class="col-md-9">
                                <input id="title" type="text" class="form-control" name="title" value="" >      
                                <span class="help-block">
                                    <strong></strong>
                                </span>      
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="body" class="col-md-3 control-label">{{ __('Body') }}</label>
                            <div class="col-md-9">
                                <textarea name="body" id="body" cols="30" rows="8" class="form-control" ></textarea>
                                <span class="help-block">
                                    <strong></strong>
                                </span>                               
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-9 col-md-offset-3">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Create') }}
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
