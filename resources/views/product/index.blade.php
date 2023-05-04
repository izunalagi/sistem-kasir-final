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

                        <a href="{{ route('admin.product.create') }}">
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
                                        <td>price</td>
                                        <td>stocks</td>
                                        <td>category</td>
                                        <td>photo</td>
                                        <td>action</td>
                                    </tr>
                                </th>
                            </thead>
                            </th>
                            <tbody>
                                @foreach ($products as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->stocks }}</td>
                                        <td>{{ $item->fkCategory->name }}</td>
                                        {{-- <td>{{ $item->category_id --}}

                                        <td>
                                            @if ($item->photo != null)
                                                <div style="width:100px">
                                                    <img src="{{ asset('storage/' . $item->photo) }}" class="img-fluid"
                                                        alt="...">

                                                </div>
                                            @else
                                                <p class="text-info">tidak ada foto</p>
                                            @endif
                                        </td>
                                        <td>
                                            <form action="{{ route('admin.product.destroy', $item->id) }}" method="POST">
                                                <a type="button" class="btn btn-warning"
                                                    href="{{ route('admin.product.edit', $item->id) }}">Edit</a>
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
