<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>
</head>
<body>
    <h1>Admin</h1>
    <a href="{{route('add')}}">add</a>
    <a href="{{route('logout')}}">logout</a>
    <!-- vitrine -->
    
    <div class="vitrine">
        @foreach($produtos as $p)
            <div class="produto">
                <h2>{{$p->name}}</h2>
                <p>{{$p->description}}</p>
                <p>R${{$p->price}}</p>
                <p>{{$p->quantity}} em estoque</p>
                <a href="{{route('update1',$p)}}">Editar</a>
                <a href="{{route('delete1',$p)}}">Excluir</a>
            </div>
            <hr>
        @endforeach
    </div>    
</body>
</html>