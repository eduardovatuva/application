<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
       
   
        <link rel="stylesheet" href="{{ asset("css/bootstrap-grid.css") }}">
        <link rel="stylesheet" href="{{ asset("css/bootstrap-grid.css.map") }}">
        <link rel="stylesheet" href="{{ asset("css/bootstrap-grid.min.css") }}">
        <link rel="stylesheet" href="{{ asset("css/bootstrap-grid.css") }}">
        <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css.map") }}">
       
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
    <div class="form-group"> 
        <form action="{{ route('salvar_livro') }}" method="post">
        @csrf
            <div><label for="isbn" >ISBN</label><input  type="text" name="isbn" id="isbn" class="form-control"></div>
            <div><label for="nome">Nome</label><input type="text" name="nome" id="nome" class="form-control"></div>
            <div><label for="autor">Autor</label><input type="text" name="autor" id="autor" class="form-control"></div>
            <div><label for="preco">Preço</label><input type="text" name="preco" id="preco" class="form-control"></div>
            <button type="submit">Salvar</button>
        </form> 
        </div>
    </body>
</html>