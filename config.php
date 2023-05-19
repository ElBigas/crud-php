<?php 
//definadas as constantes HOST, USER, PASS e BASE com os valores para o 
//host do banco de dados, nome de usuário, senha e nome do banco de dados

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('BASE', 'cadastro');

//conexão mysqli usando as constantes definidas. 
//esta instância de conexão mysqli está armazenada na variável $conexao 
//e será usada para executar consultas e interagir com o banco de dados
$conexao = new mysqli(HOST, USER, PASS, BASE);
