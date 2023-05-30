@extends('layout/aplikasi')
@section('konten')
        <a href="/people/create" class="btn btn-primary">+Add data</a>
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
                        <td><a class='btn btn-secondary btn-sm' href='{{url('/people/'.$item->telephone)}}'>Detail</a></td>
                        <td><a class='btn btn-warning btn-sm' href='{{url('/people/'.$item->telephone. '/edit')}}'>Edit</a></td>
                        <td><form onsubmit="return confirm('Delete data?')" action ="{{ '/people/'. $item->name }}" method='post'>
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                            </form></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $data->links()}}
    @endsection
