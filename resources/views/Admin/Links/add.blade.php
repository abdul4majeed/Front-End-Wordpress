@extends('adminlte::page')

@section('title', 'User Registeration')

@section('content_header')
@stop

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h3 class="text-center"><b>Add an Link</b></h3></div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('link.store') }}">
                            @csrf
    
                          

                           
                            <div class="form-group row">
                                    <label for="link" class="col-md-4 col-form-label text-md-right">{{ __('Link Header') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="link" type="text" class="form-control{{ $errors->has('link') ? ' is-invalid' : '' }}" name="link" value="{{ old('link') }}" required autofocus>
        
                                        @if ($errors->has('link'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('link') }}</strong>
                                            </span>
                                        @endif
                                </div>
                            </div>
    
                          
                          
    
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
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
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop

