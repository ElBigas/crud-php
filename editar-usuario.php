<!DOCTYPE html>
<html lang="en">

<body>

    <div class="mb-5">
        <h1>Editar usuário</h1>
    </div>

    <?php

    $sql = "SELECT * FROM usuarios WHERE id=" . $_REQUEST["id"];

    $resultado = $conexao->query($sql);

    $row = $resultado->fetch_object();
    ?>

    <form action="?page=salvar" method="POST">

        <input type="hidden" name="acao" value="editar">

        <input type="hidden" name="id" value="<?php print $row->id; ?>">

        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control" value="<?php print $row->nome; ?>" required>
        </div>
        <div class="mb-3">
            <label>E-mail</label>
            <input type="email" name="email" class="form-control" value="<?php print $row->email; ?>" required>
        </div>
        <div class="mb-3">
            <label>Senha</label>
            <input type="password" name="senha" class="form-control" value="<?php print $row->senha; ?>" required>
        </div>
        <div class="mb-3">
            <label>Data de nascimento</label>
            <input type="date" name="data_nasc" class="form-control" value="<?php print $row->data_nasc; ?>" required>
        </div>
        <div class="mb-3">
            <button id="submitCad" type="submit" class="btn btn-dark">Editar</button>
        </div>
    </form>

</body>

</html>