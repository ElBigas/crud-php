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
        while ($row = $resultado->fetch_object()) {
            print '<tr>';
            print '<td>'. $row->id .'</td>';
            print '<td>'. $row->nome .'</td>';
            print '<td>'. $row->email .'</td>';
            print '<td>'. $row->data_nasc .'</td>';
            print '</tr>';
        }
        print '</table>';
    } else {
        print '<p class="alert alert-danger">Não foram encontrados resutlados!</p>';
    }
    ?>

</body>

</html>