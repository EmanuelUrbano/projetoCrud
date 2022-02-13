<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>
</head>
<body>
    cadastro
    <form action="{{route('cadastrar')}}" method="post">
        @csrf
        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Senha">
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>