@extends('dashboard.admin')
@section('isi')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('admin.post.create') }}" type="button" class="btn btn-primary mb-3">
                            Tambah
                        </a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>gambar</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            @if ($item->photo != null)
                                                <div style="width:200px">
                                                    <img src="{{ asset('storage/' . $item->photo) }}" class="img-fluid"
                                                        alt="...">

                                                </div>
                                            @else
                                                <p class="text-info">tidak ada foto</p>
                                            @endif
                                        </td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>

                                            <form action="{{ route('admin.post.destroy', $item->id) }}" method="post">
                                                <a href="{{ route('admin.post.edit', $item->id) }}" type="button"
                                                    class="btn btn-primary me-3">Edit</a>
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger me-3">Delete</button>
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
