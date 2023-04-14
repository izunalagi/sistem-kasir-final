@extends('dashboard.admin')

@section('judul')
    CREATE
@endsection

@section('isi')
    <br>
    <a href="{{ route('post.data') }}">
        <button type="button" class="btn btn-primary">Kembali</button>
    </a>
    <br>
    <br>

    <form action="{{ route('post.store') }}" method="post">
        @csrf
        <div class="form-floating mb-3">
            <label for="title">Title :</label>
            <br>
            <input type="text" name="title" placeholder="Title">
        </div>
        <div class="form-floating">
            <label for="description">Description :</label>
            <br>
            <input type="text" name="description" placeholder="Description">
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
