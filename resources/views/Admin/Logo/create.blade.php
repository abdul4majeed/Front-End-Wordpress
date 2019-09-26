@extends('adminlte::page')

@section('title', 'User Registeration')

@section('content_header')
@stop

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @if(\App\LogoImage::all()->count() == 0)

                    <div class="card-header"><h3 class="text-center"><b>Add an Logo Image</b></h3></div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('image.store') }}" enctype="multipart/form-data">
                            @csrf
    
                          

                           
                            <div class="form-group row">
                                    <label for="log_image" class="col-md-4 col-form-label text-md-right">{{ __('Logo Image') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="log_image" type="file" class="form-control{{ $errors->has('log_image') ? ' is-invalid' : '' }}" name="log_image" value="{{ old('log_image') }}" autofocus>
        
                                        @if ($errors->has('log_image'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('log_image') }}</strong>
                                            </span>
                                        @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                    <label for="logo_title" class="col-md-4 col-form-label text-md-right">{{ __('Logo Title') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="logo_title" type="text" class="form-control{{ $errors->has('logo_title') ? ' is-invalid' : '' }}" name="logo_title" value="{{ old('logo_title') }}" required autofocus>
        
                                        @if ($errors->has('logo_title'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('logo_title') }}</strong>
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
                    @else
                    <div class="card-header"><h3 class="text-center"><b>Update an Logo Image</b></h3></div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('image.update',\App\LogoImage::first()->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                          

                           
                            <div class="form-group row">
                                    <label for="log_image" class="col-md-4 col-form-label text-md-right">{{ __('Logo Image') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="log_image" type="file" class="form-control{{ $errors->has('log_image') ? ' is-invalid' : '' }}" name="log_image" value="{{ old('log_image') }}" autofocus>
        
                                        @if ($errors->has('log_image'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('log_image') }}</strong>
                                            </span>
                                        @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                    <label for="logo_title" class="col-md-4 col-form-label text-md-right">{{ __('Logo Title') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="logo_title" type="text" class="form-control{{ $errors->has('logo_title') ? ' is-invalid' : '' }}" name="logo_title" value="{{ \App\LogoImage::first()->image_title_name }}" required autofocus>
        
                                        @if ($errors->has('logo_title'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('logo_title') }}</strong>
                                            </span>
                                        @endif
                                </div>
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
                    @endif
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

