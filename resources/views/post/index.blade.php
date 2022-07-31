@extends('layout.layout')


@section('content')
<div class="row">
    <div class="d-flex align-content-end justify-content-end pb-2 pt-2">
        <a href="{{ route('post.create') }}" class="btn btn-sm btn-success">Cadastar <i class="fas fa-plus"></i></a>
    </div>
    <hr>
        <div class="col-md-6 pt-2 pb-2">
            <ul class="list-group">
                <li class="list-group-item text-center">Titulo</li>
                <li class="list-group-item">Autor</li>
                <li class="list-group-item">
                    <a href="#" class="primary" style="text-decoration: none">Ver...</a>
                </li>
            </ul>
        </div>
</div>
@endsection
