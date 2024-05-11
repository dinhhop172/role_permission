@extends('layouts.master')
@section('title', 'Users')
@section('content')
    <div class="col-md-8 pt-5">
        @can('edit articles')
        <a href="{{ route('users.create') }}" class="float-right">Create</a>
        @endcan
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td scope="row">{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>
                            <a href="{{ route('users.edit', $item->id) }}">Edit |</a>
                            <a href="{{ route('users.destroy', $item->id) }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- {{dd(auth()->user()->email)}} --}}
        @role('user')
            I am a user!
        @else('admin')
            I am a admin...
        @endrole
    </div>
    <a href="{{ route('logout') }}">Logout</a>
@endsection
