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
    <form action="/forgot-password" method="POST">
        @csrf
        
        <div>
            <label>Email</label>
            <input type="email" name="email"/>
        </div>
        
       
        <div>
            <button type="submit">Send Reset link</button>
        </div>

    </form>
@endsection