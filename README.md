<h1 align="center">IN | Teste seleção candidatos Backend/Fullstack</h1>

<p align="center">
</p>

## Instalação
OBS: Esse sistema foi desenvolvido em ambiente de contêineres gerenciado pelo Docker, so que nao de cunho obrigatório. Caso queira usar é não tem o Docker instalado segui a sua <a href="https://docs.docker.com/">documentação</a>. Se optou pela não utilização do Docker segui ate o o passo 6

### Passo 1
Realizer a clonagem do repositório do <a href='https://laradock.io/'>laradock</a> <br>
``$ git clone https://github.com/Laradock/laradock.git``
### Passo 2
Entre na pasta do laradock e realize os seguintes comandos<br>
``$ cp .env-example .env``<br>
``$ vim .env``

### Passo 4
Agora suba os containers dos seguintes serviços: apache2 e workspace.<br>
``$ docker-compose up -d workspace apache2``

### Passo 5
Logo apos, execute o comando para abrir o bash<br>
``$ docker-compose exec workspace bash``

### Passo 6
Depois use os seguintes comandos <br>
``$ git clone https://github.com/joaomarcosns/IN.git``<br>
``$ cp .env-example .env``<br>
``$ chmod -R 777 storage # adiciona todas as permissões na pasta storage``<br>
``$ php artisan key:generate # gera a chave da aplicação``<br>
``$ php artisan storage:link # cria um link simbólico entre as pastas /public/storage -> /storage/app/public``<br>

### Passo 7
Por fim, dentro do arquivo .env do projeto haverá uma variável TOKEN que deve ser colocado o token fornecido pela <a href="https://gorest.co.in/">Api</a>
