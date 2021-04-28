<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
</head>
<body>
    <div class="container">
        <div class="col-md-4 offset-md-4 mt-5">
            <h1 class="text-center">Form Register</h1>
            <form action="{{ route('register') }}" method="post">
                @csrf
                @if(session('errors'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
                @endif
                <div class="form-group">
                    <label for=""><strong>Nama Lengkap</strong></label>
                    <input type="text" name="name" class="form-control" placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                    <label for=""><strong>Email</strong></label>
                    <input type="text" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for=""><strong>Password</strong></label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for=""><strong>Konfirmasi Password</strong></label>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Password">
                </div>
                <p>Sudah punya akun? <a href="{{ route('login') }}">Login</a> sekarang!</p>
                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </form> 
        </div>
    </div>
</body>
</html>
