<?php

//esta 'acao' vem dos formularios de 'novo-usuário' e 'editar-usuario'
//também vem do botão de 'excluir'

switch ($_REQUEST['acao']) {

        //lógica que irá adicionar um novo usuário no banco de dados
    case 'cadastrar':

        //variaveis para inserir no banco de dados
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $data_nasc = $_POST["data_nasc"];

        //variavel onde guarda a query de SQL, aqui será para inserir, um INSERT
        $sql = "INSERT INTO usuarios 
        (nome, email, senha, data_nasc) 
        VALUES 
        ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";

        //varialvel que executa a query
        $resultado = $conexao->query($sql);

        //caso o resultado for positivo, irá apresentar uma mensagem de sucesso, caso contrário uma informando erro
        if ($resultado) {
            print "<script>
            alert('Cadastro realizado com sucesso!')
            </script>";
            print "<script>
            location.href='?page=listar'; 
            </script>";
        } else {
            print "<script>
            alert('Houve um erro')
            </script>";
        }
        break;

        //lógica que irá editar um usuário do banco de dados
    case 'editar':

        //variaveis para atualizar no banco de dados
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $data_nasc = $_POST["data_nasc"];

        //variavel onde guarda a query de SQL, neste caso é um UPDATE
        $sql = "UPDATE usuarios SET 
                    nome='{$nome}', 
                    email='{$email}', 
                    senha='{$senha}', 
                    data_nasc='{$data_nasc}'
        
                WHERE 
                    id=" . $_REQUEST["id"];

        //executa a query
        $resultado = $conexao->query($sql);

        if ($resultado) {
            print "<script>
            alert('Edição realizada com sucesso!')
            </script>";
            print "<script>
            location.href='?page=listar'; 
            </script>";
        } else {
            print "<script>
            alert('Houve um erro')
            </script>";
        }
        break;

        //lógica que irá excluir um usuário do banco de dados
    case 'excluir':

        //variavel com a query para deletar dentro da tabela 'usuarios' onde o ID for igual ao recebido
        $sql = "DELETE FROM usuarios
                WHERE 
                    id=" . $_REQUEST["id"];

        //executa a query
        $resultado = $conexao->query($sql);

        if ($resultado) {
            print "<script>
            alert('Usuário excluído com sucesso!')
            </script>";
            print "<script>
            location.href='?page=listar'; 
            </script>";
        } else {
            print "<script>
            alert('Houve um erro')
            </script>";
        }
        break;
}
