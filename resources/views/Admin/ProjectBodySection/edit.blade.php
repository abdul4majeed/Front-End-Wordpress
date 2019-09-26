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
                        <form method="POST" action="{{ route('projectHeaderProjectSection.update',[$project->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                          

                           
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
    
                                <div class="col-md-6">
                                    <input type="text" name="name" id="name"  class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" required autofocus value="{{$project->name}}">
    
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>

                      
                        <div class="form-group row">
                            <label for="tag" class="col-md-4 col-form-label text-md-right">{{ __('Tag') }}</label>

                            <div class="col-md-6">
                                    <input type="text" name="tag" id="tag"  class="form-control{{ $errors->has('tag') ? ' is-invalid' : '' }}" required autofocus value="{{$project->tag}}">

                                @if ($errors->has('tag'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tag') }}</strong>
                                    </span>
                                @endif
                        </div>

                    </div>

                        <div class="form-group row">
                                <label for="home_page" class="col-md-4 col-form-label text-md-right">{{ __('Home Page URL') }}</label>
    
                                <div class="col-md-6">
                                    <input type="text" name="home_page" id="home_page"  class="form-control{{ $errors->has('home_page') ? ' is-invalid' : '' }}"  autofocus value="{{$project->home_page}}">
    
                                    @if ($errors->has('home_page'))
                                        <span class="invalid-feedback" home_page="alert">
                                            <strong>{{ $errors->first('home_page') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="url" class="col-md-4 col-form-label text-md-right">{{ __('Picture') }}</label>
    
                                <div class="col-md-6">
                                    <input type="file" name="url">
                                    
    
                                    @if ($errors->has('url'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('url') }}</strong>
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

