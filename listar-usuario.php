<!DOCTYPE html>
<html lang="en">

<body>

    <div lass="mb-5">
        <h1>Listar usuários</h1>
    </div>

    <?php
    $sql = "SELECT * FROM usuarios";

    $resultado = $conexao->query($sql);

    $qtd = $resultado->num_rows;

    if ($qtd > 0) {
        print '<table class="table table-hover table-striped table-bordered">';
        print '<tr>';
            print '<th>ID</th>';
            print '<th>Nome</th>';
            print '<th>E-mail</th>';
            print '<th>Data de nascimento</th>';
            print '<th>Ação</th>';
            print '</tr>';

        while ($row = $resultado->fetch_object()) {
            print '<tr>';
            print '<td>'. $row->id .'</td>';
            print '<td>'. $row->nome .'</td>';
            print '<td>'. $row->email .'</td>';
            print '<td>'. $row->data_nasc .'</td>';
            print '<td>
                    <button onclick="location.href=\'?page=editar&id='. $row->id .'\'" class="btn btn-success">Editar</button>
                    
                    <button onclick="if(confirm(\'Tem certeza que deseja excluir?\')){location.href=\'?page=salvar&acao=excluir&id='. $row->id .'\'}else{false};" class="btn btn-danger">Excluir</button>
                    </td>';
            print '</tr>';
        }

        print '</table>';
    } else {
        print '<p class="alert alert-danger">Não foram encontrados resutlados!</p>';
    }
    ?>

</body>

</html>