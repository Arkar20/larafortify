@extends('layouts.guest')

@section('content')
@if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
@endif
 <ul>
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
</ul>
    <form action="/reset-password" method="POST">
        @csrf
        <div>
            <input type="hidden" name="token" value="{{$request->route('token')}}"/>
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email" value="{{old('email',$request->email)}}"/>
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password"/>
        </div>
        <div>
            <label>Confirm Password</label>
            <input type="password" name="password_confirmation"/>
        </div>
        
       
        <div>
            <button type="submit">Change Password</button>
        </div>

    </form>
@endsection