@extends('layout/aplikasi')
@section('content')
        <h1>Lobby</h1>
        <a href="/people/create" class="btn btn-primary">+Add people data</a>
        <table class="table">
            <thread>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
            </thread>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->telephone}}</td>
                        <td>{{$item->email}}</td>
                        <td><a class="btn btn-warning btn-sm" href='{{url('/people/'.$item->id)}}'>Edit</a>
                        <form onsubmit="return confirm('Are you sure')" class = 'd-inline' action="{{'/people/'.$item->id}}" method='post'>
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">DELETE </button>
                        </form></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$data -> links()}}
    @endsection
