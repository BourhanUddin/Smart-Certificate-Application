@extends('admin.layout')
@section('css-imports')
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection
@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Update student information</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Student</a></li>
                <li class="breadcrumb-item active">Edit</li>
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
              <h3 class="card-title">Edit <small>Student</small></h3>
            </div>
            <form method="POST" action="/admin/student/update/{{$student->id}}"  id="quickForm">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="nameInput">Name</label>
                        <input type="text" name="name" class="form-control" id="nameInput" placeholder="Enter name" value="{{$student->name}}">
                    </div>
                    <div class="form-group">
                        <label for="rollInput">Roll</label>
                        <input type="number" name="roll" class="form-control" id="password" placeholder="Roll" value="{{$student->roll}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="batch">Batch</label>
                        <input type="number" name="batch" class="form-control" id="password" placeholder="Batch" value="{{$student->batch}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="emailInput">Email</label>
                        <input type="email" name="email" class="form-control" id="emailInput" placeholder="email" value="{{$student->email}}">
                    </div>

                    <div class="form-group">
                        <label for="phoneInput">Phone</label>
                        <input type="numeric" name="phone" class="form-control" id="phoneInput" placeholder="Phone" value="{{$student->phone}}">
                    </div>

                    <div class="form-group">
                        <label for="phoneInput">Completed credit</label>
                        <input type="numeric" name="completed_credit" class="form-control" id="phoneInput" placeholder="Completed credit" value="{{round($student->completed_credit,2)}}">
                    </div>
                    <div class="form-group">
                        <label for="phoneInput">CGPA</label>
                        <input type="numeric" name="cgpa" class="form-control" id="phoneInput" placeholder="cgpa" value="{{$student->cgpa}}">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                @foreach ($errors as $error)
                    <ul>
                    <li style="color: red">{{$error}}</li>
                    </ul>
                @endforeach
                @if(session('message'))
                    <ul>
                        <li style="color: green">{{session('message')}}</li>
                    </ul>
                @endif
            </form>
        </div>
    </div>
    <div class="col-md-6"></div>
  </div>
</div>
</section>

</div>
@endsection
