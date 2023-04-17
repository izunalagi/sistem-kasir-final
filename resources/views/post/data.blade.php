@extends('dashboard.admin')

@section('judul')
    Post Data
@endsection


@section('isi')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Data') }}</div>

                    <br>

                    <div>

                        <a href="{{ route('admin.post.create') }}">
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
                                        <td>Title</td>
                                        <td>Description</td>
                                        <td>Action</td>


                                    </tr>
                                </th>
                            </thead>
                            </th>
                            <tbody>
                                @foreach ($posts as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>
                                            <form action="{{ route('admin.post.destroy', $item->id) }}" method="POST">
                                                <a type="button" class="btn btn-warning"
                                                    href="{{ route('admin.post.edit', $item->id) }}">Edit</a>
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
