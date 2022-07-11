@extends('layouts.app')
@section('content')

    <head>
        <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">

        <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">

        <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

    </head>

    <body>
        <div class="content-wrapper">

            <section class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1>Professional</h1>
                  </div>
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active">Professionals</li>
                    </ol>
                  </div>
                </div>
              </div><!-- /.container-fluid -->
            </section>

        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">


                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title"><a href="{{route('professional.add')}}"><button type="button" class="btn btn-block bg-gradient-primary">Add Professional</button></a></h3>
                      <h3 class="card-title"><a href="#"><button style="margin-left:10px;" type="button" class="btn btn-block bg-gradient-success">Export</button></a></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>S.No</th>
                          <th>Image</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Mobile</th>
                          <th>Status</th>
                          <th>Registered Date</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @if($professionals->count())
                            @foreach ($professionals as $key => $item)
                <tr>
                <td>{{ $key + 1 }}</td>
                <td><img src="{{asset('storage/images/professionals/')}}/{{$item['image']}}" style="height:50px;width:50px;"></td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->mobile }}</td>
                <td>
                <div class="form-group">
                @if ($item->status == 1)
                <a
                class="btn btn-block btn-success btn-sm" href="{{route('professional.status',['id'=>$item->id] )}}">active</a>
                @else
                <a
                class="btn btn-block btn-danger btn-sm" href="{{route('professional.status',['id'=>$item->id] )}}">inactive</a>
                @endif
                </div>
                </td>
                <td>{{ $item->created_at }}</td>
                <td>

                <a href="{{ route('professional.details', ['id'=>$item->id] ) }}"><button type="button" class="btn btn-primary"><i
                class="fa fa-eye"></i></button></a>
                <button type="button" class="btn btn-danger" data-toggle="modal"
                data-target="#modal-delete7"><i
                class="fa fa-trash"></i></button>
                <div class="modal fade show" id="modal-delete7" style="padding-right: 17px; ;" aria-modal="true">
                <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title">Alert</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
                </div>
                <div class="modal-body">
                <p>Are You Sure You Want To Delete This Item ?</p>
                </div>
                <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                <a href="{{ route('professional.Delete', ['id'=>$item->id] ) }}"><button type="button" class="btn btn-primary">Yes</button></a>
                </div>
                </div>
                <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
                </div>
                <a href="#"><button type="button"
                class="btn btn-primary">Download</button></a>

                </td>
                </tr>

                           @endforeach

                            @else
                            <td colspan="8" class="dataTables_empty text-center">No data to show</td>
                                @endif


                        </tbody>
                        <tfoot>
                         <tr>
                          <th>S.No</th>
                          <th>Image</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Mobile</th>
                          <th>Status</th>
                          <th>Registered Date</th>
                          <th>Action</th>
                        </tr>
                        </tfoot>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
          </section>




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
  </script>
@endsection
