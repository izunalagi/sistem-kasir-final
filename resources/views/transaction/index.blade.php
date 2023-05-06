@extends('dashboard.admin')


@section('isi')
    <div class="container">
        <div class="row ">
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ __('Transaksi') }}</div>

                    <br>

                    <div>

                        <a href="{{ route('transaction.create') }}">
                            <button type="button" class="btn btn-outline-success">Buat</button>
                        </a>
                        <br>
                        <br>
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
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->fkBuyer->name }}</td>
                                    <td>{{ $item->date }}</td>
                                    <td><a href="{{ route('checkout.index', $item->id) }}">
                                            <button type="button" class="btn btn-info">Detail Transaksi</button>
                                        </a></td>
                                    <td>
                                        <div class="d-grid gap-2 col-6 mx-auto">

                                            @if ($item->status == '0')
                                                <button class="btn btn-warning" type="button">Menunggu</button>
                                            @else
                                                <button type="button" class="btn btn-success" disabled>Selesai</button>
                                            @endif

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


                    </tr>
                </div>
            </div>
        </div>
</div @endsection
