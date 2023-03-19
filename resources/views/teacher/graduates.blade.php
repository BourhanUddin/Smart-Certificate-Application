@extends('teacher.layout')
@section('css')
    <link rel="stylesheet" href="{{asset('lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('lte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Graduates</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Graduates</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Students</h3>
                <form method="get" action="/teacher/graduates" >
                    <select class="form-control" name="batch">
                        <option value="-1">--Select Batch--</option>
                        @for($i=1;$i<=$maxBatch;$i++)
                        <option
                          @if(isset($selected_batch))
                            @if($selected_batch == $i)
                              selected
                            @endif
                          @endif
                        value="{{$i}}">{{$i}}</option>
                        @endfor
                    </select>
                    <button type="submit" class="btn btn-primary my-3">Submit</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th>#</th>
                        <th>Name </th>
                        <th>Roll</th>
                        <th>Email</th>
                        <th>Batch</th>
                        <th>Completed Credit</th>
                        <th>CGPA</th>
                        <th>Download Certificate</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($students as $student)
                        <tr>
                            <td>{{$loop->index}}</td>
                            <td>{{$student->name}}</td>
                            <td>{{$student->roll}}</td>
                            <td>{{$student->email}}</td>
                            <td>{{$student->batch}}</td>
                            <td>{{number_format($student->completed_credit,2,'.',',')}}</td>
                            <td>{{$student->cgpa}}</td>
                            <td>
                                {{-- <a href="/teacher/certificate/{{$student->id}}"><i class="fa fa-eye"></i></a> --}}
                                {{-- <a href="/teacher/cert/{{$student->id}}"><i class="fa fa-eye"></i></a> --}}
                                <a href="/teacher/download-cert/{{$student->id}}"><i class="fa fa-eye"></i></a>
                            </td>
                        </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                        <th>#</th>
                        <th>Name </th>
                        <th>Roll</th>
                        <th>Email</th>
                        <th>Batch</th>
                        <th>Completed Credit</th>
                        <th>CGPA</th>
                        <th>Downlaod certificate</th>
                  </tr>
                  </tfoot>
                </table>
                <a href="download-all?ids={{$students->implode('id',',')}}" class="btn btn-secondary">Download certificate of students listed above</a>
                *(It may take some time to generate pdf and compress them into zip)
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
    <!-- /.content -->
  </div>
@endsection
@section('js')
    <script src="{{asset('lte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('lte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('lte/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('lte/plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('lte/plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('lte/plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset('lte/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('lte/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('lte/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

    <script>
        $(function () {
          $("#example1").DataTable({
            "responsive": true, "lengthChange": true, "autoWidth": false,"info":true,
            "buttons": ["copy", "csv", "excel", "pdf", "print"]
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
