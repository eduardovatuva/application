<?php

namespace App\Http\Controllers;
use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function create()
    {
        return view('livro.create');
    }
    public function store(Request $request)
    {
        Livro::create(['isbn'=>$request->isbn,
                       'nome'=>$request->nome,
                       'autor'=>$request->autor,
                       'preco'=>$request->preco,]);

        return 'Os dados foram salvos com sucesso!';
    }
    public function show()
    {
        $livros=Livro::all();
        return view('livro.list',['livros'=>$livros]);
    }
    public function destroy($id)
    {
        $livros=Livro::findOrFail($id);
        $livros->delete();

        return "Os dados foram eliminados com sucesso!";
    }
    public function edit($id)
    {
        $livros=Livro::findOrFail($id);
        return view('livro.edit',['livros'=>$livros]);
    }
    public function update(Request $request, $id){
        $livros = Livro::findOrFail($id);
        $livros->update([
            'isbn' => $request->isbn,
            'nome' => $request->nome,
            'autor' => $request->autor,
            'preco' => $request->preco,
        ]);
        return "Os dados foram actualizados com sucesso!";
    }
}