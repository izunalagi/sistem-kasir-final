@extends('dashboard.admin')


@section('isi')
    <div class="container">
        <div class="row ">
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ __('Data') }}</div>

                    <br>

                    <div>

                        <a href="{{ route('transaction.create') }}">
                            <button type="button" class="btn btn-outline-success">Buat</button>
                        </a>

                        <a href="{{ route('home') }}">
                            <button type="button" class="btn btn-outline-success">kembali</button>
                        </a>
                    </div>



                    <table class="table table-bordered">
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
                                    <td><a href="{{ route('checkout.index', $item->id) }}">
                                            <button type="button" class="btn btn-info">Detail Transaksi</button>
                                        </a></td>
                                    <td>
                                        <div class="d-grid gap-2 col-6 mx-auto">

                                            @if ($item->status == '0')
                                                <button class="btn btn-warning" type="button">Menunggu</button>
                                            @else
                                                <button class="btn btn-success" type="button">Selesai</button>
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
