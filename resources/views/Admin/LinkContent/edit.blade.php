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
        <form action="{{route('link_content.update',[$link_content->id])}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group row">
                    <label for="link" class="col-md-4 col-form-label text-md-right">{{ __('Link Header') }}</label>

                    <div class="col-md-6">
                        <select name="link" id="link" class="form-control">
                        <option value="{{$link_content->link->id}}">{{$link_content->link['link']}}</option>

                            @foreach (\App\Link::all() as $link)
                            @if($link_content->link->id != $link->id)
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

        <textarea class="tinymce" name="content">{{$link_content->content}}</textarea>
                <button type="submit" class="btn-sm btn-danger btn-style text-center"><i class="fa fa-save"></i>Update</button>
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