@extends('layout.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="mt-4">{{ $post['title'] }}</h1>
            <p class="lead">
                De {{ $usuario['name'] }}
            </p>
            <hr>
            <h2>Descrição</h2>
            <p class="lead">
                {{ $post['body'] }}
            </p>
            <hr>
            <div class="card mb-5">
                <h5 class="card-header">Deixe aqui o seu comentário:</h5>
                <div class="card-body">
                    <form method="POST" action="{{ route('comentario.store') }}">
                        @csrf
                        <input type="hidden" name="post_id" value="{{ $post['id'] }}">
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="nome"
                                name="name" placeholder="name example de com">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                placeholder="name@example.com" name="email">
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="comentario" class="form-label">Comentário</label>
                            <textarea class="form-control @error('body') is-invalid @enderror" id="comentario" name='body'
                                placeholder="Deixe aqui seu comentário" rows="3"></textarea>
                            @error('body')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Enviar</button>
                    </form>
                </div>
            </div>
            <div class=" d-flex justify-content-end">
                <i class="fas fa-comment fa-2x"></i>
                <p class="ms-2">({{ count($comments) }})</p>
            </div>
            @forelse ($comments as $item)
                <hr>
                <div class="mb-4">
                    <div class="profile-pic mr-3 bg-light">
                        <i class="fa fa-user fa-2x"></i>
                    </div>
                    <div class="">
                        <h5 class="mt-0">{{ $item['name'] }} - {{ $item['email'] }}</h5>
                        <p>{{ $item['body'] }}</p>
                    </div>
                </div>
                <hr>
            @empty
                <h5 class="text-center">Sem comnetarios</h5>
            @endforelse

            {{-- <div class="mb-4">
                <div class="profile-pic mr-3 bg-light">
                    <i class="fa fa-user fa-2x"></i>
                </div>
                <div class="media-body">
                    <h5 class="mt-0">Full Name</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, quos molestiae. Quidem dolore
                        exercitationem temporibus hic, quisquam nisi ex qui iste earum maiores unde adipisci
                        veritatis veniam eius suscipit facere.</p>
                    <hr>
                    <div class="media mt-4" style="margin-left: 4rem">
                        <div class="profile-pic mr-3 bg-light">
                            <i class="fa fa-user fa-2x"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0">Full Name</h5>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis cum, corporis saepe
                                hic
                                labore eos incidunt unde architecto fugiat eius doloremque ipsa ex veniam deserunt.
                                Numquam architecto doloremque magnam voluptatibus.</p>

                        </div>
                    </div>
                </div>
            </div> --}}
            <hr>
        </div>
    </div>
@endsection
