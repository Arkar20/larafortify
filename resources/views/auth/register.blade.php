@extends('layouts.guest')

@section('content')
<ul>
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
</ul>
    <form action="/register" method="POST">
        @csrf
        <div>
            <label>Name</label>
            <input type="text" name="name"/>
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email"/>
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password"/>
        </div>
        <div>
            <label>Confrim Password</label>
            <input type="text" name="password_confirmation"/>
        </div>
        <div>
            <button type="submit" >Register</button>
        </div>

    </form>

@endsection