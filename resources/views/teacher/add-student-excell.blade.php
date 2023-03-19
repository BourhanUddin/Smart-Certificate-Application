@extends('teacher.layout')
@section('css-imports')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Student add</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Student</a></li>
                            <li class="breadcrumb-item active">Add</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Add <small>Student</small></h3>
                            </div>
                            <form method="POST" action="/teacher/student/add-excell" id="quickForm"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="">Select batch</label>
                                        <select class="form-control" name="batch">
                                            @for ($i = 1; $i <= $maxBatch; $i++)
                                                <option
                                                    @if (isset($selected_batch)) @if ($selected_batch == $i)
              selected @endif
                                                    @endif
                                                    value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="nameInput">Select excell file</label>
                                        <input type="file" name="excell" class="form-control" id="nameInput"
                                            placeholder="Enter name">
                                    </div>

                                </div>
                                @if (session('message'))
                                    <ul>
                                        <li style="color: green;">{{ session('message') }}</li>
                                    </ul>
                                @endif
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>
        </section>

    </div>
@endsection
