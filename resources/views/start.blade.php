<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Loja</title>
    </head>
    <body>
        <h1>Start</h1>
        <a href="{{route('login')}}">logar</a>
        <a href="{{route('cadastro')}}">cadastrar</a>
        <!-- vitrine -->
        <div class="vitrine">
            @foreach($produto1 as $p)
                <div class="produto">
                    <h2>{{$p->name}}</h2>
                    <p>{{$p->description}}</p>
                    <p>R${{$p->price}}</p>
                    <p>{{$p->quantity}} em estoque</p>
                    @foreach($categoria as $c)
                        @if($c->id == $p->category_id)
                            <p>{{$c->name}}</p>
                        @endif
                    @endforeach
                </div>
                <hr>
            @endforeach
    </body>
</html>
