@extends('dashboard.admin')

@section('isi')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card-head">Tambah Buyer</div>
                <div class="card">
                    <div class="card-body">
                        <div class="row d-flex flex-row-reverse">

                            <a href="{{ route('buyer.index') }}">
                                <button type="button" class="btn btn-outline-dark ">Kembali</button>
                            </a>
                        </div>
                        <form action="{{ route('buyer.store') }}" method="post">
                            @csrf
                            <div class="form-floating mb-3">
                                <label for="name">name :</label>
                                <input type="text" name="name" placeholder="Name" class="form-control">
                                @error('name')
                                    <span class="me-2 text-danger fw-bold">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <label for="age">age :</label>
                                <input type="text" name="age" placeholder="Age" class="form-control">
                                @error('age')
                                    <span class="me-2 text-danger fw-bold">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-floating mb-4">
                                <label for="address">address :</label>
                                <input type="text" name="address" placeholder="Address" class="form-control">
                                @error('address')
                                    <span class="me-2 text-danger fw-bold">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="row justify-content-center">
                                <button type="submit" class="btn btn-primary col-md-4">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


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
