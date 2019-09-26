@extends('adminlte::page')

@section('title', 'Link Home Page')

@section('content_header')
@stop

@section('content')

    <div class="box">

        <div class="box-header">
                <div class="card-header"><h3 class="text-center"><b>Update Sub Link</b></h3></div>

        </div>
        <!-- /.box-header -->
        <div class="box-body" id="refreshme">
                <div id="alert"></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('sub_link.update',[$sub_link->id]) }}">
                        @csrf
                        @method('PUT')
                      

                       
                        <div class="form-group row">
                                <label for="sub_link" class="col-md-4 col-form-label text-md-right">{{ __('Sub Link Header') }}</label>
    
                                <div class="col-md-6">
                                    <input id="sub_link" type="text" class="form-control{{ $errors->has('sub_link') ? ' is-invalid' : '' }}" name="sub_link" value="{{ $sub_link->sub_link }}" required autofocus>
    
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
                                        <option value="{{$sub_link->link->id}}">{{$sub_link->link['link']}}</option>
                                        
                                       
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
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
            
        </div>
        <!-- /.box-body -->
    </div>


  
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">

@stop

@section('js')


<script>
    var table = $("#example1 tbody");

    var dt =  $('#example1').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : true,
                'ordering'    : false,
                'info'        : true,
                'autoWidth'   : false,
               
            });
</script>

@stop