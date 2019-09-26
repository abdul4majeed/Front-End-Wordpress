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
                        <form method="POST" action="{{ route('aboutUsBodySection.update',[$about_us->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                          

                           
                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Head Title') }}</label>
    
                                <div class="col-md-6">
                                    <textarea name="title" id="title" cols="30" rows="10" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" required autofocus>{{$about_us->title}}</textarea>
    
                                    @if ($errors->has('title'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>

                      
                        <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Head Description') }}</label>
    
                                <div class="col-md-6">
                                    <textarea id="description" cols="30" rows="10"  class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" required autofocus>{{ $about_us->description }}</textarea>
    
                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                            </div>

                            <div class="form-group row">
                                    <label for="image_url" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>
        
                                    <div class="col-md-6">
                                        <input type="file" id="image_url" class="form-control{{ $errors->has('image_url') ? ' is-invalid' : '' }}" name="image_url" required autofocus /> 
        
                                        @if ($errors->has('image_url'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('image_url') }}</strong>
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

