@extends('layouts.master')
@section('title', 'Users')
@section('content')
    <div class="col-md-6 offset-md-3 pt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Update a user</h4>
                <form action="{{ route('users.update', $data->id) }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" value="{{ $data->name }}" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="email" value="{{ $data->email }}" class="form-control" >
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Update" name="" value="" class="form-control" >
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
