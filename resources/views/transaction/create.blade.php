@extends('dashboard.admin')


@section('isi')
    <br>
    <a href="{{ route('transaction.index') }}">
        <button type="button" class="btn btn-primary">Kembali</button>
    </a>
    <br>
    <br>

    <form action="{{ route('transaction.store') }}" method="post">
        @csrf
        <div class="form-floating mb-3">
            <label for="buyer">name :</label>
            <select name="buyer_id" id="">
                @foreach ($buyers as $item)
                    {
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                    }
                @endforeach
            </select>
            <br>
            <br>
        </div>
        <div class="form-floating mb-3">
            <label for="date">date :</label>

            <input type="date" name="date" placeholder="Date">

        </div>

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
