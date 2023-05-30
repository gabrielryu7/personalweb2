@extends('layout/aplikasi')

@section('konten')
    <form method="post" action="/people">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="name" class="form-control" name='name' id="name" value="{{ Session::get('name')}}">
        </div>
        <div class="mb-3">
            <label for="telephone" class="form-label">Phone</label>
            <input type="telephone" class="form-control" name='telephone' id="telephone" value="{{ Session::get('telephone')}}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name='email' id="email" value="{{ Session::get('email')}}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
@endsection