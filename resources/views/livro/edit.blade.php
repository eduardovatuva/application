<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
      
        <title>Actualizar Livro</title>
        <style>
            label{
                float: left;
                display: block;
                width:90px;
            }
        </style>
    </head>
    <body>
    @yield('content')
    <h1 class="text-center">Crud</h1>
    <hr>
    <div class="col-8 m-auto">
    <a href="{{ route('lista')}}"title="Lista" >Ver Lista</a>
        <form action="{{ route('atualizar_livro', ['id' => $livros->id]) }}" method="post">
        @csrf
            <div><label for="isbn">ISBN</label>
            <input type="text" name="isbn" id="isbn" value="{{$livros->isbn}}" class="form-control" required></div>
            <div><label for="nome">Nome</label>
            <input type="text" name="nome" id="nome"  value="{{$livros->nome}}" class="form-control" required></div>
            <div><label for="autor">Autor</label>
            <input type="text" name="autor" id="autor"  value="{{$livros->autor}}" class="form-control" required></div>
            <div><label for="preco">Preço</label>
            <input type="text" name="preco" id="preco"  value="{{$livros->preco}}" class="form-control" required></div>
            <button type="submit" class="btn btn-primary">Salvar</button>
            <button type="submit" class="btn btn-info">Cancelar</button>
        </form> 
        </div>
    </body>
</html>
