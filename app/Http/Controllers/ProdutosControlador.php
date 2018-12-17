<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Categoria_produto;
use Illuminate\Support\Facades\Storage;
class ProdutosControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::all();
        return view('listagem_de_produtos', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria_produto::all();
        return view("produtos_cadastrar", compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $nome = $request->input('nome');
         $descricao = $request->input('descricao');
         $valor = $request->input('valor');
         $unidade = $request->input('unidade');
         $categoria = $request->input('categoria');

        $produto = new Produto();
        $produto->nome = $nome;
        $produto->descricao = $descricao;
        $produto->valor = $valor;
        $produto->unidade = $unidade;
        $produto->categoria_produto_id = $categoria;
        $path = $request->file('imagem')->store('produtos', 'public');
        $produto->imagem = $path;

        $produto->save();

    
        return redirect("/listagem_de_produtos");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $produto = Produtos::find($id);
        $categorias = Categoria_produto::all();
        return view('produtos_cadastrar', compact ('produto', 'categorias'));


       
        $produtos = Produto::find($id);
        return view('produtos_cadastar', compact('produtos'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = Produtos::find($id);
        Storage::disk('public')->delete($produto->imagem);
        $produto->categorias()->detach();
        $produto->delete();

        return redirect('/listagem_de_produtos');





    }
}
