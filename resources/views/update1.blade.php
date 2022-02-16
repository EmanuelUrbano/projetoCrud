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
    <form action="{{route('updateNRed')}}" method="post">
        @csrf

        
        <input type="number" name="idDoProduto" style="display:none;"  value="{{$p->id}}">
        <input type="text" name="nomeDoProduto" placeholder="Nome do produto"  value="{{$p->name}}"required>
        <input type="number" step="0.01" name="precoDoProduto" placeholder="Preço do produto"  value="{{$p->price}}">
        <input type="number" name="quantidadeDoProduto" placeholder="Quantidade do produto"  value="{{$p->quantity}}">
        <textarea name="descricaoDoProduto" placeholder="Descrição do produto"cols="30" rows="10"  >{{$p->description}}</textarea>
        
        <input type="file" name="imagemDoProduto" >
        <input type="checkbox" id="ftAntiga?" value="1" name="ftAntiga?">
        <label for="ftAntiga?">Usar foto antiga</label>

        <input type="radio" id="amplificadores" name="categoriaDoProduto" value="2"  required>
        <label for="amplificadores">Amplificadores</label>
        <input type="radio" id="pedaisEPedaleiras" name="categoriaDoProduto" value="3">
        <label for="pedaisEPedaleiras">Pedais e pedaleiras</label>
        <input type="radio" id="cabos" name="categoriaDoProduto" value="4">
        <label for="cabos">Cabos</label>
        <input type="radio" id="intrumentos" name="categoriaDoProduto" value="5">
        <label for="intrumentos">Instrumentos</label>
        <input type="radio" id="outros" name="categoriaDoProduto" value="1">
        <label for="outros">Outros</label>
        
        <input type="submit" value="Salvar">

    </form>
</body>
</html>