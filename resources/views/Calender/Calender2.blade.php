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
                    <h1>Events</h1>
                  </div>
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active">Events</li>
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
                    <a href="{{route('EventList.add')}}"><button type="button" class="btn btn-success float-right  "> <i class="fas fa-plus fa-xs"></i> Post event</button></a></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>S.No</th>
                          <th> Date </th>
                          <th>Event</th>
                          <th> Date of creation</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                            @if($list->count())
                            @foreach ($list as $key => $item)
                <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ date("d M ,Y",strtotime($item->date)) }}</td>
                <td>{{ $item->event->name }}</td>
                <td>{{ date("d M ,Y",strtotime($item->created_at)) }}</td>

<td>
                <a  class="btn btn-danger" href="{{ route('Event.Delete', ['id'=>$item->id] ) }}"><i
                class="fa fa-trash"></i></a>




                </td>
                </tr>

                           @endforeach

                            @else
                            <td colspan="4" class="dataTables_empty text-center">No data to show</td>
                                @endif


                        </tbody>
                        <tfoot>
                         <tr>
                          <th>S.No</th>
                          <th> Date </th>
                          <th>Event</th>
                          <th> Date of creation</th>
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
