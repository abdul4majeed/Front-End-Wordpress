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
                        <form method="POST" action="{{ route('footerCopyWrite.update',[$footer_content->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                          

                           
                            <div class="form-group row">
                                <label for="footer_copyright_string" class="col-md-4 col-form-label text-md-right">{{ __('CopyRight') }}</label>
    
                                <div class="col-md-6">
                                    <input type="text" id="value"  class="form-control{{ $errors->has('value') ? ' is-invalid' : '' }}" name="footer_copyright_string" required autofocus value="{{ $footer_content->footer_copyright_string }}">
    
    
                                    @if ($errors->has('footer_copyright_string'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('footer_copyright_string') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>

                      
                        <div class="form-group row">
                                <label for="footer_site_name_string" class="col-md-4 col-form-label text-md-right">{{ __('Site Name') }}</label>
    
                                <div class="col-md-6">
                                    <input type="text" id="value"  class="form-control{{ $errors->has('value') ? ' is-invalid' : '' }}" name="footer_site_name_string" required autofocus value="{{ $footer_content->footer_site_name_string }}">

                                  
    
                                    @if ($errors->has('footer_site_name_string'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('footer_site_name_string') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="footer_designer_title" class="col-md-4 col-form-label text-md-right">{{ __('Designer') }}</label>
    
                                <div class="col-md-6">
                                    <input type="text" id="value"  class="form-control{{ $errors->has('value') ? ' is-invalid' : '' }}" name="footer_designer_title" required autofocus value="{{ $footer_content->footer_designer_title }}">

                                  
    
                                    @if ($errors->has('footer_designer_title'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('footer_designer_title') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>


                        <div class="form-group row">
                                <label for="footer_developer_name" class="col-md-4 col-form-label text-md-right">{{ __('Developer') }}</label>
    
                                <div class="col-md-6">
                                    <input type="text" id="value"  class="form-control{{ $errors->has('value') ? ' is-invalid' : '' }}" name="footer_developer_name" required autofocus value="{{ $footer_content->footer_developer_name }}">

                                  
    
                                    @if ($errors->has('footer_developer_name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('footer_developer_name') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>


                        <div class="form-group row">
                                <label for="footer_url" class="col-md-4 col-form-label text-md-right">{{ __('WebSite URL') }}</label>
    
                                <div class="col-md-6">
                                    <input type="text" id="value"  class="form-control{{ $errors->has('value') ? ' is-invalid' : '' }}" name="footer_url" required autofocus value="{{ $footer_content->footer_url }}">

                                  
    
                                    @if ($errors->has('footer_url'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('footer_url') }}</strong>
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

