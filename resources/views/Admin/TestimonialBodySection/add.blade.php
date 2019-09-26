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
                        <form method="POST" action="{{ route('testimonialBodySection.store') }}" enctype="multipart/form-data">
                            @csrf
                            
                          

                           
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
    
                                <div class="col-md-6">
                                    <input type="text" name="name" id="name"  class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" required autofocus">
    
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>

                      
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <textarea id="description" cols="30" rows="10"  class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" required autofocus></textarea>

                                @if ($errors->has('description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                        </div>

                    </div>

                        <div class="form-group row">
                                <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>
    
                                <div class="col-md-6">
                                    <input type="text" name="role" id="role"  class="form-control{{ $errors->has('role') ? ' is-invalid' : '' }}" required autofocus ">
    
                                    @if ($errors->has('role'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('role') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="pic_url" class="col-md-4 col-form-label text-md-right">{{ __('Picture') }}</label>
    
                                <div class="col-md-6">
                                    <input type="file" name="pic_url">
                                    
    
                                    @if ($errors->has('pic_url'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('pic_url') }}</strong>
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

