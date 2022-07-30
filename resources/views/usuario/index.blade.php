@extends('layout.layout')


@section('content')
    <div class="row">
        <div class="d-flex align-content-end justify-content-end pb-2 pt-2">
            <a href="{{ route('usuario.create') }}" class="btn btn-sm btn-success">Cadastar <i class="fas fa-plus"></i></a>
        </div>
        <hr>
        @foreach ($usuarios as $usuario)
            <div class="col-md-6 pt-2 pb-2">
                <ul class="list-group">
                    @if (session()->get('usuario')['id'] == $usuario['id'])
                        <li
                            class="list-group-item {{ $usuario['status'] == 'active' ? 'bg-primary' : 'bg-danger' }} text-white">
                            {{ $usuario['name'] }} Você
                        </li>
                    @else
                        <li class="list-group-item {{ $usuario['status'] == 'active' ? 'bg-primary' : 'bg-danger' }} text-white">
                            {{ $usuario['name'] }}
                        </li>
                    @endif
                    <li class="list-group-item">E-mail: {{ $usuario['email'] }}</li>
                    <li class="list-group-item">Gênero sexual: {{ $usuario['gender'] == 'male' ? 'Homem' : 'Mulher' }}</li>
                    <li class="list-group-item">Status: {{ $usuario['status'] == 'active' ? ' Ativo' : 'Inativo' }}</li>
                </ul>
            </div>
        @endforeach
    </div>
@endsection
