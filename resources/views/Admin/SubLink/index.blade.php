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
                    <th>Sub Link Title</th>
                    <th>Link Header</th>
                    <th>Add By</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($sub_links as $sub_link)
                 <tr class="stu{{$sub_link->id}}">
                    <td>
                       <p>{{$sub_link->sub_link}}</p>
                    </td>
                    <td>
                        <p>{{$sub_link->link['link']}}</p>
                    </td>
                    <td>
                        <p>{{$sub_link->user->email}}</p>
                    </td>
                  
                    <td>
                        <form action="{{route('sub_link.edit',[$sub_link->id])}}" method="get" class="form-inline-style">
                            @csrf
                            <button type="submit" class="btn-xs btn-success btn-style"><i class="fa fa-edit"></i>Update</button>
                        </form>
                        <form action="{{route('sub_link.destroy',[$sub_link->id])}}" method="post" class="form-inline-style">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn-xs btn-danger btn-style"><i class="fa fa-trash"></i>Delete</button>
                        </form>
                    </td>
                  
                </tr> 
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>Sub Link Title</th>
                    <th>Link Header</th>
                    <th>Add By</th>
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