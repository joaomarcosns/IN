@extends('layout.layout')


@section('content')
    <div class="justify-content-center align-content-center pt-5">
        <div class="card">
            <div class="card-header">
                Cadastro de Usuarios
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('usuario.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <label for="nome">Nome do Usuario</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="nome"
                                id="nome" placeholder="Fulano de Tal" aria-label="Fulano de Tal" >
                            @error('nome')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                id="email" placeholder="fulano@rmail.com" aria-label="Last name" >
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="gender">Genero Sexual</label>
                            <select name="gender" id="gender" class="form-control @error('gender') is-invalid @enderror"
                                >
                                <option value=""select>Selecione uma opição</option>
                                <option value="male">Homem</option>
                                <option value="female">Mulher</option>
                            </select>
                            @error('gender')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control @error('status') is-invalid @enderror"
                                >
                                <option value=""select>Selecione uma opição</option>
                                <option value="active">Ativo</option>
                                <option value="inactive">Inativo</option>
                            </select>
                            @error('status')
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
