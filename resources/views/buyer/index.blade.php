@extends('dashboard.admin')

@section('isi')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ __('Data') }}</div>
                    <div class="card-body">
                        <div class="href mb-3">

                            <a href="{{ route('buyer.create') }}">
                                <button type="button" class="btn btn-primary mp-3">Buat</button>
                            </a>

                            {{-- <a href="{{ route('home') }}">
                                <button type="button" class="btn btn-primary ">kembali</button>
                            </a> --}}
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>name</th>
                                    <th>age</th>
                                    <th>address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($buyers as $item)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->age }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>
                                            <form action="/buyer/{{ $item->id }}" method="POST">
                                                <a type="button" class="btn btn-warning"
                                                    href="/buyer/{{ $item->id }}/edit">Edit</a>
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <!DOCTYPE html>
    <html lang="en">

    <head>


        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <style>
            .box {
                width: 1px;
                height: 1px;
                margin-bottom: 50px;
            }
        </style>
        <title>Posts</title>
    </head>

    <body> --}}
@endsection
