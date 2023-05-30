@extends('layout/aplikasi')

@section('konten')
    <a href='/people' class="btn btn-secondary"><< Back</a>
    <form method="post" action="{{ '/people/'. $data->name }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <h1>Name : {{ $data->name}}</h1>
        </div>
        <div class="mb-3">
            <label for="telephone" class="form-label">Phone</label>
            <input type="telephone" class="form-control" name='telephone' id="telephone" value="{{ $data->telephone }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name='email' id="email" value="{{ $data->email }}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
@endsection