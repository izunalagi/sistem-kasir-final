@extends('dashboard.admin')

@section('judul')
    Produk
@endsection


@section('isi')
    <div class="container">
        <div class="row ">
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ __('Data') }}</div>
                    <div class="card-body">
                        <a href="{{ route('admin.product.create') }}">
                            <button type="button" class="btn btn-primary mb-3">Buat</button>
                        </a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>price</th>
                                    <th>stocks</th>
                                    <th>category</th>
                                    <th>photo</th>
                                    <th>action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($products as $item)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ number_format($item->price) }}K</td>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
