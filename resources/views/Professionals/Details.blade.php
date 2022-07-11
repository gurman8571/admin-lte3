@extends('layouts.app')
@section('content')

    <head>
        <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">

        <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">

        <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
        <link rel="stylesheet" href="{{asset('/plugins/select2/css/select2.min.css')}}">

        <link rel="stylesheet" href="{{asset('/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">


    </head>

    <body>
        <div class="content-wrapper">


            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>


                            </h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Professional Details</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">
                                {{ $professional->name }}
                            </h3>
                        </div>
                        <div class="card-body">
                            <h4></h4>
                            <div class="row">
                                <div class="col-5 col-sm-3" style="background:#f2f2f2;">
                                    <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist"
                                        aria-orientation="vertical">
                                        <a class="nav-link side-link active" id="vert-tabs-home-tab" data-toggle="pill"
                                            href="#vert-tabs-home" role="tab" aria-controls="vert-tabs-home"
                                            aria-selected="true">Profile</a>


                                        <a class="nav-link side-link" id="vert-tabs-health-tab" data-toggle="pill"
                                            href="#vert-tabs-health" role="tab" aria-controls="vert-tabs-health"
                                            aria-selected="false">Images</a>
                                        <a class="nav-link side-link" id="vert-tabs-records-tab" data-toggle="pill"
                                            href="#vert-tabs-records" role="tab" aria-controls="vert-tabs-records"
                                            aria-selected="false">Skills</a>

                                    </div>
                                </div>
                                <div class="col-7 col-sm-9">
                                    <div class="tab-content" id="vert-tabs-tabContent">

                                        <div class="tab-pane text-left fade show active" id="vert-tabs-home" role="tabpanel"
                                            aria-labelledby="vert-tabs-home-tab">
                                            <section class="content">
                                                <div class="container-fluid">
                                                    <!-- SELECT2 EXAMPLE -->
                                                    <div class="card card-default ">
                                                        <div class="card-header headertop">
                                                            <h3 class="card-title">Profile</h3>

                                                            <div class="card-tools">
                                                                <a href="javascript:void()" data-toggle="modal"
                                                                    data-target="#profile"><i class="fa fa-edit"></i></a>
                                                            </div>

                                                        </div>
                                                        <!-- /.card-header -->
                                                        <div class="card-body">
                                                            <div class="row">

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <p><label>Name </label></p>
                                                                        <p> {{ $professional->name }}</p>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <p><label>Email</label></p>
                                                                        <p> {{ $professional->email }}</p>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <p><label>Mobile</label></p>
                                                                        <p> {{ $professional->mobile }}</p>
                                                                    </div>
                                                                </div>


                                                                <!---div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <p><label>password</label></p>
                                                                            <p>Singh</p>
                                                                        </div>
                                                                    </!div---->

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <p><label>address</label></p>
                                                                        <p> {{ $professional->address }}</p>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <p><label>Date of Register</label></p>
                                                                        <p> {{ $professional->created_at }}</p>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <p><label>Status</label></p>
                                                                        @if ($professional->status == 0)
                                                                            <p>inactive</p>
                                                                        @else
                                                                            <p>active</p>
                                                                        @endif
                                                                    </div>
                                                                </div>



                                                            </div>

                                                        </div>
                                                        <!-- /.card-body -->





                                                        <!-- <div class="card-header headertop">
                          <h3 class="card-title">Address</h3>
                              <div class="card-tools">
                                  <a href="javascript:void()" data-toggle="modal" data-target="#diagnostics-address" ><i class="fa fa-edit"></i></a>
                              </div>
                        </div>

                        <div class="card-body">
                          <div class="row">

                            <div class="col-md-4">
                              <div class="form-group">
                                <p><label>Building Name & Number</label></p>
                                <p>Rishab tower, F-16</p>
                              </div>
                            </div>

                             <div class="col-md-4">
                              <div class="form-group">
                                <p><label>Location / Area</label></p>
                                <p>Adarsh Park, Gomti Nagar</p>
                              </div>
                            </div>

                             <div class="col-md-4">
                              <div class="form-group">
                                <p><label>City</label></p>
                                <p>Lucknow</p>
                              </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-group">
                                <p><label>State</label></p>
                                <p>Uttar Pradesh</p>
                              </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-group">
                                <p><label>Pincode</label></p>
                                <p>226556</p>
                              </div>
                            </div>

                          </div>
                        </div>



                        <div class="card-header headertop">
                          <h3 class="card-title">About us</h3>

                          <div class="card-tools">
                                    <a href="javascript:void()" data-toggle="modal" data-target="#about" ><i class="fa fa-edit"></i></a>
                                  </div>
                        </div>

                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <p style="text-align:justify;">As you notice in the figure above, while the general trend for growth in the market looks healthy, the two main regions contributing to market growth by 2015 are the United States and the RoW (Rest of the World). The RoW market will expand by an estimated 8% from 2011 to 2015 and hence will be the major focus area for most medical diagnostics companies. In order to aid this growth, quite a few of the companies have setup global research, development and manufacturing centres within the emerging market economies and India and China host most of these centres</p>
                              </div>
                            </div>
                          </div>
                        </div>-->



                                                    </div>

                                                    <!-- /.row -->
                                                </div>

                                            </section>


                                        </div>


                                        <div class="tab-pane fade" id="vert-tabs-health" role="tabpanel"
                                            aria-labelledby="vert-tabs-health-tab">


                                            <section class="content">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-12">

                                                            <div class="card">

                                                                <div class="card-header">
                                                                    <div class="card-tools" style="margin-right:2px;">
                                                                        <a href="javascript:void()" data-toggle="modal"
                                                                            data-target="#modal-add-image"> <button
                                                                                type="button"
                                                                                class="btn  bg-gradient-primary btn-position">Add
                                                                                Image</button></a>
                                                                    </div>
                                                                </div>

                                                                <!-- /.card-header -->
                                                                <div class="card-body">
                                                                    <table id="example1"
                                                                        class="table table-bordered table-striped">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Image</th>
                                                                                <th>Status</th>
                                                                                <th>Action</th>
                                                                                <th>Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>



@if($images->count())
@foreach($images as $key=>$item)

<tr>


    <td><img src="{{asset('storage/images/professionals/')}}/{{$item['image']}}"
            style="height:100px;width:100px;">
    </td>

    <td id="status_pending22">
        @if($item->status == 0)
        <span
            class="badge badge-warning">
                 pending
        </span>

        @else
        <span
        class="badge badge-info">
         approved
        </span>
@endif
    </td>
    <td>
        <select class="form-control"
            id="status_update22">
            <option value="0" selected>
                Pending</option>
            <option value="1"> Approved
            </option>
        </select>
    </td>

    <td>

        <a class="btn btn-danger btn-sm"

            href="{{route('Professional.image.delete',['id'=>$item->id] )}}">
            <i class="fas fa-trash">
            </i>
        </a>
    </td>

</tr>

@endforeach
@else
<td colspan="4" class="dataTables_empty text-center">No data to show</td>
@endif





                                                                        </tbody>
                                                                        <tfoot>

                                                                        </tfoot>
                                                                    </table>
                                                                </div>
                                                                <!-- /.card-body -->
                                                            </div>

                                                        </div>
                                                        <!-- /.col -->
                                                    </div>
                                                    <!-- /.row -->
                                                </div>
                                                <!-- /.container-fluid -->
                                            </section>
                                        </div>

                                        <div class="tab-pane fade" id="vert-tabs-records" role="tabpanel"
                                            aria-labelledby="vert-tabs-records-tab">



                                            <section class="content">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="card">

                                                                <div class="card-header">
                                                                    <div class="card-tools" style="margin-right:2px;">
                                                                        <a href="javascript:void()" data-toggle="modal"
                                                                            data-target="#add-skill"> <button
                                                                                type="button"
                                                                                class="btn  bg-gradient-primary btn-position">Add
                                                                                Skill</button></a>
                                                                    </div>
                                                                </div>

                                                                <!-- /.card-header -->
                                                                <div class="card-body">
                                                                    <table id="example9"
                                                                        class="table table-bordered table-striped">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>S.no</th>
                                                                                <th>Skill</th>
                                                                                <th>Delete</th>

                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>



                                                                            @if ($professional->count())
                                                                                @foreach ($professional['skills'] as $key => $item)
                                                                                    <tr>
                                                                                        <td>{{ $key + 1 }}</td>
                                                                                        <td>{{ $item->name }}</td>
                                                                                        <td><a class=" btn btn-danger"
                                                                                                href="{{ route('professional.skill.Delete', ['professional_id' => $professional->id,'skill_id' =>$item->id]) }}"><i
                                                                                                    class="fa fa-trash"></i></a>
                                                                                        </td>
                                                                                    </tr>
                                                                                @endforeach
                                                                            @else
                                                                                <tr>

                                                                                    <td class="text-center"
                                                                                        colspan="2">No skill to show
                                                                                    </td>
                                                                                </tr>
                                                                            @endif


                                                                        </tbody>
                                                                        <tfoot>

                                                                        </tfoot>
                                                                    </table>
                                                                </div>
                                                                <!-- /.card-body -->
                                                            </div>

                                                        </div>
                                                        <!-- /.col -->
                                                    </div>
                                                    <!-- /.row -->
                                                </div>
                                                <!-- /.container-fluid -->
                                            </section>


                                        </div>






                                    </div>
                                </div>
                            </div>


                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.card -->


                    <!-- /.card -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>

        <div class="modal fade" id="profile">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Update Profile</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">



                        <!-- SELECT2 EXAMPLE -->
                        <form action="{{ route('professional.update') }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $professional->id }}">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" class="form-control" name="name"
                                            id="exampleInputEmail1" value="{{ $professional->name }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control" name="email"
                                            id="exampleInputEmail1" value="{{ $professional->email }}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mobile</label>
                                        <input type="text" class="form-control" name="mobile"
                                            id="exampleInputEmail1" value="{{ $professional->mobile }}">
                                    </div>
                                </div>



                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Address</label>
                                        <input type="text" class="form-control" name="address"
                                            id="exampleInputEmail1" value="{{ $professional->address }}">
                                    </div>
                                </div>

                            </div>


                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>

                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>



        <div class="modal fade" id="add-skill">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Skill</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">



                        <!-- SELECT2 EXAMPLE -->
                        <form action="{{ route('Profession.add_skill') }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value={{ $professional->id }}>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Skill</label>
                                        <select class="select2" name="skill[]" multiple="multiple"
                                            data-placeholder="Select Skill" style="width: 100%;">
                                            @foreach ($skills as $key => $item)
                                                <option value="{{ $key }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                            </div>


                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>

                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>


        <div class="modal fade" id="modal-add-image">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Image</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">



                        <form action="{{route('Professional.images')}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group">
                                    <label for="exampleInputFile">More Images</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="hidden" name="id" value="{{$professional['id']}}">
                                            <input type="file" name="image" multiple class="custom-file-input"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>

                                    </div>
                                </div>


                            </div>


                          </div>
                             <div class="modal-footer justify-content-between">
                           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                           <button type="submit" class="btn btn-primary">Add</button>
                    </div>

             </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>










    </body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<!-- Bootstrap 4 -->

<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- DataTables  & Plugins -->

<!-- AdminLTE App -->

<script src="{{asset('dist/js/adminlte.min.js')}}"></script>

<!-- AdminLTE for demo purposes -->

<script src="{{asset('dist/js/demo.js')}}"></script>

<!-- Page specific script -->

<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>

<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>

<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>

<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>

<script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>

<script src="{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>

<script src="{{asset('plugins/jszip/jszip.min.js')}}"></script>

<script src="{{asset('plugins/pdfmake/pdfmake.min.js')}}"></script>

<script src="{{asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}} "></script>
<script>
$(function () {
  $("#example1").DataTable({
    "responsive": true, "lengthChange": false, "autoWidth": false,

  }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  $('#example2').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": false,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
  });
});

$(function () {
  $("#example9").DataTable({
    "responsive": true, "lengthChange": false, "autoWidth": false,

  }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  $('#example2').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": false,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
  });
});
</script>

<script src="{{asset('/plugins/select2/js/select2.full.min.js')}}"></script>
<script>
  $(function () {
     //Initialize Select2 Elements
     $('.select2').select2()

     //Initialize Select2 Elements
     $('.select2bs4').select2({
       theme: 'bootstrap4'
     })
 })
</script>

@endsection

