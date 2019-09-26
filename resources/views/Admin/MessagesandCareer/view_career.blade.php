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
                    <th>Name</th>
                    <th>Email</th>
                    <th>Website</th>
                    <th>CV</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach (\App\CareerMessage::all() as $cm)
                 <tr class="stu{{$cm->id}}">
                    <td>
                    <p>@if($cm->is_seen == 0) <b> {{$cm->name}}</b> @else {{$cm->name}} @endif</p>
                    </td>
                    <td>
                    <p>@if($cm->is_seen == 0) <b> {{$cm->email}}</b> @else {{$cm->email}} @endif</p>
                    </td>
                    <td>
                        <p>@if($cm->is_seen == 0) <b> <a href="{{$cm->company_name}}">{{$cm->company_name}}</a></b> @else <a href="{{$cm->company_name}}" > {{$cm->company_name}}</a> @endif</p>
                    </td>
                    <td>
                        <p>@if($cm->is_seen == 0) <b> <a href="{{asset('Images/cv/files')}}/{{$cm->cv_file_path}}" >CV FILE</a></b> @else <a href="{{asset('Images/cv/files')}}/{{$cm->cv_file_path}}" > CV FILE</a> @endif</p>
                    </td>
                  
                    <td>
                            @if($cm->is_seen == 0)
                        <form action="{{route('career_data.show',$cm->id)}}" method="get" class="form-inline-style">
                            @csrf
                            <button type="submit" class="btn-xs btn-success btn-style"><i class="fa fa-eye"></i>Mark as View</button>
                        </form>
                        @endif
                        <form action="{{route('career_data.destroy',[$cm->id])}}" method="post" class="form-inline-style">
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
                        <th>Name</th>
                        <th>Email</th>
                        <th>Website</th>
                        <th>CV</th>
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