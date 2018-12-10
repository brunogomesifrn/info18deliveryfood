<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria_produto;

class Categoria_ProdutoControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria_produto::all();
        return view('categorias_produtos', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("categorias_produtos_cadastrar");
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
        
        $categoria = new Categoria_produto();
        $categoria->nome = $nome;
        $categoria->save();

        return redirect("/categorias_produtos");
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
        $categoria = Categoria_produto::find($id);
        return view('categorias_produtos_cadastrar', compact('categoria'));
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
        $categoria = Categoria_produto::find($id);
        $nome = $request->input('nome');
        $categoria->nome = $nome ;
        $categoria->save();

        return redirect("/categorias_produtos");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria = Categoria_produto::find($id);
        $categoria->delete();

        return redirect("/categorias_produtos");
    }
}
