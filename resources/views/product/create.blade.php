@extends('dashboard.admin')

@section('isi')
    <br>
    <a href="{{ route('admin.product.index') }}">
        <button type="button" class="btn btn-primary">Kembali</button>
    </a>
    <br>
    <br>

    <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-floating mb-3">
            <label for="name">name :</label>
            <br>
            <br>
            <input type="text" name="name" placeholder="Name">
        </div>
        <div class="form-floating mb-3">
            <label for="price">price :</label>
            <br>
            <br>
            <input type="text" name="price" placeholder="Price">
        </div>
        <div class="form-floating mb-3">
            <label for="stocks">stocks :</label>
            <br>
            <br>
            <input type="number" name="stocks" placeholder="Stocks">
        </div>
        <div class="form-floating mb-3">
            <label for="photo">Upload Photo :</label>
            <br>
            <br>
            <input type="file" name="photo" placeholder="Upload Photo">
        </div>

        <br>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
@endsection
