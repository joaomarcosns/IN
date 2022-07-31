<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsuarioRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = Http::withToken(env('TOKEN'))->get('https://gorest.co.in/public/v2/users');
        $usuarios = $usuario->json();
        return view('usuario.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuarioRequest $request)
    {
        try {
            $usuario = Http::withToken(env('TOKEN'))->post('https://gorest.co.in/public/v2/users', [
                "name" => $request->nome,
                "email" => $request->email,
                "gender" => $request->gender,
                "status" => $request->status,
            ]);
            session()->put('usuario', $usuario->json());
            return redirect()->back()->with('sucesso', 'Usuário cadastrado com sucesso');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Erro ao cadastrar o usuário');
        }
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
        $usuario = Http::withToken(env('TOKEN'))->get("https://gorest.co.in/public/v2/users/$id");
        $usuarios = $usuario->json();
        return view('usuario.edit', compact('usuarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsuarioRequest $request, $id)
    {
        try {
            $usuario = Http::withToken(env('TOKEN'))->put("https://gorest.co.in/public/v2/users/$id", [
                "name" => $request->nome,
                "email" => $request->email,
                "gender" => $request->gender,
                "status" => $request->status,
            ]);
            session()->put('usuario', $usuario->json());
            return redirect()->route('usuario.index')->with('sucesso', 'Usuário atualizado com sucesso');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Erro ao atualizar o usuário');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
