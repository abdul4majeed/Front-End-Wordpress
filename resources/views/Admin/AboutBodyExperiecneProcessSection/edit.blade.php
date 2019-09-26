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
                        <form method="POST" action="{{ route('aboutUsExperienceProcess.update',[$about_us->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                          

                           
                            <div class="form-group row">
                                <label for="head_title" class="col-md-4 col-form-label text-md-right">{{ __('Head Title') }}</label>
    
                                <div class="col-md-6">
                                    <input type="text" id="value"  class="form-control{{ $errors->has('value') ? ' is-invalid' : '' }}" name="head_title" required autofocus value="{{ $about_us->head_title }}">
    
    
                                    @if ($errors->has('head_title'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('head_title') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>

                      
                        <div class="form-group row">
                                <label for="head_description" class="col-md-4 col-form-label text-md-right">{{ __('Head Description') }}</label>
    
                                <div class="col-md-6">
                                    <input type="text" id="value"  class="form-control{{ $errors->has('value') ? ' is-invalid' : '' }}" name="head_description" required autofocus value="{{ $about_us->head_description }}">

                                  
    
                                    @if ($errors->has('head_description'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('head_description') }}</strong>
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

