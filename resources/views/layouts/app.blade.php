<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fortify Example App</title>
</head>
<body>
    <div>
        nav goes here
        <form action="/logout" method="POST">
            @csrf
            <button>Logout</button>
        </form>
    </div>
    <div>
        @yield('content')
    </div>
    
</body>
</html>