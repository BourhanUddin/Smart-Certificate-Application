@extends('layouts.master')
@section('css-imports')
  <link rel="stylesheet" href= "{{asset('css/alumni-info.css')}}"/>
@endsection
@section('content')
<div>
  <p class="test">
    Alumni info
  </p>
  <table class="table table-responsive table-bordered alumni-info">
  <tbody>
    <tr>
      <td>Name</td>
      <td>{{$student->name}}</td>
    </tr>
    <tr>
      <td>Roll</td>
      <td>{{$student->roll}}</td>
    <tr>
      <td>Email</td>
      <td>{{$student->email }}</td>
    </tr>
    <tr>
      <td>Phone</td>
      <td> {{$student->phone}}  </td>
    </tr>
    <tr>
      <td>Completed credit</td>
      <td> {{$student->completed_credit}}</td>
    </tr>
    <tr>
      <td> CGPA </td>
      <td> {{$student->cgpa}} </td>
    </tr>
  </tbody>
</table>
</div>
@endsection
