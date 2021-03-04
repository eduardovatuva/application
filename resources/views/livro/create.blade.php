<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
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
    @yield('content')
    <h1 class="text-center">Crud</h1>
    <hr>
    <div class="col-6 m-auto">
    <a href="{{ route('lista')}}"title="Lista" >Ver Lista</a>
        <form action="{{ route('salvar_livro') }}" method="post">
        @csrf
            <div><label for="isbn" >ISBN</label><input  type="text" name="isbn" id="isbn" class="form-control"></div>
            <div><label for="nome">Nome</label><input type="text" name="nome" id="nome" class="form-control"></div>
            <div><label for="autor">Autor</label><input type="text" name="autor" id="autor" class="form-control"></div>
            <div><label for="preco">Preço</label><input type="text" name="preco" id="preco" class="form-control"></div>
             <br>
            <button type="submit" class="btn btn-primary">Salvar</button>
            <button type="submit" class="btn btn-info">Cancelar</button>
        </form> 
        </div>
    </body>
</html>