<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
        <title>Vitrine de Livros</title>
</head>
    <body>
    <h1 class="text-center">Crud</h1>
    <hr>
    <div class="col-8 m-auto">
    <table class="table">
  <thead class="thead-dark">
  
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
        </table>

        
      </div>
    </body>
</html>