@extends('layouts.master')
@section('title', 'Users')
@section('content')
    <div class="col-md-6 offset-md-3 pt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create a user</h4>
                <form action="{{ route('users.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" id="" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="email" id="" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" id="" class="form-control" >
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Add" name="" id="" class="form-control" >
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
