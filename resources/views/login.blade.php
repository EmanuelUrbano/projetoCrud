<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>
</head>
<body>
    Login
    <form action="{{route('login')}}" method="post">
        @csrf
        <input type="text" value="{{old('name')}}" name="name" placeholder="user">
        {{$errors->has('name')?$errors->first('name'):''}}
        <input type="password" value="{{old('password')}}" name="password" placeholder="Senha">
        {{$errors->has('password')?$errors->first('password'):''}}
        <input type="submit" value="Entrar">'
    </form>
</body>
</html>