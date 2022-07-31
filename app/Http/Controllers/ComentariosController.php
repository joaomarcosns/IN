<?php

namespace App\Http\Controllers;

use App\Http\Requests\ComentarioReuest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ComentariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComentarioReuest $request)
    {
        try {
            Http::withToken(env('TOKEN'))->post("https://gorest.co.in/public/v2/comments", [
                "post_id" => $request->post_id,
                "name" => $request->name,
                "email" => $request->email,
                "body" => $request->body,
            ]);
            return redirect()->route('post.show', ['id' => $request->post_id])->with('sucesso', 'Comentário realizado com sucesso');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Erro ao cadastrado o Comentário');
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
        //
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
        //
    }
}
