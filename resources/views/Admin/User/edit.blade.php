{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'User Update')

@section('content_header')
@stop

@section('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h3 class="text-center"><b>Update Admin</b></h3></div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('user.update',[$user->id]) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>
    
                                <div class="col-md-6">
                                    <input id="firstname" type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ $user->firstname }}" required autofocus>
    
                                    @if ($errors->has('firstname'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('firstname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                    <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ $user->lastname }}" required autofocus>
        
                                        @if ($errors->has('lastname'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('lastname') }}</strong>
                                            </span>
                                        @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                    <label for="phonenumber" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="phonenumber" type="text" class="form-control{{ $errors->has('phonenumber') ? ' is-invalid' : '' }}" name="phonenumber" value="{{ $user->phonenumber }}" required autofocus>
        
                                        @if ($errors->has('phonenumber'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('phonenumber') }}</strong>
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