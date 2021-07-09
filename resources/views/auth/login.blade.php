@extends('layouts.guest')

@section('content')
    <ul>
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
</ul>
    <form action="/login" method="POST">
        @csrf
        
        <div>
            <label>Email</label>
            <input type="email" name="email"/>
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password"/>
        </div>
       
        <div>
            <button type="submit" >Register</button>
        </div>

    </form>
@endsection