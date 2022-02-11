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
    <form action="{{route('receberInformacoes')}}" method="post">
        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Senha">
        <input type="password" name="confirmarSenha" placeholder="Confirmar Senha">
        <input type="date" name="dataNascimento" placeholder="Data de Nascimento">
        <input type="radio" name="sexo" value="masculino">Masculino
        <input type="radio" name="sexo" value="feminino">Feminino
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>