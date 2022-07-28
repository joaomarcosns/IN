@extends('layout.layout')


@section('content')
    <div class="row">
        <div class="text-center pt-5 pb-5">
            <h1>IN | Teste seleção candidatos Backend/Fullstack</h1>
        </div>
        <hr>
        <div>
            <h3>Objetivo do teste</h3>
            <p>Realizar o consumo completo de uma API REST utilizando uma das linguagens utilizando o framework Laravel.
                Todos os métodos devem ser consumidos conforme a instrução passada em cada um deles.</p>
            <h3>Pontos que serão avaliados</h3>
            <p>Todos os pontos abaixo serão considerados para a aprovação no teste:</p>
            <ul>
                <li>
                    <strong>Conclusão</strong> - serão solicitados no total 7 requisitos durante o teste e todos devem ser cumpridos conforme a ordem solicitada;
                </li>
                <li>
                    <strong>Eficiência</strong> - não basta que os requisitos sejam atendidos, mas a execução deve ocorrer como planejado nessa documentação;
                </li>
                <li>
                    <strong>Qualidade</strong> - o código escrito deve deixar claro qual a sua finalidade. Devem também ser usados nomes de variáveis e métodos que sejam facilmente compreensíveis;
                </li>
                <li>
                    <strong>Estrutura</strong> - o código deve ser estruturado de uma forma que seu entendimento seja simples;
                </li>
                <li>
                    <strong>Testes automatizados</strong> - iremos avaliar qual o nível de cobertura por testes automatizados foi possível alcançar em sua implementação;
                </li>
                <li>
                    <strong>Docker</strong> - todos nossos projetos rodam dentro da estrutura docker então precisamos que ele seja possível de executar dessa forma;
                </li>
                <li>
                    <strong>Documentação</strong> - O código deve estar bem documentado para que outras pessoas possam realizar a manutenção futuramente;
                </li>
                <li>
                    <strong>Features extras</strong> - adoramos ideias novas, então todo esforço extra (desde que os requisitos não sejam alterados) será visto com bons olhos;
                </li>
            </ul>
        </div>
        <div>
            <h3>Requisitos</h3>
            <p>
                A API que será utilizada está disponível no link <a href="https://gorest.co.in/">API</a> 
                Realizar o consumo da API para fazer os seguintes procedimentos:
            </p>
            <ul>
                <li>Criar um novo usuário dentro do sistema (não utilizar nomes reais);</li>
                <li>Listar todos os usuários da API e encontrar o usuário criado através do ID do mesmo (o ID será retornado na operação de criação);</li>
                <li>Criar um novo post para o usuário criado;</li>
                <li>Criar um novo comentário dentro do post criado</li>
                <li>Criar um novo comentário dentro do primeiro post da lista <strong>pública</strong> de posts;</li>
                <li>Apagar o comentário criado no requisito acima;</li>
                <li>Disponibilizar o projeto em um repositório do Git com as instruções para que a equipe de avaliação consiga executar;</li>
            </ul>
        </div>
        <div class="col text-center">
            <div class="btn-group">
                <a href="#" class="btn btn-dark"><i class="fab fa-github"></i></a>
                <a href="#" class="btn btn-dark"><i class="primary"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </div>
@endsection
