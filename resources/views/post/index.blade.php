@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Data') }}</div>

                    <br>

                    <div>



                        <a href="{{ route('admin.post.index') }}">
                            <button type="button" class="btn btn-primary">kembali</button>
                        </a>
                    </div>



                    <table class="table table-bordered">
                        <thead>
                            <th>
                                <tr>
                                    <td>No</td>
                                    <td>Title</td>
                                    <td>Description</td>
                                    {{-- <td>Action</td> --}}


                                </tr>
                            </th>
                        </thead>
                        </th>
                        <tbody>
                            @foreach ($posts as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->description }}</td>
                                    {{-- <td>
                <form action="/post/{{ $item->id }}" method="POST">
                <a type="button" class="btn btn-warning" href="/post/{{ $item->id }}/edit">Edit</a>
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td> --}}




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









    </body>

    </html>
@endsection
