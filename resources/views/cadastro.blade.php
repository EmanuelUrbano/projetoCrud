<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing: border-box;
            font-family: Arial;
        }
        body{
            height:100vh;
            width:100vw;
            display:flex;
            align-items:center;
            justify-content:center;
        }

        .box{
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
    <title>Loja</title>
</head>
<body>
    <div class="box">
        <h1>Cadastro</h1>
        <form action="{{route('cadastrar')}}" method="post">
            @csrf
            <input type="text" name="nome" placeholder="Nome">
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Senha">
            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>