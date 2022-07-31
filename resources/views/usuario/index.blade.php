@extends('layout.layout')


@section('content')
    <div class="row">
        <div class="d-flex align-content-end justify-content-end pb-2 pt-2">
            <a href="{{ route('usuario.create') }}" class="btn btn-sm btn-success">Cadastar <i class="fas fa-plus"></i></a>
        </div>
        <hr>
        @foreach ($usuarios as $usuario)
            @if (session()->get('usuario') !== null && session()->get('usuario')['id'] == $usuario['id'])
                <a href="{{route('usuario.edit', array('id' => $usuario['id']))}}" style="text-decoration: none">
                    <div class="col-md-6 pt-2 pb-2">
                        <ul class="list-group">
                            <li
                                class="list-group-item {{ $usuario['status'] == 'active' ? 'bg-primary' : 'bg-danger' }} text-white">
                                {{ $usuario['name'] }} Você
                            </li>
                            <li class="list-group-item">E-mail: {{ $usuario['email'] }}</li>
                            <li class="list-group-item">Gênero sexual:
                                {{ $usuario['gender'] == 'male' ? 'Homem' : 'Mulher' }}</li>
                            <li class="list-group-item">Status: {{ $usuario['status'] == 'active' ? ' Ativo' : 'Inativo' }}
                            </li>
                        </ul>
                    </div>
                </a>
            @else
                <div class="col-md-6 pt-2 pb-2">
                    <ul class="list-group">
                        <li class="list-group-item {{ $usuario['status'] == 'active' ? 'bg-primary' : 'bg-danger' }} text-white">
                            {{ $usuario['name'] }}
                        </li>
                        <li class="list-group-item">E-mail: {{ $usuario['email'] }}</li>
                        <li class="list-group-item">Gênero sexual: {{ $usuario['gender'] == 'male' ? 'Homem' : 'Mulher' }}
                        </li>
                        <li class="list-group-item">Status: {{ $usuario['status'] == 'active' ? ' Ativo' : 'Inativo' }}
                        </li>
                    </ul>
                </div>
            @endif
        @endforeach
    </div>
@endsection
