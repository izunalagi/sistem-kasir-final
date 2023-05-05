@extends('dashboard.admin')


@section('isi')
    <div class="container">
        <div class="row ">
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ __('Data') }}</div>
                    <div class="card-body">
                        <div class="href mb-3">
                            <a href="{{ route('transaction.create') }}">
                                <button type="button" class="btn btn-outline-success">Buat</button>
                            </a>

                            <a href="{{ route('home') }}">
                                <button type="button" class="btn btn-outline-dark">kembali</button>
                            </a>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>buyer</th>
                                    <th>date</th>
                                    <th>transaksi</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($transactions as $item)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
