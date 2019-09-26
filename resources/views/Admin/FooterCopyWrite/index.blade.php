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

            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Copyright</th>
                    <th>Site Name</th>
                    <th>Site Designer Name</th>
                    <th>Site Developer Name</th>
                    <th>URL</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($footer_contents as $footer_content)
                 <tr class="stu{{$footer_content->id}}">
                    <td>
                       <p>{{$footer_content->footer_copyright_string}}</p>
                    </td>
                    <td>
                        <p>{{$footer_content->footer_site_name_string}}</p>
                    </td>
                    <td>
                            <p>{{$footer_content->footer_designer_title}}</p>
                        </td>
                     <td>
                        <p>{{$footer_content->footer_developer_name}}</p>
                     </td>
                     <td>
                            <p>{{$footer_content->footer_url}}</p>
                        </td>
                  
                    <td>
                        <form action="{{route('footerCopyWrite.edit',[$footer_content->id])}}" method="get" class="form-inline-style">
                            @csrf
                            <button type="submit" class="btn-xs btn-success btn-style"><i class="fa fa-edit"></i>Update</button>
                        </form>
                        {{-- <form action="{{route('footerCopyWrite.destroy',[$footer_content->id])}}" method="post" class="form-inline-style">
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
                        <th>Copyright</th>
                        <th>Site Name</th>
                        <th>Site Designer Name</th>
                        <th>Site Developer Name</th>
                        <th>URL</th>
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