@extends('layout.layout')


@section('content')
    <div class="row">
        <div class="d-flex align-content-end justify-content-end pb-2 pt-2">
            <a href="{{ route('post.create') }}" class="btn btn-sm btn-success">Cadastar <i class="fas fa-plus"></i></a>
        </div>
        <hr>
        @forelse ($posts as $post)
            <div class="col-md-6 pt-2 pb-2">
                <ul class="list-group">
                    <li class="list-group-item text-center">{{$post['title']}}</li>
                    <li class="list-group-item">Autor {{$user['name']}}</li>
                    <li class="list-group-item">
                        <a href="{{route('post.show', array('id' => $post['id']))}}" class="primary" style="text-decoration: none">Ver mais...</a>
                    </li>
                </ul>
            </div>
        @empty
            <div class="col-md-6 pt-2 pb-2 d-flex justify-content-center align-items-center">
                <ul class="list-group">
                    <li class="list-group-item text-center">
                        Nem um post cadastrado
                    </li>
                </ul>
            </div>
        @endforelse
    </div>
@endsection
