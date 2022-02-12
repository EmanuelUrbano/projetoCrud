<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>
</head>
<body>
    <h1>Update</h1>
    <form action="{{route('data')}}" method="post">
        @csrf

        
        
        <input type="text" name="nomeDoProduto" placeholder="Nome do produto" >
        <input type="number" min="0.01" name="precoDoProduto" placeholder="Preço do produto">
        <input type="number" min="1" name="quantidadeDoProduto" placeholder="Quantidade do produto">
        <textarea name="descricaoDoProduto" placeholder="Descrição do produto"cols="30" rows="10"></textarea>
        
        <input type="radio" id="amplificadores" name="categoriaDoProduto" value="2">
        <label for="amplificadores">Amplificadores</label>
        <input type="radio" id="pedaisEPedaleiras" name="categoriaDoProduto" value="3">
        <label for="pedaisEPedaleiras">Pedais e pedaleiras</label>
        <input type="radio" id="cabos" name="categoriaDoProduto" value="4">
        <label for="cabos">Cabos</label>
        <input type="radio" id="intrumentos" name="categoriaDoProduto" value="5">
        <label for="intrumentos">Instrumentos</label>
        <input type="radio" id="outros" name="categoriaDoProduto" value="1">
        <label for="outros">Outros</label>
        
        <input type="submit" value="Enviar">

    </form>
</body>
</html>