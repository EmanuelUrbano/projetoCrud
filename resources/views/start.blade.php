<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Loja</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <style>
            *{
                margin:0;
                padding:0;
                box-sizing: border-box;
                font-family: Arial;
            }
            .produto{
                border:1px solid #4C0BDE;
                padding: 2vh 5vw;
                border-radius: 3px;
                color:#4C0BDE;
                
                width:30vw;
            }
            img{
                width: 30vw;
                height:30vh;
            }
        </style>
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
                    @foreach($image as $i)   
                        @if($i->produtos_id == $p->id)
                            <img src="{{$i->url}}" class="img-fluid">
                        @endif
                    @endforeach
                    <p>{{$p->description}}</p>
                    <p>R${{$p->price}}</p>
                    <p>{{$p->quantity}} em estoque</p>
                    @foreach($categoria as $c)
                        @if($c->id == $p->category_id)
                            <p>{{$c->name}}</p>
                        @endif
                    @endforeach
                </div>
            
            @endforeach
    </body>
</html>
