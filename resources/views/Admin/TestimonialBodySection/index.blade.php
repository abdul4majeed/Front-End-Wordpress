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
                    <th>Name</th>
                    <th>Description</th>
                    <th>Role</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($testimonials_body as $testimonial_body)
                 <tr class="stu{{$testimonial_body->id}}">
                    <td>
                       <p>{{$testimonial_body->name}}</p>
                    </td>
                    <td>
                            <p>{{$testimonial_body->description}}</p>
                        </td>
                        <td>
                                <p>{{$testimonial_body->role}}</p>
                        </td>
                        <td>
                                <p><img src="{{$testimonial_body->pic_url}}" alt="{{$testimonial_body->name}}" ></p>
                        </td>
                  
                    <td>
                        <form action="{{route('testimonialBodySection.edit',[$testimonial_body->id])}}" method="get" class="form-inline-style">
                            @csrf
                            <button type="submit" class="btn-xs btn-success btn-style"><i class="fa fa-edit"></i>Update</button>
                        </form>
                        <form action="{{route('testimonialBodySection.destroy',[$testimonial_body->id])}}" method="post" class="form-inline-style">
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
                        <th>About Us Title</th>
                        <th>About Us Description</th>
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