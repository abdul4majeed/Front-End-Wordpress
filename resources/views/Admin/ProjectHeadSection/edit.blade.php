@extends('adminlte::page')

@section('title', 'User Registeration')

@section('content_header')
@stop

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h3 class="text-center"><b>Update Header Content</b></h3></div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('projectHeaderSection.update',[$project->id]) }}">
                            @csrf
                            @method('PUT')
                          

                           
                            <div class="form-group row">
                                <label for="header" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>
    
                                <div class="col-md-6">
                                    <input type="text" name="header" id="header"  class="form-control{{ $errors->has('header') ? ' is-invalid' : '' }}" required autofocus value="{{$project->header}}">
    
                                    @if ($errors->has('header'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('header') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>

                      
                        <div class="form-group row">
                            <label for="header_body" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <textarea id="header_body" cols="30" rows="10"  class="form-control{{ $errors->has('header_body') ? ' is-invalid' : '' }}" name="header_body" required autofocus>{{ $project->header_body }}</textarea>

                                @if ($errors->has('header_body'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('header_body') }}</strong>
                                    </span>
                                @endif
                        </div>

                       

                  
                          
    
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
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
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop

