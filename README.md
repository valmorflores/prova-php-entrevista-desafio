# Teste de conhecimentos PHP + Banco de dados
##### Objetivo
Criar um Crud simples, totalmente desenvolvido em PHP, sem a utilização de frameworks, onde será possível Criar/Editar/Excluir/Listar usuários. O sistema também deve possuir a possibilidade de vincular/desvincular várias cores ao usuário.

##### Estrutura de banco de dados
A seguinte estrutura será utilizada para persistência dos dados, podendo ser alterada a qualquer momento para melhor funcionamento do sistema:

```sql
    tabela: users
        id      int not null auto_increment primary key
        name    varchar(100) not null
        email   varchar(100) not null
```
```sql
    tabela: colors
        id      int not null auto_increment primary key
        name    varchar(50) not null
```
```sql
    tabela: user_colors
        color_id  int
        user_id   int
```

##### Start
Este projeto conta com uma base sqlite com alguns registros já inseridos. Para início das atividades, use como base o arquivo `index.php`, este é apenas um arquivo exemplo onde é aberta conexão com o banco de dados e lista os usuários em uma tabela.

##### Pontos que serão levados em conta
- Funcionalidade
- Organização do código e projeto
- Apresentação da interface (Poderá usar frameworks CSS como Bootstrap, Material, Foundation etc)

##### Dicas
- Para utilizar o banco de dados contido na pasta `database/db.sqlite` é necessário que a sua instalação do php tenha a extensão do sqlite instalada e ativada
- O Php possui um servidor embutido, você consegue dar start ao projeto abrindo o terminal de comando na pasta baixada e executando `php -S 0.0.0.0:7070` e em seguida abrir o navegador em `http://localhost:7070`

##### Boa Sorte
Use seu conhecimento, consulte a documentação e o google, caso ainda houver dúvidas, nos pergunte :D. Boa sorte!


# Considerações

Fiz este projeto baseado no desafio proposto.

Considerei o seguinte:

- Embora a indicação for de não usar nenhum framework, conforme sugerido, achei por bem criar uma organização básica usando modelo MVC;

- Para o template em si, como há alguma padronização, no caso, aqui, usando material, optei por separar em pequenas partes o código estruturado de HTML para poder fazer composições distintas, mas, seguindo um mesmo padrão.

- O design então está definido basicamente pelos arquivos que estão na pasta: app/view/design

- Criei uma classe para controle da camada de visão. ViewController

- No modelo original havia representação de dados (para display), algo similar a isso:
``` <?php $var1 = '<td></td>'; 
echo $var1; 
?> ```
Desta forma, usando concatenção de informações, gerando uma prévia em uma variável para posterior exibição. 
Optei então por fazer uma exibição com uma separação de php e html na medida do possível, evitando assim o a criação de strings php com HTML dentro.

##### ToDo

- Criação de opçõpes em menu;
- Reformulação da apresentação, para que fique "Material compatible"
- Criação de botão "Novo"
- Criação de botão "Editar"
- Criação de botão "Excluir"
- Criação da página de exibição
- Criação da página de edição
- Criação da página/popup de exclusão


##### Estrutura de design

Para facilitar o processo de design, já que usaria um framework, solicitei ao chatGpt uma estrutura básica de apresentação em Material, o mesmo fornecedu o seguinte código:

```
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Layer using Material Design</title>
    <!-- Adicione o link para o arquivo CSS do Material Design -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  </head>
  <body>
    <!-- Adicione o código para a barra de navegação -->
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Title</span>
        <div class="mdl-layout-spacer"></div>
        <!-- Adicione o código para o menu -->
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="#">Link 1</a>
          <a class="mdl-navigation__link" href="#">Link 2</a>
          <a class="mdl-navigation__link" href="#">Link 3</a>
        </nav>
      </div>
    </header>
    <!-- Adicione o código para o conteúdo da página -->
    <main class="mdl-layout__content">
      <div class="page-content">
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--12-col">
            <h1>Welcome to View Layer using Material Design</h1>
          </div>
        </div>
      </div>
    </main>
    <!-- Adicione o código para o rodapé -->
    <footer class="mdl-mini-footer">
      <div class="mdl-mini-footer__left-section">
        <div class="mdl-logo">Logo</div>
        <ul class="mdl-mini-footer__link-list">
          <li><a href="#">Help</a></li>
          <li><a href="#">Privacy & Terms</a></li>
        </ul>
      </div>
    </footer>
    <!-- Adicione o link para o arquivo JavaScript do Material Design -->
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </body>
</html>
```