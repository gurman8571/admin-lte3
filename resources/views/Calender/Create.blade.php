@extends('layouts.app')
@section('content')

    <head>
        <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">

        <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/plugins/select2/css/select2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
        <link rel="stylesheet"
            href="{{asset('plugins/fullcalendar/main.min.css')}}">
        <link rel="stylesheet" href="{{ asset('plugins/fullcalendar-daygrid/main.min.css  ') }}">
        <link rel="stylesheet" href="{{ asset('plugins/fullcalendar-timegrid/main.min.css ') }}">
        <link rel="stylesheet" href="{{ asset('plugins/fullcalendar-bootstrap/main.min.css') }} ">
    </head>

    <body>

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Add Event</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Add Event</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <section class="col-lg-6 mx-auto connectedSortable">

                            <div class="card bg-gradient-primary d-none">

                                <div class="card-footer bg-transparent">
                                    <div class="row">
                                        <div class="col-4 text-center">
                                            <div id="sparkline-1"></div>
                                        </div>
                                        <div class="col-4 text-center">
                                            <div id="sparkline-2"></div>
                                        </div>
                                        <div class="col-4 text-center">
                                            <div id="sparkline-3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <form action="{{route('EventList.create')}}" method="POST">

                                @csrf

                                <div class="mt-2">

                                    <h3 class="card-title">
                                        <i class="far fa-calendar-alt m-2"></i>
                                        Select date
                                    </h3>
                                    <input type="date" name="date" class="form-control" id="" required>

                                </div>
                                <div class="card-body pt-0">
                                    <div id="calendar" style="width: 100%"></div>
                                </div>



                                <div class="mt-2">

                                    <select id="event" class="form-control" name="event" required>
                                        <option selected disabled> Select event</option>
                                        @foreach ($events as $key => $item)
                                            <option value="{{ $key }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mt-2">
                                    <button type="submit" class="btn btn-success mt-3 mb-5" id="submit">Submit</button>
                                </div>

                            </form>

                        </section>

                    </div>
                </div>
            </section>
        </div>





    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"
        integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- jQuery UI 1.11.4 -->

    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('dist/js/demo.js') }}"></script>
    <script src="{{ asset('/plugins/select2/js/select2.full.min.js') }}"></script>
    <!-----calenders--->
    <!-- fullCalendar 2.2.5 -->
    <!-- Page specific script -->
@endsection
