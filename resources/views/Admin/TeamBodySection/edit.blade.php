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
                        <form method="POST" action="{{ route('team.update',[$team_memeber->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                          

                           
                            <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
        
                                    <div class="col-md-6">
                                        <input type="text" name="name" id="name"  class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" required autofocus value="{{$team_memeber->name}}">
        
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                </div>
                            </div>

                             
                            <div class="form-group row">
                                    <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>
        
                                    <div class="col-md-6">
                                        <input type="text" name="role" id="role"  class="form-control{{ $errors->has('role') ? ' is-invalid' : '' }}" required autofocus value="{{$team_memeber->role}}">
        
                                        @if ($errors->has('role'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('role') }}</strong>
                                            </span>
                                        @endif
                                </div>
                            </div>
                      


                        

                        <div class="form-group row">
                                <label for="image_path" class="col-md-4 col-form-label text-md-right">{{ __('Picture') }}</label>
    
                                <div class="col-md-6">
                                    <input type="file" name="image_path" required autofocus>
                                    
    
                                    @if ($errors->has('image_path'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('image_path') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>
                  
                        <div class="form-group row">
                                <label for="fb" class="col-md-4 col-form-label text-md-right">{{ __('FaceBook') }}</label>
    
                                <div class="col-md-6">
                                    <input type="text" name="fb" id="fb"  class="form-control{{ $errors->has('fb') ? ' is-invalid' : '' }}" required autofocus value="{{$team_memeber->fb}}">
    
                                    @if ($errors->has('fb'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('fb') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="twitter" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>
    
                                <div class="col-md-6">
                                    <input type="text" name="twitter" id="twitter"  class="form-control{{ $errors->has('twitter') ? ' is-invalid' : '' }}" required autofocus value="{{$team_memeber->twitter}}">
    
                                    @if ($errors->has('twitter'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('twitter') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="instagram" class="col-md-4 col-form-label text-md-right">{{ __('Instagram') }}</label>
    
                                <div class="col-md-6">
                                    <input type="text" name="instagram" id="instagram"  class="form-control{{ $errors->has('instagram') ? ' is-invalid' : '' }}" required autofocus value="{{$team_memeber->instagram}}">
    
                                    @if ($errors->has('instagram'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('instagram') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="pinterest" class="col-md-4 col-form-label text-md-right">{{ __('Pinterest') }}</label>
    
                                <div class="col-md-6">
                                    <input type="text" name="pinterest" id="pinterest"  class="form-control{{ $errors->has('pinterest') ? ' is-invalid' : '' }}" required autofocus value="{{$team_memeber->pinterest}}">
    
                                    @if ($errors->has('pinterest'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('pinterest') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>


                        <div class="form-group row">
                                <label for="googleplus" class="col-md-4 col-form-label text-md-right">{{ __('Google Plus') }}</label>
    
                                <div class="col-md-6">
                                    <input type="text" name="googleplus" id="googleplus"  class="form-control{{ $errors->has('googleplus') ? ' is-invalid' : '' }}" required autofocus value="{{$team_memeber->googleplus}}">
    
                                    @if ($errors->has('googleplus'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('googleplus') }}</strong>
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

