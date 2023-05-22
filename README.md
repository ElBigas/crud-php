# crud-php

Projeto realizado no decorrer do professor Eliel Cruz, disponível <a href="https://www.youtube.com/watch?v=BSqtIw_hW8M">neste link<a>.
  
Você pode ver esta aplicação rodando <a href="https://criar-usuario-php-mysql.000webhostapp.com/">neste link<a>.

<hr />

No arquivo 'index.php', foi incluido o arquivo de configuração, onde foi feita a conexão com o banco de dados. Também no 'index' é verificado na URL o 'page' e será incluido a página correspondente, o padrão é uma tela de bem vindos. Caso seja 'novo', será incluido o arquivo 'novo-usuario.php', caso 'listar' será 'listar-usuario.php', caso 'salvar' será 'salvar-usuario.php' e caso 'editar' será incluido 'editar-usuario.php'.

O arquivo 'novo-usuario' é um formulário HTML usado para criar um novo usuário. Ele coleta nome, e-mail, senha e data de nascimento. Quando o formulário é enviado, ele encaminha uma solicitação 'POST' para o servidor com a action '?page=salvar' e inclui os dados do formulário. O servidor lidará com a solicitação com base na ação fornecida. O formulário também inclui um campo de entrada oculto chamado "acao" com o valor 'cadastrar' que será tratado no arquivo 'salvar-usuario' para executar a query no banco de dados. 
  
Quem traz estrutura de página para listar usuários do sistema é o arquivo 'listar-usuario'. Primeiramente ele executa uma consulta SQL para selecionar todos os usuários da tabela 'usuarios'. Depois armazena o resultado da consulta em uma variável chamada "$resultado". Após verifica o número de linhas retornadas pelo resultado da consulta usando '$qtd'. Se houver usuários encontrados ($qtd > 0), exibe uma tabela com informações dos usuários, incluindo ID, nome, email, e data de nascimento. Para cada usuário retornado, cria uma nova linha na tabela com os respectivos valores. Para cada usuário, também são exibidos botões "Editar" e "Excluir" que redirecionam para diferentes URLs, dependendo do ID do usuário. Se nenhum usuário for encontrado, exibe uma mensagem de alerta informando que nenhum resultado foi encontrado.

O arquivo 'editar-usuario.php' é O formulário com os dados do usuário selecionado, obtidos do banco de dados usando a cláusula WHERE na consulta SQL. Ele executa uma consulta SQL para selecionar o usuário com base no ID fornecido pela variável $_REQUEST["id"]. Após, isto armazena o resultado da consulta em uma variável chamada "$resultado". É recuperado os dados do usuário usando o método fetch_object() e armazenado em uma variável chamada "$row". Assim o formulário HTML é exibido com campos preenchidos com os valores do usuário selecionado. Também há campos ocultos para enviar a ação "editar" e o ID do usuário sendo editado, que serão tratados no arquivo 'salvar-usuario'. Quando o formulário é enviado, os dados são enviados para a página "?page=salvar" para processamento.
  
Por último, o arquivo 'salvar-usuario' contém um switch que executa diferentes lógicas com base na variável $_REQUEST['acao']. Que vem dos formularios de 'novo-usuário' e 'editar-usuario'. Dependendo do valor dessa variável, diferentes operações serão realizadas no banco de dados.

'cadastrar': Insere um novo usuário no banco de dados. Os valores do nome, email, senha e data de nascimento são obtidos dos dados enviados pelo formulário. Uma consulta SQL de inserção é executada e o resultado é verificado. Se a inserção for bem-sucedida, uma mensagem de sucesso é exibida e a página é redirecionada para a listagem de usuários. Caso contrário, uma mensagem de erro é exibida.

'editar': Atualiza um usuário existente no banco de dados. Os valores do nome, email, senha e data de nascimento são obtidos dos dados enviados pelo formulário. Uma consulta SQL de atualização é executada com base no ID do usuário recebido. O resultado é verificado e, se a atualização for bem-sucedida, uma mensagem de sucesso é exibida e a página é redirecionada para a listagem de usuários. Caso contrário, uma mensagem de erro é exibida.

'excluir': Remove um usuário do banco de dados. Uma consulta SQL de exclusão é executada com base no ID do usuário recebido. O resultado é verificado e, se a exclusão for bem-sucedida, uma mensagem de sucesso é exibida e a página é redirecionada para a listagem de usuários. Caso contrário, uma mensagem de erro é exibida.
