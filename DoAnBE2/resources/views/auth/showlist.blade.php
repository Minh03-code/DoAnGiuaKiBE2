@extends('dashboard')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($list as $key => $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td><a href="#">{{$user->name}}</a></td>
                    <td>{{$user->email}}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
    <div class="container" style="display: flex;">
        <div class="d-felx justify-content-center">
            {{ $list->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection
