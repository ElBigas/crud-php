<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
        body {
            background-color: #f2f2f2;
        }
    </style>

</head>

<body>

    <!-- esta é uma navbar presetada do bootstrap, feita apenas algumas mudanças -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">My CRUD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=novo">Criar novo usuário</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=listar">Listar usuários</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                //foi incluido o arquivo de configuração, onde é feita a conexão com o bando de dados
                include("config.php");

                //será verificado na URL o 'page' e será incluido a página correspondente, o padrão é uma tela de bem vindos
                switch (@$_REQUEST['page']) {

                    case 'novo':
                        include('novo-usuario.php');
                        break;

                    case 'listar':
                        include('listar-usuario.php');
                        break;

                    case 'salvar':
                        include('salvar-usuario.php');
                        break;

                    case 'editar':
                        include('editar-usuario.php');
                        break;

                    default:
                        print '<h1>Seja bem vindo!</h1>';
                };
                ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>