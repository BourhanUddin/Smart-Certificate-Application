@extends('teacher.layout')
@section('css-imports')
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
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
            <form method="POST" action="/teacher/student/"  id="quickForm">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="nameInput">Name</label>
                        <input type="text" name="name" class="form-control" id="nameInput" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="rollInput">Roll</label>
                        <input type="number" name="roll" class="form-control" id="password" placeholder="Roll">
                    </div>
                    <div class="form-group">
                        <label for="batch">Batch</label>
                        <input type="number" name="batch" class="form-control" id="password" placeholder="Batch">
                    </div>
                    <div class="form-group">
                        <label for="emailInput">Email</label>
                        <input type="email" name="email" class="form-control" id="emailInput" placeholder="email">
                    </div>

                    <div class="form-group">
                        <label for="phoneInput">Phone</label>
                        <input type="numeric" name="phone" class="form-control" id="phoneInput" placeholder="Phone">
                    </div>
                </div>
                @if (session('message'))
                    <ul>
                    <li style="color: green;">{{session('message')}}</li>
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
