<!DOCTYPE html>
<html lang="en">

<body>

    <div class="mb-5">
        <h1>Criar novo usuário</h1>
    </div>

    <form action="?page=listar" method="POST">
        <input type="hidden" name="acao" value="cadastrar">
        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>E-mail</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Senha</label>
            <input type="password" name="senha" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Data de nascimento</label>
            <input type="date" name="data_nasc" class="form-control" required>
        </div>
        <div class="mb-3">
            <button id="submitCad" type="submit" class="btn btn-dark">Enviar</button>
        </div>
    </form>

</body>

</html>
