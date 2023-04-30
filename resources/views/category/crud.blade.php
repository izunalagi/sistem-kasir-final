@extends('dashboard.admin')

@section('judul')
    Produk
@endsection


@section('isi')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Data') }}</div>

                    <br>

                    <div>

                        <a href="{{ route('category.create') }}">
                            <button type="button" class="btn btn-primary">Buat</button>
                        </a>

                        {{-- <a href="{{ route('home') }}">
                            <button type="button" class="btn btn-primary">kembali</button>
                        </a>
                    </div> --}}



                        <table class="table table-bordered">
                            <thead>
                                <th>
                                    <tr>
                                        <td>No</td>
                                        <td>Name</td>
                                        <td>action</td>
                                    </tr>
                                </th>
                            </thead>
                            </th>
                            <tbody>
                                @foreach ($category as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>
                                            <form action="{{ route('category.destroy', $item->id) }}" method="POST">
                                                <a type="button" class="btn btn-warning"
                                                    href="{{ route('category.edit', $item->id) }}/edit">Edit</a>
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
    @endsection
