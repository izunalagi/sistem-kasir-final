@extends('dashboard.admin')


@section('isi')
    <div class="">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><a href="{{ route('transaction.index') }}">
                                <button type="button" class="btn btn-outline-success">kembali</button>
                            </a>{{ __('Transaksi') }}</h3>
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                @if ($details->status == '0')
                                    <form action="{{ route('checkout.checkout', $details->id) }}" method="POST">
                                        @csrf
                                        <input class="btn btn-info mt-2" type="submit" value="Checkout">
                                    </form>
                                @else
                                    <p>Pesanan Selesai</p>
                                @endif

                            </div>
                        </div>
                    </div>

                    <div class="card-body table-responsive p-0">
                        <div class="row container">
                            <div class="col-sm-12 col-md-6">
                                <p class="text-md-start"><b>Buyer</b> : {{ $details->fkBuyer->name }}</p>
                                <p class="text-md-start"><b>Date</b> : {{ $details->date }}</p>
                                @php
                                    $total_price = 0;
                                @endphp
                                @foreach ($details->fkTransactionDetail as $item)
                                    @php
                                        $total_price += $item->total;
                                    @endphp
                                @endforeach
                                <p class="text-md-start"><b>Total Harga:</b>{{ number_format($total_price) }}K</p>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <form action="{{ route('checkout.create') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-9">
                                                <label>Minimal</label>
                                                <select class="form-control select2 select2-hidden-accessible"
                                                    style="width: 100%;" name="product_id">
                                                    @foreach ($products as $item)
                                                        {{-- {{ $selectedRole == $role->id ? (selected = 'selected') : '' }}> --}}
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <label>Qty</label>
                                                <input type="number" class="form-control" name="qty" id="">
                                                <input type="hidden" name="transaction_id" value="{{ $details->id }}">
                                            </div>
                                            <div>
                                                @if ($details->status == '0')
                                                    @csrf
                                                    <input class="btn btn-info mt-2" type="submit" value="Tambahkan">
                                                @else
                                                    <button type="submit" class="btn btn-secondary mt-2"
                                                        disabled>Tambahkan</button>
                                                @endif
                                            </div>



                                    </form>
                                </div>
                            </div>
                        </div>


                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Product</th>
                                    <th>qty</th>
                                    <th>total price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($details->fkTransactionDetail as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->fkProduct->name }}</td>
                                        <td>{{ $item->qty }}</td>
                                        <td>{{ $item->total }}K</td>
                                        <td class="">
                                            @if ($details->status == '0')
                                                <form action="{{ route('checkout.destroy', $item->id) }}" method="POST">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            @else
                                                <button type="button" class="btn btn-secondary" disabled>Delete</button>
                                            @endif
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
