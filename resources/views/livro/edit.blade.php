<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
      
        <title>Cadastrar Novo Livro</title>
        <style>
            label{
                float: left;
                display: block;
                width:90px;
            }
        </style>
    </head>
    <body>
    <div class="content"> 
        <form action="{{ route('atualizar_livro', ['id' => $livros->id]) }}" method="post">
        @csrf
            <div><label for="isbn">ISBN</label>
            <input type="text" name="isbn" id="isbn" value="{{$livros->isbn}}"></div>
            <div><label for="nome">Nome</label>
            <input type="text" name="nome" id="nome"  value="{{$livros->nome}}"></div>
            <div><label for="autor">Autor</label>
            <input type="text" name="autor" id="autor"  value="{{$livros->autor}}"></div>
            <div><label for="preco">Preço</label>
            <input type="text" name="preco" id="preco"  value="{{$livros->preco}}"></div>
            <button type="submit">Salvar</button>
        </form> 
        </div>
    </body>
</html>