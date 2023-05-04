@extends('dashboard.admin')

@section('isi')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Data') }}</div>

                    <br>

                    <div>


                        <a href="{{ route('buyer.create') }}">
                            <button type="button" class="btn btn-primary">Buat</button>
                        </a>

                        <a href="{{ route('home') }}">
                            <button type="button" class="btn btn-primary">kembali</button>
                        </a>
                    </div>



                    <table class="table table-bordered">
                        <thead>
                            <th>
                                <tr>
                                    <td>No</td>
                                    <td>name</td>
                                    <td>age</td>
                                    <td>address</td>
                                    <td>Action</td>


                                </tr>
                            </th>
                        </thead>
                        </th>
                        <tbody>
                            @foreach ($buyers as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
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


                    </tr>
                </div>
            </div>
        </div>
    </div>
    <!DOCTYPE html>
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

    <body>
    @endsection
