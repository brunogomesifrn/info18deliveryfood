<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perfil_usuario;

class Perfil_UsuarioControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perfil = Perfil_usuario::all();
        return view('perfis_usuarios', compact('perfil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view("perfis_usuarios_cadastrar");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nome = $request->input('nome_perfil');
        
        $perfil = new Perfil_usuario();
        $perfil->nome = $nome;
        $perfil->save();

        return redirect("/perfis_usuarios");
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
         $perfil = Perfil_usuario::find($id);
        return view('perfis_usuarios_cadastrar', compact('perfil'));
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
        $perfil = Perfil_usuario::find($id);
        $nome = $request->input('nome_perfil');
        $perfil->nome = $nome ;
        $perfil->save();

        return redirect("/perfis_usuarios");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $perfil = Perfil_usuario::find($id);
        $perfil->delete();

        return redirect("/perfis_usuarios");
    }
}
