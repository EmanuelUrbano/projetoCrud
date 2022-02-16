<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Loja</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing: border-box;
            font-family: Arial;
        }
        .produto{
            border:1px solid #4C0BDE;
            padding: 2vh 0.5vw;
            border-radius: 3px;
            color:#4C0BDE;
            
            width:30vw;
        }
        img{
            width: 30vw;
            height:30vh;
        }
        .vitrine{
            justify-content: center;
            display: flex;
            flex-wrap: wrap;
            gap: 1vw;
        }
        .category{
            padding: 0 0.5vw;
            background-color:#96C5FA;
            color: white;
            border-radius:3px;
            display: inline;
        }
        .options{
            margin: 2vh 0;
        }
        a:first-child{
            color: white;
            border-radius:3px;
            background-color: blue;
            text-decoration: none;
            padding: 1vh 0.5vw;
        }
        a:last-child{
            color: white;
            border-radius:3px;
            background-color: tomato;
            text-decoration: none;
            padding: 1vh 0.5vw;
        }
        @media screen and (max-width: 480px) {
            
            .produto{
                width: 70vw;
            }        
        }
        
    </style>
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
                        <div>
                            <p class="category">{{$c->name}}</p>
                        </div>
                    @endif
                @endforeach
                <div class="options">
                    <a href="{{route('update1',$p)}}">Editar</a>
                    <a href="{{route('delete1',$p)}}">Excluir</a>
                </div>
            </div>
    

        @endforeach
        
    </div>    
</body>
</html>