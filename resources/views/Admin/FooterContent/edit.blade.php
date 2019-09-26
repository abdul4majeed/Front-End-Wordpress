@extends('adminlte::page')

@section('footer_copyright_string', 'User Registeration')

@section('content_header')
@stop

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h3 class="text-center"><b>Update Header Content</b></h3></div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('footerContect.update',[$footer_content->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                          

                           
                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
    
                                <div class="col-md-6">
                                    <textarea id="value"  class="form-control{{ $errors->has('value') ? ' is-invalid' : '' }}" name="description" required autofocus id="" cols="30" rows="10">{{ $footer_content->description }}</textarea>
    
    
                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>

                      
                        <div class="form-group row">
                                <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
    
                                <div class="col-md-6">
                                    <textarea  id="value"  class="form-control{{ $errors->has('value') ? ' is-invalid' : '' }}" name="address" required autofocus cols="30" rows="10">{{ $footer_content->address }}</textarea>

                                  
    
                                    @if ($errors->has('address'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="fb_link" class="col-md-4 col-form-label text-md-right">{{ __('Facebook') }}</label>
    
                                <div class="col-md-6">
                                    <input type="text" id="value"  class="form-control{{ $errors->has('value') ? ' is-invalid' : '' }}" name="fb_link" required autofocus value="{{ $footer_content->fb_link }}">

                                  
    
                                    @if ($errors->has('fb_link'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('fb_link') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>


                        <div class="form-group row">
                                <label for="twitter_link" class="col-md-4 col-form-label text-md-right">{{ __('Twitter') }}</label>
    
                                <div class="col-md-6">
                                    <input type="text" id="value"  class="form-control{{ $errors->has('value') ? ' is-invalid' : '' }}" name="twitter_link" required autofocus value="{{ $footer_content->twitter_link }}">

                                  
    
                                    @if ($errors->has('twitter_link'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('twitter_link') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>


                        <div class="form-group row">
                                <label for="instagram_link" class="col-md-4 col-form-label text-md-right">{{ __('Instagram') }}</label>
    
                                <div class="col-md-6">
                                    <input type="text" id="value"  class="form-control{{ $errors->has('value') ? ' is-invalid' : '' }}" name="instagram_link" required autofocus value="{{ $footer_content->instagram_link }}">

                                  
    
                                    @if ($errors->has('instagram_link'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('instagram_link') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="pinterest_link" class="col-md-4 col-form-label text-md-right">{{ __('Pinterest') }}</label>
    
                                <div class="col-md-6">
                                    <input type="text" id="value"  class="form-control{{ $errors->has('value') ? ' is-invalid' : '' }}" name="pinterest_link" required autofocus value="{{ $footer_content->pinterest_link }}">

                                  
    
                                    @if ($errors->has('pinterest_link'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('pinterest_link') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="gplus_link" class="col-md-4 col-form-label text-md-right">{{ __('Google Plus') }}</label>
    
                                <div class="col-md-6">
                                    <input type="text" id="value"  class="form-control{{ $errors->has('value') ? ' is-invalid' : '' }}" name="gplus_link" required autofocus value="{{ $footer_content->gplus_link }}">

                                  
    
                                    @if ($errors->has('gplus_link'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('gplus_link') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="watsapp_number" class="col-md-4 col-form-label text-md-right">{{ __('Watsapp Number') }}</label>
    
                                <div class="col-md-6">
                                    <input type="text" id="value"  class="form-control{{ $errors->has('value') ? ' is-invalid' : '' }}" name="watsapp_number" required autofocus value="{{ $footer_content->watsapp_number }}">

                                  
    
                                    @if ($errors->has('watsapp_number'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('watsapp_number') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="watsapp_text" class="col-md-4 col-form-label text-md-right">{{ __('Watsapp Text') }}</label>
    
                                <div class="col-md-6">
                                    <input type="text" id="value"  class="form-control{{ $errors->has('value') ? ' is-invalid' : '' }}" name="watsapp_text" required autofocus value="{{ $footer_content->watsapp_text }}">

                                  
    
                                    @if ($errors->has('watsapp_text'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('watsapp_text') }}</strong>
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

