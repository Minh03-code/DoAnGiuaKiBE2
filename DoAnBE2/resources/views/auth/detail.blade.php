@extends('dashboard')

@section('content')

<table class="table">
    <tbody>
      <tr>
        <th scope="row">Image</th>
        <td><img style="width: 100px; height: 100px;" src={{asset($user->image.'')}} alt="Defect Image"></td>
      </tr>
      <tr>
        <th scope="row">ID</th>
        <td>{{$user->id}}</td>
      </tr>
      <tr>
        <th scope="row">Name</th>
        <td>{{$user->name}}</td>
      </tr>
      <tr>
        <th scope="row">Email</th>
        <td>{{$user->email}}</td>
      </tr>
      <tr>
        <th scope="row">Phone</th>
        <td>{{$user->phone}}</td>
      </tr>
    </tbody>
  </table>

@endsection