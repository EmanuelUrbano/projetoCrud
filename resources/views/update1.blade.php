<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing: border-box;
            font-family: Arial;
        }
        body{
            height:100vh;
            display:flex;
            align-items:center;
            justify-content:center;
        }

        .box{
           
            position: absolute;
            top: 10vh;
            border:1px solid #4C0BDE;
            padding: 2vh 5vw;
            border-radius: 3px;
            color:#4C0BDE;
        }
        input{
            display:block;
            margin:2vh 0;
            border-radius: 3px;
        }
        h1{
            display:block;
        }
        input[type="text"],input[type="password"]{
            border:1px solid #4C0BDE;
            padding: 2vh 1vw;
            color:#4C0BDE;
        }

        input[type="submit"]{
            padding: 2vh 5vw;
            border:1px solid #4C0BDE;
            background-color: white;
            color:#4C0BDE;
            cursor:pointer;
            transition-delay: 100ms;
        }

        input[type="submit"]:hover{   
            border:1px solid white;
            background-color: #4C0BDE;
            color:white;
        }

    </style>
</head>
<body>
    <div class="box">

        <h1>Update</h1>
        <form action="{{route('updateNRed')}}" method="post" enctype="multipart/form-data">
            @csrf
    
            
            <input type="number" name="idDoProduto" style="display:none;"  value="{{$p->id}}">
            <input type="text" name="nomeDoProduto" placeholder="Nome do produto"  value="{{$p->name}}"required>
            <input type="number" step="0.01" name="precoDoProduto" placeholder="Preço do produto"  value="{{$p->price}}">
            <input type="number" name="quantidadeDoProduto" placeholder="Quantidade do produto"  value="{{$p->quantity}}">
            <textarea name="descricaoDoProduto" placeholder="Descrição do produto"cols="30" rows="10"  >{{$p->description}}</textarea>
            
            <input type="file" name="imagemDoProduto">
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
    </div>
</body>
</html>