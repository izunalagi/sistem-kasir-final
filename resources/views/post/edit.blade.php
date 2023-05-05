@extends('dashboard.admin')
@section('isi')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.post.update', $post->id) }}" method="post"
                            enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label">Judul</label>
                                <input type="text" name="title" class="form-control" id="title"
                                    value="{{ $post->title }}">
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="description" id="description" value="{{ $post->description }}"></textarea>
                            </div>
                            <div class="form-floating mb-3">
                                <label for="photo">Upload Photo :</label>
                                <input type="file" name="photo" placeholder="Upload Photo">
                            </div>

                            <div class="row justify-content-between">
                                <button type="submit" class="btn btn-primary me-3">Simpan</button>
                                <a href="{{ route('admin.post.index') }}" type="button" class="btn btn-danger">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
