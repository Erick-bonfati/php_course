PHP LARAVEL

Framework facilitador do php


### Instalar: composer create-project laravel/laravel

# Banco de dados: 

.env = aqui inicialmente devemos configurar qual banco de dados vamos usar para acessar as tabelas, no meu caso to usando MYSQL então tem q configurar lá.

Feito isso:

### php artisan config:clear -> Limpa as configs do artisan

### php artisan migrate -> Cria migration no seu banco de dados

Comando util: 

### php artisan make:controller (NomeController) - laravel cria teu controller facilitadamente.

O Laravel ajuda muito na response das funções, por ex, se a gente tiver uma string e passar um retorno, o laravel coloca ela dentro de uma response e também associa um status de sucesso sozinho para gente, e também, se a gente tiver um retorno de array, ele transforma num retorno json onde podemos manipular depois na criação de APIs

### php artisan make:component (NomeComponent) - laravel cria um component adicionando o arquivo blade e também uma classe Component.php para caso quisermos fazer algum tipo de validação

Também podemos criar um componente anonimo que não depende de uma classe e só tem uma view

### php artisan make:component layout –view - cria component somente com a view

Segurança: Ataques XSS - são ataques que são realizadas injeções de códigos maliosos por meio de algum formulário, input...

Cross-Site Request Forgery (CSRF) - é um ataque que consiste redirecionar o ataque de um formulário para dentro do response do nosso formulário, ou seja, um formulario de outro site enviando dados para dentro do nosso formulario, onde não sabemos nada que estão tentando enviar para dentro do nosso código.

Formulários de delete por padrão devem ser enviados como POST, pois a web não suporta rotas delete, então para quebrar isso, podemos definir internamente dentro do formulário @method('DELETE') isso não vai transformar a rota em delete, somente dizer qual é o tipo dela, para depois a gente recuperar no arquivo de rotas.

//return $request->query('id'); // recupera o queryparam enviado na url (MAIS RECOMENDADO QUE O INPUT)
//return $request->input('id'); // Recupera o valor do parâmetro da URL ou um input que veio de um formulário
//return $request->url(); // Retorna url completa da requisição
//return $request->method(); // retorna o method que usamos pra acessar o recurso
//return redirect('google.com'); // redireciona para qualquer rota
//$series = Serie::all(); busca todos valores da collection