@extends('layouts.master')
@section('title', 'Login')
@section('content')
<div class="col-md-6 pt-5 mx-auto">
    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session()->get('error') }}
        </div>
    @endif
    <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="email" id="" class="form-control @error('email') is-invalid @enderror" placeholder="enter email" aria-describedby="helpId">
            @error('email')
                <small style="color: rgb(219, 39, 39) !important" id="helpId" class="text-muted">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="text" name="password" id="" class="form-control @error('password') is-invalid @enderror" placeholder="enter password" aria-describedby="helpId">
            @error('password')
                <small style="color: rgb(219, 39, 39) !important" id="helpId" class="text-muted">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <input type="submit" value="Login" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
    </form>
</div>
@endsection
