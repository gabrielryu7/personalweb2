@extends('layout/aplikasi')
@section('konten')
        <div>
            <a href='/people' class="btn btn-secondary"><< Back </a>
            <h1>{{ $data->name }}</h1>
            <p>
                <b>Telephone </b> {{ $data->telephone}}
            </p>
            <p>
                <b>Email </b> {{ $data->email}}
            </p>
        </div>
    @endsection
