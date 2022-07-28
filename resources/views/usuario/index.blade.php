@extends('layout.layout')


@section('content')
    <div class="row">
        @foreach ($usuarios as $usuario)
            <div class="col-md-6 pt-2 pb-2">
                <ul class="list-group">
                    <li class="list-group-item {{$usuario['status'] == 'active' ? 'bg-primary' : 'bg-danger'}} text-white">{{$usuario['name']}}</li>
                    <li class="list-group-item">E-mail: {{$usuario['email']}}</li>
                    <li class="list-group-item">Gênero sexual: {{$usuario['gender'] == "male" ? "Homem" : "Mulher"}}</li>
                    <li class="list-group-item">Status: {{$usuario['status'] == 'active' ? ' Ativo' : 'Inativo'}}</li>
                </ul>
            </div>
        @endforeach
    </div>
@endsection
