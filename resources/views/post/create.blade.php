@extends('layout.layout')


@section('content')
    <div class="justify-content-center align-content-center pt-5">
        <div class="card">
            <div class="card-header">
                Cadastro de Post
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('post.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <label for="title">Titulo</label>
                            <input type="text" class="form-control @error('titulo') is-invalid @enderror" name="titulo"
                                id="title" placeholder="Fulano de Tal fez" aria-label="Fulano de Fulano de Tal fe" >
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <input type="hidden" name="user_id" value="{{$user_id}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="body">Descrição</label>
                            <textarea name="body" id="body" rows="3"
                            class="form-control @error('body') is-invalid @enderror" name="descricao">

                            </textarea>
                            @error('body')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="pt-3 text-end">
                        <button type="submit" class="btn btn-md btn-primary">Cadastar <i class="fas fa-plus"></i></button>
                        <a href="{{ route('usuario.index') }}" class="btn btn-md btn-danger">Cancelar <i
                                class="fas fa-ban"></i></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
