@extends('adminlte::page')

@section('title', 'Link Home Page')

@section('content_header')
@stop

@section('content')

    <div class="box">

        <div class="box-header">
                <div class="card-header"><h3 class="text-center"><b>Update Link</b></h3></div>

        </div>
        <!-- /.box-header -->
        <div class="box-body" id="refreshme">
                <div id="alert"></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('link.update',$link->id) }}">
                        @csrf
                        @method('PUT')
                      

                       
                        <div class="form-group row">
                                <label for="link" class="col-md-4 col-form-label text-md-right">{{ __('Link Header') }}</label>
    
                                <div class="col-md-6">
                                    <input id="link" type="text" class="form-control{{ $errors->has('link') ? ' is-invalid' : '' }}" name="link" value="{{ $link->link }}" required autofocus>
    
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