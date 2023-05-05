{{-- @extends('dashboard.admin')

@section('isi')
    @foreach ($transactions as $item)
        <p class="text-md-start">Buyer:{{ $item->fkBuyer->name }}</p>
    @endforeach
@endsection --}}

@extends('dashboard.admin')


@section('isi')
    <div class="container">
        <div class="row ">
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ __('Transaksi') }}</div>

                    <br>

                    <div>
                        <a href="{{ route('transaction.index') }}">
                            <button type="button" class="btn btn-outline-success">kembali</button>
                        </a>
                    </div>


                    <form action="{{ route('checkout.index', $ganti->id) }}" method="POST">
                        <p class="text-md-start">Buyer:{{ $ganti->fkBuyer->name }}</p>
                        <p class="text-md-start">Date:{{ $ganti->date }}</p>

                    </form>

                    {{-- <a href="{{ route('checkout.create') }}">
                        <button type="button" class="btn btn-outline-success">Pilih Pesanan</button>
                    </a> --}}


                    {{-- <table class="table table-bordered">
                        <thead>
                            <th>
                                <tr>
                                    <td>No</td>
                                    <td>buyer</td>
                                    <td>date</td>
                                    <td>transaksi</td>
                                    <td>Status</td>
                                    <td>Action</td>

                                </tr>
                            </th>
                        </thead>
                        </th>
                        <tbody>
                            @foreach ($transactions as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->fkBuyer->name }}</td>
                                    <td>{{ $item->date }}</td>
                                    <td><a href="{{ route('checkout.index') }}">
                                            <button type="button" class="btn btn-info">Detail Transaksi</button>
                                        </a></td>
                                    <td>
                                        <div class="d-grid gap-2 col-6 mx-auto">
                                            <button class="btn btn-warning" type="button">Menunggu</button>
                                        </div>
                                    </td>
                                    <td>
                                        <form action="{{ route('transaction.destroy', $item->id) }}" method="POST">
                                            <a type="button" class="btn btn-secondary"
                                                href="{{ route('transaction.edit', $item->id) }}">Edit</a>
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>


                    </tr> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
