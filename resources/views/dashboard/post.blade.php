@extends('dashboard.admin')

@section('judul')
    List Users
@endsection

@section('isi')
    <table class="table table-borderless">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        @foreach ($users as $user)
            <tbody>
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <form action="">
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>
@endsection
