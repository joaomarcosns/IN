@extends('layout.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="mt-4">Post Title</h1>
            <p class="lead">
                by tetse
            </p>
            <hr>
            <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident dicta at optio
                dolorum? Maxime iusto
                cum harum neque quaerat inventore aliquam. Ea et modi ipsa quod corporis earum nulla quasi?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, harum possimus illo necessitatibus,
                modi
                vero eos soluta error earum perspiciatis voluptatem, consectetur minus dolor voluptates? Delectus
                voluptate hic fugiat quaerat?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam veritatis eligendi, voluptatem id culpa
                totam illum dolorem omnis a consequatur sequi sed minus assumenda distinctio perferendis cupiditate,
                doloribus nulla nemo.</p>
            <hr>
            <div class="card mb-5">
                <h5 class="card-header">Deixe aqui o seu comentário:</h5>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="nome" class="form-label">E-mail</label>
                            <input type="text" class="form-control" id="nome" name="name" 
                            placeholder="name example de com">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" id="email"
                                placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="comentario" class="form-label">Comentário</label>
                            <textarea class="form-control" id="comentario" name='body' placeholder="Deixe aqui seu comentário" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Enviar</button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="mb-4">
                <div class="profile-pic mr-3 bg-light">
                    <i class="fa fa-user fa-2x"></i>
                </div>
                <div class="">
                    <h5 class="mt-0">User Name</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur repellat quod
                        consequuntur
                        velit vitae molestiae odit iure sit repellendus aut. Ex voluptatum alias fugiat, praesentium
                        vero ratione qui earum eligendi.</p>
                </div>
            </div>
            <hr>
            <div class="mb-4">
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
            </div>
            <hr>
        </div>
    </div>
@endsection
