<?php
switch ($_REQUEST['acao']) {

    case 'cadastrar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $data_nasc = $_POST["data_nasc"];

        $sql = "INSERT INTO usuarios 
        (nome, email, senha, data_nasc) 
        VALUES 
        ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";

        $resultado = $conexao->query($sql);

        if ($resultado) {
            print "<script>
            alert('Cadastro realizado com sucesso!')
            </script>";
            print "<script>
            location.href='?page=listar'; 
            </script>";
        }
        break;

    case 'editar':

        break;

    case 'excluir':

        break;
}
