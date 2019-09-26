@extends('adminlte::page')

@section('title', 'User Registeration')

@section('content_header')
@stop

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h3 class="text-center"><b>Add an Sub Link</b></h3></div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('sub_link.store') }}">
                            @csrf
    
                          

                           
                            <div class="form-group row">
                                    <label for="sub_link" class="col-md-4 col-form-label text-md-right">{{ __('Sub Link Header') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="sub_link" type="text" class="form-control{{ $errors->has('sub_link') ? ' is-invalid' : '' }}" name="sub_link" value="{{ old('sub_link') }}" required autofocus>
        
                                        @if ($errors->has('sub_link'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('sub_link') }}</strong>
                                            </span>
                                        @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                    <label for="link" class="col-md-4 col-form-label text-md-right">{{ __('Link Header') }}</label>
        
                                    <div class="col-md-6">
                                        <select name="link" id="link" class="form-control">
                                            @foreach ($links as $link)
                                            @if($link->link == "Services")
                                        <option value="{{$link->id}}">{{$link->link}}</option>
                                            @endif
                                            @endforeach
                                           
                                        </select>
                                       
        
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

