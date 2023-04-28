@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Data') }}</div>

                    <br>

                    <div>
                        {{-- 
                        <a href="{{ route('transaction.create') }}">
                            <button type="button" class="btn btn-primary">Buat</button>
                        </a> --}}

                        <a href="{{ route('home') }}">
                            <button type="button" class="btn btn-primary">kembali</button>
                        </a>
                    </div>



                    <table class="table table-bordered">
                        <thead>
                            <th>
                                <tr>
                                    <td>No</td>
                                    <td>buyer</td>
                                    <td>date</td>


                                </tr>
                            </th>
                        </thead>
                        </th>
                        <tbody>
                            @foreach ($transactions as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->buyer_id }}</td>
                                    <td>{{ $item->date }}</td>
                                    {{-- <td>
                                            <form action="/post/{{ $item->id }}" method="POST">
                                                <a type="button" class="btn btn-warning"
                                                    href="/post/{{ $item->id }}/edit">Edit</a>
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
@endsection
