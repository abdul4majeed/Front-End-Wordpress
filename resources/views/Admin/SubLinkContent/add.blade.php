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

                @php
                        $something = false;
                        foreach (\App\SubLink::with('sub_link_contents')->get() as $sub_link)
    {
                            if($sub_link->sub_link_contents->isEmpty())
                            {
                                $something=true;
                            }
                            
                        }
                    @endphp
            @if($something === true)

        <form action="{{route('sub_link_content.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                    <label for="sublink_id" class="col-md-4 col-form-label text-md-right">{{ __('Sub Link Header') }}</label>
                    
                    <div class="col-md-6">
                        <select name="sublink_id" id="sublink_id" class="form-control">
                            @foreach (\App\SubLink::with('sub_link_contents')->get() as $sub_link)
                                @if($sub_link->sub_link_contents->isEmpty())
                                    <option value="{{$sub_link->id}}">{{$sub_link->sub_link}}</option>
                                @endif
                               
                            @endforeach
                       
                        </select>
                       

                        @if ($errors->has('sublink_id'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('sublink_id') }}</strong>
                            </span>
                        @endif
                </div>
            </div>

            <div class="form-group row">
                    <label for="content" class="col-md-4 col-form-label text-md-right">{{ __('Content') }}</label>

                    <div class="col-md-6">
                            <textarea class="tinymce" name="content"></textarea>
                       

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
                     <input type="file" name="img_url" id="img_url">
                       

                        @if ($errors->has('img_url'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('img_url') }}</strong>
                            </span>
                        @endif
                </div>
            </div>

            <div class="form-group row">

                    <div class="col-md-6">
                    <button type="submit" class="btn-sm btn-danger btn-style text-center"><i class="fa fa-save"></i>Save</button>
                     
                       

                       
                </div>
            </div>

            </form>
            @else
                        <option value="0">No Empty Link Found Update the Link Content</option>

            @endif
        </div>
        <!-- /.box-body -->
    </div>


  
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">

@stop

@section('js')

<script src="http://tinymce.cachefly.net/4.0/tinymce.min.js"></script>
<script>
	tinymce.init({
	 /* replace textarea having class .tinymce with tinymce editor */
	 selector: "textarea.tinymce",
	});
 </script>

@stop