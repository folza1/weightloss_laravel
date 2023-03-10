<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regisztráció</title>
</head>

<body>

@if (Session::get('errors'))
    @dump(Session::get('errors')->all())
@endif

<h1>Regisztráció</h1>
<form action="" method="post">
    @csrf
    <input type="text" name="name" placeholder="Név" value="{{ old('name') }}">
    @error('name')
    <p style="color:red">{{ $message }}</p>
    @enderror

    <br><br>
    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
    @error('email')
    <p style="color:red">{{ $message }}</p>
    @enderror

    <br><br>
    <input type="password" name="password" placeholder="Jelszó">
    @error('password')
    <p style="color:red">{{ $message }}</p>
    @enderror

    <br><br>
    <input type="password" name="password_confirmation" placeholder="Jelszó újra">
    <br><br>
    <button type="submit">Elküld</button>
</form>
</body>

</html>
