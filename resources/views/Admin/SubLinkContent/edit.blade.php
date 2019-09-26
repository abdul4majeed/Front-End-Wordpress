@extends('adminlte::page')

@section('title', 'Link Home Page')

@section('content_header')
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Table containing all teachers</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body" id="refreshme">
                <div id="alert"></div>
        <form action="{{route('sub_link_content.update',[$sub_link_content->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row">
                    <label for="sublink_id" class="col-md-4 col-form-label text-md-right">{{ __('Sub Link Header') }}</label>

                    <div class="col-md-6">
                        <select name="sublink_id" id="sublink_id" class="form-control">
                        <option value="{{$sub_link_content->sub_link->id}}">{{$sub_link_content->sub_link['sub_link']}}</option>
                        </select>
                       

                        @if ($errors->has('link'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('link') }}</strong>
                            </span>
                        @endif
                </div>
            </div>

            <div class="form-group row">
                    <label for="content" class="col-md-2 col-form-label text-md-right">{{ __('Content') }}</label>

                    <div class="col-md-10">

        <textarea class="tinymce" name="content">{{$sub_link_content->content}}</textarea>
                        

                        @if ($errors->has('content'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('content') }}</strong>
                            </span>
                        @endif
                </div>
            </div>



        <div class="form-group row">
                <label for="img_url" class="col-md-4 col-form-label text-md-right">{{ __('Picture') }}</label>

                <div class="col-md-6">
                 <input type="file" name="img_url" id="img_url" required>
                   

                    @if ($errors->has('img_url'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('img_url') }}</strong>
                        </span>
                    @endif
            </div>
        </div>
        
        <div class="form-group row">

                <div class="col-md-6">
                <button type="submit" class="btn-sm btn-danger btn-style text-center"><i class="fa fa-save"></i>Update</button>
                 
                   

                   
            </div>
        </div>
            </form>
           
        </div>
        <!-- /.box-body -->
    </div>


  
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">


@stop

@section('js')

<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>

<script>
    $(document).ready(function() {
  $('textarea').summernote({
    height: 400
  });
});
  
</script>

@stop