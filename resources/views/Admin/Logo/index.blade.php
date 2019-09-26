@extends('adminlte::page')

@section('title', 'Sub Link Home Page')

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

            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Logo Picture</th>
                    <th>Logo Title</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($logos_image as $logo_image)
                 <tr class="stu{{$logo_image->id}}">
                    <td>
                       <p><img src="{{asset('logo/'.$logo_image->image_logo_path)}}" alt="logo" width="50px" height="50px"></p>
                    </td>
                    <td>
                        <p>{{$logo_image->image_title_name}}</p>
                    </td>
                  
                    <td>
                        <form action="{{route('image.create')}}" method="get" class="form-inline-style">
                            @csrf
                            <button type="submit" class="btn-xs btn-success btn-style"><i class="fa fa-edit"></i>Update</button>
                        </form>
                        {{-- <form action="{{route('image.destroy',[$logo_image->id])}}" method="post" class="form-inline-style">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn-xs btn-danger btn-style"><i class="fa fa-trash"></i>Delete</button>
                        </form> --}}
                    </td>
                  
                </tr> 
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>Logo Picture</th>
                    <th>Logo Title</th>
                    <th>Action</th>
                </tr>
                </tfoot>
            </table>
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