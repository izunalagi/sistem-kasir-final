@extends('dashboard.admin')
@section('isi')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.post.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Judul</label>
                                <input type="text" name="title" class="form-control" id="title">
                                @error('tittle')
                                    <span class="me-2 text-danger fw-bold">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="description" id="description"></textarea>
                                @error('description')
                                    <span class="me-2 text-danger fw-bold">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <label for="photo">Upload Photo :</label>
                                <input type="file" name="photo" placeholder="Upload Photo">
                                @error('photo')
                                    <span class="me-2 text-danger fw-bold">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="row justify-content-between">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="{{ route('admin.post.index') }}" type="button" class="btn btn-danger">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
