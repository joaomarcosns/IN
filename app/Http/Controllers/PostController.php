<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostReuest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = session()->get('usuario');
        $id = $user['id'];
        $post = Http::withToken(env('TOKEN'))->get("https://gorest.co.in/public/v2/users/$id/posts");
        $posts = $post->json();
        return view('post.index', compact('posts', 'user'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = session()->get('usuario')['id'];
        return view('post.create', compact('user_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostReuest $request)
    {
        try {
            $post = Http::withToken(env('TOKEN'))->post("https://gorest.co.in/public/v2/posts",[
                "user_id" => $request->user_id,
                "title" => $request->title,
                "body" => $request->body,
            ]);
            return redirect()->route('post.index')->with('sucesso', 'Post realizado com sucesso');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Erro ao cadastrado o Post');
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
