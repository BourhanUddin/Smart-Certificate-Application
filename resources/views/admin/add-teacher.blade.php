@extends('admin.layout')
@section('css-imports')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Teacher add</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Teacher</a></li>
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
                                <h3 class="card-title">Add <small>Teacher </small></h3>
                            </div>
                            <form method="POST" action="/admin/teacher/add" id="quickForm">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="nameInput">Name</label>
                                        <input type="text" name="name" class="form-control" id="nameInput"
                                            placeholder="Enter name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="emailInput">Email</label>
                                        <input type="email" name="email" class="form-control" id="emailInput"
                                            placeholder="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="phoneInput">Phone</label>
                                        <input type="numeric" name="phone" class="form-control" id="phoneInput"
                                            placeholder="Phone" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Select Designation </label>
                                        <select class="form-control" name="designation">
                                            @foreach ($designations as $item)
                                                <option value={{ $item }}> {{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Department</label>
                                        <select class="form-control" name="department_id">
                                            @foreach ($departments as $dept)
                                                <option  value="{{ $dept->id }}">
                                                    {{ $dept->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                @if(session('message'))
                                    <ul>
                                        <li style="color: green">{{ session('message') }}</li>
                                    </ul>
                                @endif
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                @foreach ($errors as $error)
                                    <ul>
                                        <li style="color: red">{{ $error }}</li>
                                    </ul>
                                @endforeach

                            </form>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>
        </section>

    </div>
@endsection
