<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
        <link rel="stylesheet" href="{{ asset("css/bootstrap.css") }}">
        <link rel="stylesheet" href="{{ asset("css/bootstrap.css.map") }}">
        <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}">
        <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css.map") }}">
        <title>Vitrine de Livros</title>
</head>
    <body>
    <div class="content"> 
        <table>
        <tr>
        <th>ISBN</th>
        <th>Autor</th>
        <th>Título</th>
        <th>Preço</th>
        <th>Criar</th>
        <th>Editar</th>
        <th>Apagar</th>
        </tr>
      @foreach($livros as $livro)
            <tr>
                <td>{{$livro->isbn}}</td>
                <td>{{$livro->autor}}</td>
                <td>{{$livro->nome}}</td>
                <td>{{$livro->preco}}</td>
                <td><a href="{{ route('novo_livro')}}"
                        title="Criar" >Criar</a></td>
                <td><a href="{{ route('editar_livro', ['id'=>$livro->id])}}"
                        title="Editar{{ $livro->nome }}" >Editar</a></td>
                        
                <td><a href="{{ route('excluir_livro', ['id'=>$livro->id])}}"
                        title="Excluir{{ $livro->nome }}" >Excluir</a></td>
            </tr>
        @endforeach
</div>
    </body>
</html>