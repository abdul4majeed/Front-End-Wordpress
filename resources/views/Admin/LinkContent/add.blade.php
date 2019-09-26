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
        <form action="{{route('link_content.store')}}" method="post">
            @csrf
            <div class="form-group row">
                    <label for="link" class="col-md-4 col-form-label text-md-right">{{ __('Link Header') }}</label>

                    <div class="col-md-6">
                        <select name="link" id="link" class="form-control">
                            @foreach (\App\Link::all() as $link)
                        <option value="{{$link->id}}">{{$link->link}}</option>
                            @endforeach
                           
                        </select>
                       

                        @if ($errors->has('link'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('link') }}</strong>
                            </span>
                        @endif
                </div>
            </div>

                <textarea class="tinymce" name="content"></textarea>
                <button type="submit" class="btn-sm btn-danger btn-style text-center"><i class="fa fa-save"></i>Save</button>
            </form>
           
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
	
	/* theme of the editor */
	theme: "modern",
	skin: "lightgray",
	
	/* width and height of the editor */
	width: "100%",
	height: 300,
	
	/* display statusbar */
	statubar: true,
	
	/* plugin */
	plugins: [
		"advlist autolink link image lists charmap print preview hr anchor pagebreak",
		"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
		"save table contextmenu directionality emoticons template paste textcolor"
	],

	/* toolbar */
	toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",
	
	/* style */
	style_formats: [
		{title: "Headers", items: [
			{title: "Header 1", format: "h1"},
			{title: "Header 2", format: "h2"},
			{title: "Header 3", format: "h3"},
			{title: "Header 4", format: "h4"},
			{title: "Header 5", format: "h5"},
			{title: "Header 6", format: "h6"}
		]},
		{title: "Inline", items: [
			{title: "Bold", icon: "bold", format: "bold"},
			{title: "Italic", icon: "italic", format: "italic"},
			{title: "Underline", icon: "underline", format: "underline"},
			{title: "Strikethrough", icon: "strikethrough", format: "strikethrough"},
			{title: "Superscript", icon: "superscript", format: "superscript"},
			{title: "Subscript", icon: "subscript", format: "subscript"},
			{title: "Code", icon: "code", format: "code"}
		]},
		{title: "Blocks", items: [
			{title: "Paragraph", format: "p"},
			{title: "Blockquote", format: "blockquote"},
			{title: "Div", format: "div"},
			{title: "Pre", format: "pre"}
		]},
		{title: "Alignment", items: [
			{title: "Left", icon: "alignleft", format: "alignleft"},
			{title: "Center", icon: "aligncenter", format: "aligncenter"},
			{title: "Right", icon: "alignright", format: "alignright"},
			{title: "Justify", icon: "alignjustify", format: "alignjustify"}
		]}
	]
});
</script>

@stop