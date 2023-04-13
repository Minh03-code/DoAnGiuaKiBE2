@extends('dashboard')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($list as $key => $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td><img style="width: 50px; height: 50px;" src={{asset($user->image.'')}} alt="Defect Image"></td>
                    <td><a href="{{ route('show-detail', ['id'=>$user->id])}}">{{$user->name}}</a></td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    
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
